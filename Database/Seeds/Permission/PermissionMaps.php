<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\PermissionItem;
use Caiocesar173\Utils\Repositories\PermissionRepository;
use Caiocesar173\Utils\Services\PermissionMapService;

class PermissionMaps extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        $permisson_map = [
            [ 'Teste'                 ,'user'   ],
            [ 'Administrador'         ,'user'   ],
            [ 'Presidência'           ,'user'   ],
            [ 'Desenvolvedor'         ,'user'   ],
            [ 'Logística'             ,'user'   ],
            [ 'Faturamento'           ,'user'   ],
            [ 'Gerente de Contas'     ,'user'   ],
            [ 'Financeiro'            ,'user'   ],
            [ 'Cliente'               ,'user'   ],
            [ 'Suporte'               ,'user'   ],
            [ 'Controle de Qualidade' ,'user'   ],
            [ 'Gerente operacional'   ,'user'   ],
            [ 'Gerente comercial'     ,'user'   ],
            [ 'Desenvolvedor'         ,'user'   ],
            [ 'DBA'                   ,'user'   ],
            [ 'Sistema'               ,'user'   ],
            [ 'Gerente de contratos'  ,'user'   ],
            [ 'Gerente de canais'     ,'user'   ],
            [ 'Teste'                 ,'client' ],
            [ 'Administrador'         ,'client' ],
            [ 'Presidência'           ,'client' ],
            [ 'Desenvolvedor'         ,'client' ],
            [ 'Logística'             ,'client' ],
            [ 'Faturamento'           ,'client' ],
            [ 'Gerente de Contas'     ,'client' ],
            [ 'Financeiro'            ,'client' ],
            [ 'Cliente'               ,'client' ],
            [ 'Suporte'               ,'client' ],
            [ 'Controle de Qualidade' ,'client' ],
            [ 'Gerente operacional'   ,'client' ],
            [ 'Gerente comercial'     ,'client' ],
            [ 'Desenvolvedor'         ,'client' ],
            [ 'DBA'                   ,'client' ],
            [ 'Sistema'               ,'client' ],
            [ 'Gerente de contratos'  ,'client' ],
            [ 'Gerente de canais'     ,'client' ],
        
            //Authentication 
            [ 'Teste'                 ,'auth'   ],
            [ 'Administrador'         ,'auth'   ],
            [ 'Presidência'           ,'auth'   ],
            [ 'Desenvolvedor'         ,'auth'   ],
            [ 'Logística'             ,'auth'   ],
            [ 'Faturamento'           ,'auth'   ],
            [ 'Gerente de Contas'     ,'auth'   ],
            [ 'Financeiro'            ,'auth'   ],
            [ 'Cliente'               ,'auth'   ],
            [ 'Suporte'               ,'auth'   ],
            [ 'Controle de Qualidade' ,'auth'   ],
            [ 'Gerente operacional'   ,'auth'   ],
            [ 'Gerente comercial'     ,'auth'   ],
            [ 'Desenvolvedor'         ,'auth'   ],
            [ 'DBA'                   ,'auth'   ],
            [ 'Sistema'               ,'auth'   ],
            [ 'Gerente de contratos'  ,'auth'   ],
            [ 'Gerente de canais'     ,'auth'   ],

            [ 'Teste'                 ,'auth.login'   ],
            [ 'Administrador'         ,'auth.login'   ],
            [ 'Presidência'           ,'auth.login'   ],
            [ 'Desenvolvedor'         ,'auth.login'   ],
            [ 'Logística'             ,'auth.login'   ],
            [ 'Faturamento'           ,'auth.login'   ],
            [ 'Gerente de Contas'     ,'auth.login'   ],
            [ 'Financeiro'            ,'auth.login'   ],
            [ 'Cliente'               ,'auth.login'   ],
            [ 'Suporte'               ,'auth.login'   ],
            [ 'Controle de Qualidade' ,'auth.login'   ],
            [ 'Gerente operacional'   ,'auth.login'   ],
            [ 'Gerente comercial'     ,'auth.login'   ],
            [ 'Desenvolvedor'         ,'auth.login'   ],
            [ 'DBA'                   ,'auth.login'   ],
            [ 'Sistema'               ,'auth.login'   ],
            [ 'Gerente de contratos'  ,'auth.login'   ],
            [ 'Gerente de canais'     ,'auth.login'   ],

            [ 'Teste'                 ,'auth.logout'   ],
            [ 'Administrador'         ,'auth.logout'   ],
            [ 'Presidência'           ,'auth.logout'   ],
            [ 'Desenvolvedor'         ,'auth.logout'   ],
            [ 'Logística'             ,'auth.logout'   ],
            [ 'Faturamento'           ,'auth.logout'   ],
            [ 'Gerente de Contas'     ,'auth.logout'   ],
            [ 'Financeiro'            ,'auth.logout'   ],
            [ 'Cliente'               ,'auth.logout'   ],
            [ 'Suporte'               ,'auth.logout'   ],
            [ 'Controle de Qualidade' ,'auth.logout'   ],
            [ 'Gerente operacional'   ,'auth.logout'   ],
            [ 'Gerente comercial'     ,'auth.logout'   ],
            [ 'Desenvolvedor'         ,'auth.logout'   ],
            [ 'DBA'                   ,'auth.logout'   ],
            [ 'Sistema'               ,'auth.logout'   ],
            [ 'Gerente de contratos'  ,'auth.logout'   ],
            [ 'Gerente de canais'     ,'auth.logout'   ],

            [ 'Teste'                 ,'auth.information'   ],
            [ 'Administrador'         ,'auth.information'   ],
            [ 'Presidência'           ,'auth.information'   ],
            [ 'Desenvolvedor'         ,'auth.information'   ],
            [ 'Logística'             ,'auth.information'   ],
            [ 'Faturamento'           ,'auth.information'   ],
            [ 'Gerente de Contas'     ,'auth.information'   ],
            [ 'Financeiro'            ,'auth.information'   ],
            [ 'Cliente'               ,'auth.information'   ],
            [ 'Suporte'               ,'auth.information'   ],
            [ 'Controle de Qualidade' ,'auth.information'   ],
            [ 'Gerente operacional'   ,'auth.information'   ],
            [ 'Gerente comercial'     ,'auth.information'   ],
            [ 'Desenvolvedor'         ,'auth.information'   ],
            [ 'DBA'                   ,'auth.information'   ],
            [ 'Sistema'               ,'auth.information'   ],
            [ 'Gerente de contratos'  ,'auth.information'   ],
            [ 'Gerente de canais'     ,'auth.information'   ],

            [ 'Teste'                 ,'auth.permission'    ],
            [ 'Administrador'         ,'auth.permission'    ],
            [ 'Presidência'           ,'auth.permission'    ],
            [ 'Desenvolvedor'         ,'auth.permission'    ],
            [ 'Logística'             ,'auth.permission'    ],
            [ 'Faturamento'           ,'auth.permission'    ],
            [ 'Gerente de Contas'     ,'auth.permission'    ],
            [ 'Financeiro'            ,'auth.permission'    ],
            [ 'Cliente'               ,'auth.permission'    ],
            [ 'Suporte'               ,'auth.permission'    ],
            [ 'Controle de Qualidade' ,'auth.permission'    ],
            [ 'Gerente operacional'   ,'auth.permission'    ],
            [ 'Gerente comercial'     ,'auth.permission'    ],
            [ 'Desenvolvedor'         ,'auth.permission'    ],
            [ 'DBA'                   ,'auth.permission'    ],
            [ 'Sistema'               ,'auth.permission'    ],
            [ 'Gerente de contratos'  ,'auth.permission'    ],
            [ 'Gerente de canais'     ,'auth.permission'    ],
            
            //Statuses
            [ 'Administrador'      ,"status.delete"         ],
            [ 'Presidência'        ,"status.delete"         ],
            [ 'Teste'              ,"status.delete"         ],
            [ 'Desenvolvedor'      ,"status.delete"         ],
            [ 'Sistema'            ,"status.delete"         ],

            [ 'Administrador'      ,"status.deleted.view"   ],
            [ 'Presidência'        ,"status.deleted.view"   ],
            [ 'Teste'              ,"status.deleted.view"   ],
            [ 'Desenvolvedor'      ,"status.deleted.view"   ],
            [ 'Sistema'            ,"status.deleted.view"   ],

            [ 'Administrador'      ,"status.deleted.update" ],
            [ 'Presidência'        ,"status.deleted.update" ],
            [ 'Teste'              ,"status.deleted.update" ],
            [ 'Desenvolvedor'      ,"status.deleted.update" ],
            [ 'Sistema'            ,"status.deleted.update" ],

            [ 'Administrador'      ,"status.block"          ],
            [ 'Presidência'        ,"status.block"          ],
            [ 'Teste'              ,"status.block"          ],
            [ 'Desenvolvedor'      ,"status.block"          ],
            [ 'Sistema'            ,"status.block"          ],

            [ 'Administrador'      ,"status.blocked.view"   ],
            [ 'Presidência'        ,"status.blocked.view"   ],
            [ 'Teste'              ,"status.blocked.view"   ],
            [ 'Desenvolvedor'      ,"status.blocked.view"   ],
            [ 'Sistema'            ,"status.blocked.view"   ],

            [ 'Administrador'      ,"status.blocked.update" ],
            [ 'Presidência'        ,"status.blocked.update" ],
            [ 'Teste'              ,"status.blocked.update" ],
            [ 'Desenvolvedor'      ,"status.blocked.update" ],
            [ 'Sistema'            ,"status.blocked.update" ],

            //Permission Group
            [ 'Administrador' ,"permission.group"         ],
            [ 'Administrador' ,"permission.group.show"    ],
            [ 'Administrador' ,"permission.group.index"   ],
            [ 'Administrador' ,"permission.group.store"   ],
            [ 'Administrador' ,"permission.group.update"  ],
            [ 'Administrador' ,"permission.group.destroy" ],
            [ 'Administrador' ,"permission.group.recover" ],

            //Permission Item
            [ 'Administrador' ,"permission.item"         ],
            [ 'Administrador' ,"permission.item.show"    ],
            [ 'Administrador' ,"permission.item.index"   ],
            [ 'Administrador' ,"permission.item.store"   ],
            [ 'Administrador' ,"permission.item.update"  ],
            [ 'Administrador' ,"permission.item.destroy" ],
            [ 'Administrador' ,"permission.item.recover" ],

            //Permission Map
            [ 'Administrador' ,"permission.map"         ],
            [ 'Administrador' ,"permission.map.show"    ],
            [ 'Administrador' ,"permission.map.index"   ],
            [ 'Administrador' ,"permission.map.store"   ],
            [ 'Administrador' ,"permission.map.update"  ],
            [ 'Administrador' ,"permission.map.destroy" ],
            [ 'Administrador' ,"permission.map.recover" ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('permission_map')->truncate();
        foreach ($permisson_map as $map) 
        {
            $permissionName = $map[0];
            $group = app(PermissionRepository::class)->where('name', $permissionName)->first();
            if(is_null($group))
                throw new \Exception("unable to find permission: $permissionName", 1);

            $permissionItemCode = $map[1];
            $item = app(PermissionItem::class)->where('code', $permissionItemCode)->first();
            if(is_null($item))
                throw new \Exception("unable to find Permission Item: $permissionItemCode", 1);

            app(PermissionMapService::class)->associate( $item, $group );
            echo ("Inserted Permission Map: Group: {$permissionName} | Item: {$permissionItemCode} | [" . array_search($map, $permisson_map) . "]\n");
            $this->command->info('Inserted map from' .  $permissionName . ' [' . count($map) . ']..');
        }
        Schema::enableForeignKeyConstraints();
    }
}
