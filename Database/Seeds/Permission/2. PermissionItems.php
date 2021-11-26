<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\PermissionItem;
use Caiocesar173\Utils\Entities\Statuses;

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
            [ 'name' => 'user'                            ,'code' => 'user'                     ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user list'                       ,'code' => 'list_user'                ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user list single'                ,'code' => 'list_single_user'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'manager'                         ,'code' => 'manager'                  ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'manager associate'               ,'code' => 'associate_manager'        ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'manager list'                    ,'code' => 'list_manager'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'manager list single'             ,'code' => 'list_single_manager'      ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user edit single'                ,'code' => 'edit_single_user'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user delete'                     ,'code' => 'delete_user'              ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user create'                     ,'code' => 'create_user'              ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user password single'            ,'code' => 'passalt_single_user'      ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user password'                   ,'code' => 'passalt_user'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'user edit'                       ,'code' => 'edit_user'                ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'client create'                   ,'code' => 'client_create'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'client list'                     ,'code' => 'client_list'              ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'client list single'              ,'code' => 'client_list_single'       ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'client update'                   ,'code' => 'client_edit'              ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'client update single'            ,'code' => 'client_edit_single'       ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'client delete'                   ,'code' => 'client_delete'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider create'                 ,'code' => 'provider_create'          ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider list'                   ,'code' => 'provider_list'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider list single'            ,'code' => 'provider_list_single'     ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider edit'                   ,'code' => 'provider_edit'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider edit single'            ,'code' => 'provider_edit_single'     ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider delete'                 ,'code' => 'provider_delete'          ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider product create'         ,'code' => 'prov_product_create'      ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider product list'           ,'code' => 'prov_product_list'        ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider product list single'    ,'code' => 'prov_product_list_single' ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider product edit'           ,'code' => 'prov_product_edit'        ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider product edit single'    ,'code' => 'prov_product_edit_single' ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'provider product delete'         ,'code' => 'prov_product_delete'      ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product create'                  ,'code' => 'product_create'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product list'                    ,'code' => 'product_list'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product list single'             ,'code' => 'product_list_single'      ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product edit'                    ,'code' => 'product_edit'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product edit single'             ,'code' => 'product_edit_single'      ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product delete'                  ,'code' => 'product_delete'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product type create'             ,'code' => 'prod_type_create'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product type list'               ,'code' => 'prod_type_list'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product type list single'        ,'code' => 'prod_type_list_single'    ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product type edit'               ,'code' => 'prod_type_edit'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product type edit single'        ,'code' => 'prod_type_edit_single'    ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'product type delete'             ,'code' => 'prod_type_delete'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order create'                    ,'code' => 'order_create'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order aprove'                    ,'code' => 'order_aprove'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order reprove'                   ,'code' => 'order_reprove'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order backoffice'                ,'code' => 'order_backoffice'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order list'                      ,'code' => 'order_list'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order'                           ,'code' => 'order'                    ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order edit'                      ,'code' => 'order_edit'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order create'                    ,'code' => 'order_create'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order delete'                    ,'code' => 'order_delete'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batches finish'            ,'code' => 'order_batches_finish'     ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order finish'                    ,'code' => 'order_finish'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order edit'                      ,'code' => 'order_edit'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order delete'                    ,'code' => 'order_delete'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order item'                      ,'code' => 'order_item'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order item create'               ,'code' => 'order_item_create'        ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order item list'                 ,'code' => 'order_item_list'          ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order item edit'                 ,'code' => 'order_item_edit'          ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order item delete'               ,'code' => 'order_item_delte'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batch'                     ,'code' => 'order_batch'              ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batch create'              ,'code' => 'order_batch_create'       ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batch list'                ,'code' => 'order_batch_list'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batch edit'                ,'code' => 'order_batch_edit'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batch delete'              ,'code' => 'order_batch_delete'       ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batch lnk'                 ,'code' => 'order_batch_link'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'order batch finish'              ,'code' => 'order_batch_finish'       ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see inventary'                   ,'code' => 'see_inventary'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see dashboard'                   ,'code' => 'see_dashboard'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see orders'                      ,'code' => 'see_orders'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'active lines'                    ,'code' => 'active_lines'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'send sms'                        ,'code' => 'send_sms'                 ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'operational manager'             ,'code' => 'operational_manager'      ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see stock'                       ,'code' => 'see_stock'                ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see batchs'                      ,'code' => 'see_batchs'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see stock itens'                 ,'code' => 'see_stock_itens'          ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see customers'                   ,'code' => 'see_customers'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see invoices'                    ,'code' => 'see_invoices'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'see users'                       ,'code' => 'see_users'                ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'stock view'                      ,'code' => 'stock_view'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'stock list'                      ,'code' => 'stock_list'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'stock orders'                    ,'code' => 'stock_orders_'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'invoice view'                    ,'code' => 'invoice_view'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'invoice export detailed'         ,'code' => 'invoice_export_detailed'  ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'invoice export'                  ,'code' => 'invoice_export'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'invoice create'                  ,'code' => 'invoice_create'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'invoice edit'                    ,'code' => 'invoice_edit'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'inventory cancel'                ,'code' => 'inventory_cancel'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'inventory edit'                  ,'code' => 'inventory_edit'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'inventory create'                ,'code' => 'inventory_create'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'inventory view'                  ,'code' => 'inventory_view'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim create'                      ,'code' => 'sim_create'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim list'                        ,'code' => 'sim_list'                 ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim edit'                        ,'code' => 'sim_edit'                 ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim delete'                      ,'code' => 'sim_delete'               ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim activate'                    ,'code' => 'sim_activate'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim reset'                       ,'code' => 'sim_reset'                ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim associate'                   ,'code' => 'sim_associate'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim dissociate'                  ,'code' => 'sim_dissociate'           ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'sim dispatch'                    ,'code' => 'sim_dispatch'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'create stock'                    ,'code' => 'stock_create'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Repor estoque'                   ,'code' => 're_stock'                 ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Atualizar contatos'              ,'code' => 'update_contacts'          ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Atualizar endereços'             ,'code' => 'update_addresses'         ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Criar novo estoque'              ,'code' => 'create_stock'             ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
            [ 'name' => 'Cadastrar cliente'               ,'code' => 'client_create'            ,'status_id' => 'Active'  ,'icon' => NULL   ,'icon_type' => NULL ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('permission_item')->truncate();
        foreach ($items as $item) {
            $statusName = $item['status_id'];
            $status = Statuses::where('name', $statusName)->first();
            if(is_null($status))
                throw new \Exception("unable to find status: $statusName", 1);

            $item['status_id'] = $status->id; 
                

            $this->command->info('Inserted permission item from' . $item['name'] . ' [' . count($item) . ']..');
            PermissionItem::create($item);
        }
        Schema::enableForeignKeyConstraints();
    }
}
