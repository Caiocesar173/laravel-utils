<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\PermissionItem;
use Caiocesar173\Utils\Entities\Statuses;
use Caiocesar173\Utils\Enum\PermissionItemTypeEnum;
use Caiocesar173\Utils\Enum\StatusEnum;

class PermissionItems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();

        $items = [
            //General Basic Itemss
            [ 
                'name' => "Permission for Accessing the Resource User",
                'code' => "user",
                'type' => PermissionItemTypeEnum::ITEM,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Accessing the Resource Client",
                'code' => "client",
                'type' => PermissionItemTypeEnum::ITEM,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],

            //Authentication 
            [ 
                'name' => "Permission for Accessing the Resource Authentication",
                'code' => "auth",
                'type' => PermissionItemTypeEnum::ITEM,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Login in the Resource Authentication",
                'code' => "auth.login",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Logout in the Resource Authentication",
                'code' => "auth.logout",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Token Information in the Resource Authentication",
                'code' => "auth.information",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],

            //Permission Group
            [ 
                'name' => "Permission for Accessing the Resource Permission Group",
                'code' => "permission.group",
                'type' => PermissionItemTypeEnum::ITEM,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Listing and Searching in the Resource Permission Group",
                'code' => "permission.group.show",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Listing, Searching and Exporting in table format on the Resource Permission Group",
                'code' => "permission.group.index",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Creating in the Resource Permission Group",
                'code' => "permission.group.store",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Editing in the Resource Permission Group",
                'code' => "permission.group.update",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Deleting in the Resource Permission Group",
                'code' => "permission.group.destroy",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Recovering in the Resource Permission Group",
                'code' => "permission.group.recover",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],

            //Permission Item
            [ 
                'name' => "Permission for Accessing the Resource Permission Item",
                'code' => "permission.item",
                'type' => PermissionItemTypeEnum::ITEM,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Listing and Searching in the Resource Permission Item",
                'code' => "permission.item.show",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Listing, Searching and Exporting in table format on the Resource Permission Item",
                'code' => "permission.item.index",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Creating in the Resource Permission Item",
                'code' => "permission.item.store",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Editing in the Resource Permission Item",
                'code' => "permission.item.update",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Deleting in the Resource Permission Item",
                'code' => "permission.item.destroy",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Recovering in the Resource Permission Item",
                'code' => "permission.item.recover",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],

            //Permission Map
            [ 
                'name' => "Permission for Accessing the Resource Permission Map",
                'code' => "permission.map",
                'type' => PermissionItemTypeEnum::ITEM,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Listing and Searching in the Resource Permission Map",
                'code' => "permission.map.show",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Listing, Searching and Exporting in table format on the Resource Permission Map",
                'code' => "permission.map.index",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Creating in the Resource Permission Map",
                'code' => "permission.map.store",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Editing in the Resource Permission Map",
                'code' => "permission.map.update",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Deleting in the Resource Permission Map",
                'code' => "permission.map.destroy",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
            [ 
                'name' => "Permission for Recovering in the Resource Permission Map",
                'code' => "permission.map.recover",
                'type' => PermissionItemTypeEnum::ROUTE,
                'status' => StatusEnum::ACTIVE,
                'icon' => NULL,
                'icon_type' => NULL 
            ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('permission_item')->truncate();
        foreach ($items as $item) 
        {
            PermissionItem::create($item);
            echo ("Inserted Permission Item: {$item['name']} [" . array_search($item, $items) . "]\n");
            $this->command->info('Inserted permission item from' . $item['name'] . ' [' . count($item) . ']..');
        }
        Schema::enableForeignKeyConstraints();
    }
}
