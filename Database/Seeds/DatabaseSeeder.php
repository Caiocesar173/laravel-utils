<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Caiocesar173\Utils\Abstracts\SeederAbstract;

use Caiocesar173\Utils\Database\Seeds\Authentication\UserTableSeeder;
use Caiocesar173\Utils\Database\Seeds\GeoInfo\Currency\CurrencyTableSeeder;

use Caiocesar173\Utils\Database\Seeds\GeoInfo\Area\PhoneAreaTableSeeder;
use Caiocesar173\Utils\Database\Seeds\GeoInfo\Area\NetworkAreaTableSeeder;

use Caiocesar173\Utils\Database\Seeds\GeoInfo\Geo\CityTableSeeder;
use Caiocesar173\Utils\Database\Seeds\GeoInfo\Geo\StateTableSeeder;
use Caiocesar173\Utils\Database\Seeds\GeoInfo\Geo\CountryTableSeeder;
use Caiocesar173\Utils\Database\Seeds\GeoInfo\Geo\ContinentTableSeeder;

use Caiocesar173\Utils\Database\Seeds\GeoInfo\Language\LanguageTableSeeder;
use Caiocesar173\Utils\Database\Seeds\GeoInfo\Language\LanguageMapTableSeeder;

use Caiocesar173\Utils\Database\Seeds\GeoInfo\Zones\TimeZoneTableSeeder;
use Caiocesar173\Utils\Database\Seeds\GeoInfo\Zones\TimeZoneMapTableSeeder;

use Caiocesar173\Utils\Database\Seeds\Permission\PermissionTableSeeder;
use Caiocesar173\Utils\Database\Seeds\Permission\PermissionMapTableSeeder;
use Caiocesar173\Utils\Database\Seeds\Permission\PermissionItemTableSeeder;

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
            $this->call(CurrencyTableSeeder::class);

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
        }
    }
}
