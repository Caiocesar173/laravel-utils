<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\Statuses;


class Status extends Seeder
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
                'title' => 'Active', 
                'visible' => '1', 
                'active' => '1',
            ],
            [
                'title' => 'Edited', 
                'visible' => '1', 
                'active' => '1',
            ],
            [
                'title' => 'Inactive', 
                'visible' => '0', 
                'active' => '1',
            ],
            [
                'title' => 'Excluded', 
                'visible' => '0', 
                'active' => '1',
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('statuses')->truncate();
        foreach ($statuses as $status) {
            $this->command->info('Inserted status from' . $status['title'] . ' [' . count($status) . ']..');
            Statuses::create($status);
        }
        Schema::enableForeignKeyConstraints();
    }
}
