<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use Caiocesar173\Utils\Entities\Continent;


class Continents extends Seeder
{    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::disableQueryLog();

        $continents = [
            [
            'name' => 'Africa',
            'code' => 'AF'
            ],
            [
            'name' => 'Antarctica',
            'code' => 'AN'
            ],
            [
            'name' => 'Asia',
            'code' => 'AS'
            ],
            [
            'name' => 'Europe',
            'code' => 'EU'
            ],
            [
            'name' => 'North America',
            'code' => 'NA'
            ],
            [
            'name' => 'Oceania',
            'code' => 'OC'
            ],
            [
            'name' => 'South America',
            'code' => 'SA'
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('continent')->truncate();
        foreach ($continents as $continent) {
            $this->command->info('Inserted Continent from' . $continent['name'] . ' [' . count($continent) . ']..');
            Continent::create($continent);
        }
        Schema::enableForeignKeyConstraints();
    }
}
