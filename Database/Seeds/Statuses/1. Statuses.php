<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\Statuses;


class Statusess extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();

        $statuses = [
            [
                'name' => 'Active', 
                'visible' => '1', 
                'active' => '1',
            ],
            [
                'name' => 'Edited', 
                'visible' => '1', 
                'active' => '1',
            ],
            [
                'name' => 'Inactive', 
                'visible' => '0', 
                'active' => '1',
            ],
            [
                'name' => 'Excluded', 
                'visible' => '0', 
                'active' => '1',
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('statuses')->truncate();
        foreach ($statuses as $status) {
            $this->command->info('Inserted status from' . $status['name'] . ' [' . count($status) . ']..');
            Statuses::create($status);
        }
        Schema::enableForeignKeyConstraints();
    }
}
