<?php

namespace Caiocesar173\Utils\Abstracts;

use Caiocesar173\Utils\Entities\Seed;
use Caiocesar173\Utils\Services\PermissionMapService;
use Caiocesar173\Utils\Services\PermissionItemService;

use Illuminate\Database\Seeder;

class SeederAbstract extends Seeder
{
    public function call($class, $silent = false, array $parameters = [])
    {
        $seeded = Seed::where('seed', $class)->first();
        if (is_null($seeded)) {
            Seed::create(['seed' => $class]);
            parent::call($class, $silent, $parameters);
        }
        echo "\033[0;32mAlready Seeded [$class] \n";
        return null;
    }

    /**
     * Run the current database seeder file.
     *
     * @return void
     */
    public function seed($path = null)
    {
        if (is_null($path))
            $path = __DIR__ . "/permission.json";

        if (!file_exists($path)) {
            echo ("Permissions file not found: $path\n");
            return "Permissions file not found: $path\n";
        }

        $json = json_decode(file_get_contents($path));
        $permissions = $json->permissions;
        $group = $json->group;

        if (empty($permissions)) {
            echo ("No Permissions in file $path\n");
            return "No Permissions in file $path\n";
        }

        if (empty($group)) {
            echo ("No Groups in file $path\n");
            return "No Groups in file $path\n";
        }

        $items = app(PermissionItemService::class)->create((array)$permissions);

        $permission_items = [];
        foreach ($items as $permission_item)
            array_push($permission_items, $permission_item->code);

        $items = app(PermissionItemService::class)->create($permissions);
        $save = app(PermissionMapService::class)->associate($items, $group);

        if (is_array($save)) {
            foreach ($save as $item)
                echo (implode(",", $item) . "\n");
        } else
            echo ($save . "\n");

        return $save;
    }
}
