<?php

namespace Caiocesar173\Utils\Database\Seeders;

use Caiocesar173\Utils\Abstracts\SeederAbstract;

use Caiocesar173\Utils\Database\Seeders\Authentication\UserTableSeeder;
use Caiocesar173\Utils\Database\Seeders\GeoInfo\Currency\CurrencyTableSeeder;

use Caiocesar173\Utils\Database\Seeders\GeoInfo\Area\PhoneAreaTableSeeder;
use Caiocesar173\Utils\Database\Seeders\GeoInfo\Area\NetworkAreaTableSeeder;

use Caiocesar173\Utils\Database\Seeders\GeoInfo\Geo\CityTableSeeder;
use Caiocesar173\Utils\Database\Seeders\GeoInfo\Geo\StateTableSeeder;
use Caiocesar173\Utils\Database\Seeders\GeoInfo\Geo\CountryTableSeeder;
use Caiocesar173\Utils\Database\Seeders\GeoInfo\Geo\ContinentTableSeeder;

use Caiocesar173\Utils\Database\Seeders\GeoInfo\Language\LanguageTableSeeder;
use Caiocesar173\Utils\Database\Seeders\GeoInfo\Language\LanguageMapTableSeeder;

use Caiocesar173\Utils\Database\Seeders\GeoInfo\Zones\TimeZoneTableSeeder;
use Caiocesar173\Utils\Database\Seeders\GeoInfo\Zones\TimeZoneMapTableSeeder;

use Caiocesar173\Utils\Database\Seeders\Permission\PermissionTableSeeder;
use Caiocesar173\Utils\Database\Seeders\Permission\PermissionMapTableSeeder;
use Caiocesar173\Utils\Database\Seeders\Permission\PermissionItemTableSeeder;

class DatabaseSeeder extends SeederAbstract
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (!env('UTILS_ONLY_CLASSES')) {
            $this->call(PermissionTableSeeder::class);
            $this->call(PermissionItemTableSeeder::class);
            $this->call(PermissionMapTableSeeder::class);
            $this->call(UserTableSeeder::class);

            if (env('UTILS_GEOLOC_ENABLE') === TRUE) {
                $this->call(ContinentTableSeeder::class);
                $this->call(CountryTableSeeder::class);
                $this->call(StateTableSeeder::class);
                $this->call(CityTableSeeder::class);

                $this->call(NetworkAreaTableSeeder::class);
                $this->call(PhoneAreaTableSeeder::class);

                $this->call(LanguageTableSeeder::class);
                $this->call(LanguageMapTableSeeder::class);

                $this->call(TimeZoneTableSeeder::class);
                $this->call(TimeZoneMapTableSeeder::class);
            }

            $this->call(CurrencyTableSeeder::class);
        }
    }
}
