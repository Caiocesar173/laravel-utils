<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Repositories\SituationRepository;

class Situations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();

        $situations = [
            [
                'name' => 'Created', 
                'visible' => '1', 
                'active' => '1',
            ],
            [
                'name' => 'Updated', 
                'visible' => '1', 
                'active' => '1',
            ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('situation')->truncate();
        foreach ($situations as $situation) {
            app(SituationRepository::class)->create($situation);

            echo ("Inserted Status: {$situation['name']} [" . array_search($situation, $situations) . "]\n");
            $this->command->info('Inserted status from' . $situation['name'] . ' [' . count($situation) . ']..');
        }
        Schema::enableForeignKeyConstraints();
    }
}
