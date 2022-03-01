<?php

namespace Caiocesar173\Utils\Database\Seeds;

use App\Models\User;
use Caiocesar173\Utils\Entities\Permission;
use Caiocesar173\Utils\Services\PermissionMapService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();

        $users = [
            [
                'name' => 'Test User',
                'email' => 'test_user@mail.com',
                'password' => bcrypt('123456789'),
            ],
        ];

        $permissions = [
            [
                'user' => 'test_user@mail.com',
                'permission' => 'Administrador',
            ]
        ];
        
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        foreach ($users as $user) {
            User::create($user);
            echo ("Inserted User: {$user['name']} [" . array_search($user, $users) . "]\n");
            $this->command->info("\nInserted user from" . $user["name"] . " [" . count($user) . "]..\n");
        }

        if(env('UTILS_PERMISSION_ENABLE'))
        {
            foreach ($permissions as $permission) 
            {
                $userEmail = $permission['user'];
                $user = User::where('email', $userEmail)->first();
                if(is_null($user))
                    throw new \Exception("unable to find user: $userEmail", 1);

                $permissionName = $permission['permission'];
                $group = Permission::where('name', $permissionName)->first();
                if(is_null($group))
                    throw new \Exception("unable to find Permission Item: $group", 1);

                $save = app(PermissionMapService::class)->associate( $group, $user );
                echo ("Inserted Permission Map: Group: {$permissionName} | Item: {$userEmail} | [" . array_search($permission, $permissions) . "]\n");
                $this->command->info('Inserted map from' .  $permissionName . ' [' . array_search($permission, $permissions) . ']..');
            }
        }
        Schema::enableForeignKeyConstraints();
    }
}
