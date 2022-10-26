<?php

namespace Caiocesar173\Utils\Database\Seeders\GeoInfo\Geo;

use Caiocesar173\Utils\Entities\Continent;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ContinentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
        DB::table('continents')->truncate();
        $counter = 0;
        foreach ($continents as $continent) {
            $save = Continent::create($continent);
            if (is_string($save))
                throw new \Exception($save, 1);

            if ($this->command)
                $this->command->info("Inserted continent {$continent['name']} [$counter].");
            else
                echo ("Inserted continent {$continent['name']} [$counter].\n");

            $counter += 1;
        }
        Schema::enableForeignKeyConstraints();
    }
}
