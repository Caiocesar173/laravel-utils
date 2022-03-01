<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\Permission;
use Caiocesar173\Utils\Enum\StatusEnum;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();      

        $permissions = [
            [ 'name' => 'Teste'                 ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Administrador'         ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Presidência'           ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Desenvolvedor'         ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Logística'             ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Faturamento'           ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Financeiro'            ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Cliente'               ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Suporte'               ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'DBA'                   ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Sistema'               ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Controle de Qualidade' ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Gerente de Contas'     ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Gerente Operacional'   ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Gerente Comercial'     ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Gerente de Contratos'  ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
            [ 'name' => 'Gerente de Canais'     ,'status' => StatusEnum::ACTIVE ,'code' => NULL ,'icon' => NULL ,'icon_type' => NULL ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('permission')->truncate();
        foreach ($permissions as $permission) {
            Permission::create($permission);
            echo ("Inserted Permission Group: {$permission['name']} [" . array_search($permission, $permissions) . "]\n");
            $this->command->info('Inserted permission group from' . $permission['name'] . ' [' . count($permission) . ']..');
        }
        Schema::enableForeignKeyConstraints();
    }
}
