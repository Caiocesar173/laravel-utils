<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\Permission;


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
            [ 'name' => 'Teste'                       ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Presidência'                 ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Desenvolvedor'               ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Logística'                   ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Faturamento'                 ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Gerente de Contas'           ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Financeiro'                  ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Cliente'                     ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Suporte'                     ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Controle de Qualidade'       ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Gerente operacional'         ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Gerente comercial'           ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Desenvolvedor Junior'        ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Desenvolvedor Senior'        ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'DBA'                         ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'DBA Junior'                  ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'DBA Senior'                  ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Sistema'                     ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Gerente de contratos'        ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Gerente de canais'           ,'code' => NULL    ,'icon' => NULL   ,'icon_type' => NULL ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('permission')->truncate();
        foreach ($permissions as $permission) {
            $this->command->info('Inserted permission from' . $permission['name'] . ' [' . count($permission) . ']..');
            Permission::create($permission);
        }
        Schema::enableForeignKeyConstraints();
    }
}
