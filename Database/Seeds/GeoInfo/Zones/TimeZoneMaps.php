<?php

namespace Caiocesar173\Utils\Database\Seeds;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\Country;
use Caiocesar173\Utils\Entities\TimeZone;

use Caiocesar173\Utils\Entities\TimeZoneMap;


class TimeZoneMaps extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::disableQueryLog();

        $timeZones = [
            [
                "country" => "AF",
                "zone" => "Asia/Kabul"
            ],
            [
                "country" => "AL",
                "zone" => "Europe/Tirane"
            ],
            [
                "country" => "DZ",
                "zone" => "Africa/Algiers"
            ],
            [
                "country" => "AS",
                "zone" => "Pacific/Pago_Pago"
            ],
            [
                "country" => "AD",
                "zone" => "Europe/Andorra"
            ],
            [
                "country" => "AO",
                "zone" => "Africa/Luanda"
            ],
            [
                "country" => "AI",
                "zone" => "America/Anguilla"
            ],
            [
                "country" => "AQ",
                "zone" => "Antarctica/Vostok"
            ],
            [
                "country" => "AG",
                "zone" => "America/Antigua"
            ],
            [
                "country" => "AR",
                "zone" => "America/Argentina/Ushuaia"
            ],
            [
                "country" => "AM",
                "zone" => "Asia/Yerevan"
            ],
            [
                "country" => "AW",
                "zone" => "America/Aruba"
            ],
            [
                "country" => "AU",
                "zone" => "Australia/Sydney"
            ],
            [
                "country" => "AT",
                "zone" => "Europe/Vienna"
            ],
            [
                "country" => "AZ",
                "zone" => "Asia/Baku"
            ],
            [
                "country" => "BS",
                "zone" => "America/Nassau"
            ],
            [
                "country" => "BH",
                "zone" => "Asia/Bahrain"
            ],
            [
                "country" => "BD",
                "zone" => "Asia/Dhaka"
            ],
            [
                "country" => "BB",
                "zone" => "America/Barbados"
            ],
            [
                "country" => "BY",
                "zone" => "Europe/Minsk"
            ],
            [
                "country" => "BE",
                "zone" => "Europe/Brussels"
            ],
            [
                "country" => "BZ",
                "zone" => "America/Belize"
            ],
            [
                "country" => "BJ",
                "zone" => "Africa/Porto-Novo"
            ],
            [
                "country" => "BM",
                "zone" => "Atlantic/Bermuda"
            ],
            [
                "country" => "BT",
                "zone" => "Asia/Thimphu"
            ],
            [
                "country" => "BO",
                "zone" => "America/La_Paz"
            ],
            [
                "country" => "BA",
                "zone" => "Europe/Sarajevo"
            ],
            [
                "country" => "BW",
                "zone" => "Africa/Gaborone"
            ],
            [
                "country" => "BR",
                "zone" => "America/Sao_Paulo"
            ],
            [
                "country" => "IO",
                "zone" => "Indian/Chagos"
            ],
            [
                "country" => "VG",
                "zone" => "America/Tortola"
            ],
            [
                "country" => "BN",
                "zone" => "Asia/Brunei"
            ],
            [
                "country" => "BG",
                "zone" => "Europe/Sofia"
            ],
            [
                "country" => "BF",
                "zone" => "Africa/Ouagadougou"
            ],
            [
                "country" => "BI",
                "zone" => "Africa/Bujumbura"
            ],
            [
                "country" => "KH",
                "zone" => "Asia/Phnom_Penh"
            ],
            [
                "country" => "CM",
                "zone" => "Africa/Douala"
            ],
            [
                "country" => "CA",
                "zone" => "America/Yellowknife"
            ],
            [
                "country" => "CV",
                "zone" => "Atlantic/Cape_Verde"
            ],
            [
                "country" => "KY",
                "zone" => "America/Cayman"
            ],
            [
                "country" => "CF",
                "zone" => "Africa/Bangui"
            ],
            [
                "country" => "TD",
                "zone" => "Africa/Ndjamena"
            ],
            [
                "country" => "CL",
                "zone" => "Pacific/Easter"
            ],
            [
                "country" => "CN",
                "zone" => "Asia/Urumqi"
            ],
            [
                "country" => "CX",
                "zone" => "Indian/Christmas"
            ],
            [
                "country" => "CC",
                "zone" => "Indian/Cocos"
            ],
            [
                "country" => "CO",
                "zone" => "America/Bogota"
            ],
            [
                "country" => "KM",
                "zone" => "Indian/Comoro"
            ],
            [
                "country" => "CK",
                "zone" => "Pacific/Rarotonga"
            ],
            [
                "country" => "CR",
                "zone" => "America/Costa_Rica"
            ],
            [
                "country" => "HR",
                "zone" => "Europe/Zagreb"
            ],
            [
                "country" => "CU",
                "zone" => "America/Havana"
            ],
            [
                "country" => "CW",
                "zone" => "America/Curacao"
            ],
            [
                "country" => "CY",
                "zone" => "Asia/Nicosia"
            ],
            [
                "country" => "CZ",
                "zone" => "Europe/Prague"
            ],
            [
                "country" => "CD",
                "zone" => "Africa/Lubumbashi"
            ],
            [
                "country" => "DK",
                "zone" => "Europe/Copenhagen"
            ],
            [
                "country" => "DJ",
                "zone" => "Africa/Djibouti"
            ],
            [
                "country" => "DM",
                "zone" => "America/Dominica"
            ],
            [
                "country" => "DO",
                "zone" => "America/Santo_Domingo"
            ],
            [
                "country" => "TL",
                "zone" => "Asia/Dili"
            ],
            [
                "country" => "EC",
                "zone" => "Pacific/Galapagos"
            ],
            [
                "country" => "EG",
                "zone" => "Africa/Cairo"
            ],
            [
                "country" => "SV",
                "zone" => "America/El_Salvador"
            ],
            [
                "country" => "GQ",
                "zone" => "Africa/Malabo"
            ],
            [
                "country" => "ER",
                "zone" => "Africa/Asmara"
            ],
            [
                "country" => "EE",
                "zone" => "Europe/Tallinn"
            ],
            [
                "country" => "ET",
                "zone" => "Africa/Addis_Ababa"
            ],
            [
                "country" => "FK",
                "zone" => "Atlantic/Stanley"
            ],
            [
                "country" => "FO",
                "zone" => "Atlantic/Faroe"
            ],
            [
                "country" => "FJ",
                "zone" => "Pacific/Fiji"
            ],
            [
                "country" => "FI",
                "zone" => "Europe/Helsinki"
            ],
            [
                "country" => "FR",
                "zone" => "Europe/Paris"
            ],
            [
                "country" => "PF",
                "zone" => "Pacific/Tahiti"
            ],
            [
                "country" => "GA",
                "zone" => "Africa/Libreville"
            ],
            [
                "country" => "GM",
                "zone" => "Africa/Banjul"
            ],
            [
                "country" => "GE",
                "zone" => "Asia/Tbilisi"
            ],
            [
                "country" => "DE",
                "zone" => "Europe/Busingen"
            ],
            [
                "country" => "GH",
                "zone" => "Africa/Accra"
            ],
            [
                "country" => "GI",
                "zone" => "Europe/Gibraltar"
            ],
            [
                "country" => "GR",
                "zone" => "Europe/Athens"
            ],
            [
                "country" => "GL",
                "zone" => "America/Thule"
            ],
            [
                "country" => "GD",
                "zone" => "America/Grenada"
            ],
            [
                "country" => "GU",
                "zone" => "Pacific/Guam"
            ],
            [
                "country" => "GT",
                "zone" => "America/Guatemala"
            ],
            [
                "country" => "GG",
                "zone" => "Europe/Guernsey"
            ],
            [
                "country" => "GN",
                "zone" => "Africa/Conakry"
            ],
            [
                "country" => "GW",
                "zone" => "Africa/Bissau"
            ],
            [
                "country" => "GY",
                "zone" => "America/Guyana"
            ],
            [
                "country" => "HT",
                "zone" => "America/Port-au-Prince"
            ],
            [
                "country" => "HN",
                "zone" => "America/Tegucigalpa"
            ],
            [
                "country" => "HK",
                "zone" => "Asia/Hong_Kong"
            ],
            [
                "country" => "HU",
                "zone" => "Europe/Budapest"
            ],
            [
                "country" => "IS",
                "zone" => "Atlantic/Reykjavik"
            ],
            [
                "country" => "IN",
                "zone" => "Asia/Kolkata"
            ],
            [
                "country" => "ID",
                "zone" => "Asia/Pontianak"
            ],
            [
                "country" => "IR",
                "zone" => "Asia/Tehran"
            ],
            [
                "country" => "IQ",
                "zone" => "Asia/Baghdad"
            ],
            [
                "country" => "IE",
                "zone" => "Europe/Dublin"
            ],
            [
                "country" => "IM",
                "zone" => "Europe/Isle_of_Man"
            ],
            [
                "country" => "IL",
                "zone" => "Asia/Jerusalem"
            ],
            [
                "country" => "IT",
                "zone" => "Europe/Rome"
            ],
            [
                "country" => "CI",
                "zone" => "Africa/Abidjan"
            ],
            [
                "country" => "JM",
                "zone" => "America/Jamaica"
            ],
            [
                "country" => "JP",
                "zone" => "Asia/Tokyo"
            ],
            [
                "country" => "JE",
                "zone" => "Europe/Jersey"
            ],
            [
                "country" => "JO",
                "zone" => "Asia/Amman"
            ],
            [
                "country" => "KZ",
                "zone" => "Asia/Qyzylorda"
            ],
            [
                "country" => "KE",
                "zone" => "Africa/Nairobi"
            ],
            [
                "country" => "KI",
                "zone" => "Pacific/Tarawa"
            ],
            [
                "country" => "XK",
                "zone" => "Europe/Belgrade"
            ],
            [
                "country" => "KW",
                "zone" => "Asia/Kuwait"
            ],
            [
                "country" => "KG",
                "zone" => "Asia/Bishkek"
            ],
            [
                "country" => "LA",
                "zone" => "Asia/Vientiane"
            ],
            [
                "country" => "LV",
                "zone" => "Europe/Riga"
            ],
            [
                "country" => "LB",
                "zone" => "Asia/Beirut"
            ],
            [
                "country" => "LS",
                "zone" => "Africa/Maseru"
            ],
            [
                "country" => "LR",
                "zone" => "Africa/Monrovia"
            ],
            [
                "country" => "LY",
                "zone" => "Africa/Tripoli"
            ],
            [
                "country" => "LI",
                "zone" => "Europe/Vaduz"
            ],
            [
                "country" => "LT",
                "zone" => "Europe/Vilnius"
            ],
            [
                "country" => "LU",
                "zone" => "Europe/Luxembourg"
            ],
            [
                "country" => "MO",
                "zone" => "Asia/Macau"
            ],
            [
                "country" => "MK",
                "zone" => "Europe/Skopje"
            ],
            [
                "country" => "MG",
                "zone" => "Indian/Antananarivo"
            ],
            [
                "country" => "MW",
                "zone" => "Africa/Blantyre"
            ],
            [
                "country" => "MY",
                "zone" => "Asia/Kuching"
            ],
            [
                "country" => "MV",
                "zone" => "Indian/Maldives"
            ],
            [
                "country" => "ML",
                "zone" => "Africa/Bamako"
            ],
            [
                "country" => "MT",
                "zone" => "Europe/Malta"
            ],
            [
                "country" => "MH",
                "zone" => "Pacific/Majuro"
            ],
            [
                "country" => "MR",
                "zone" => "Africa/Nouakchott"
            ],
            [
                "country" => "MU",
                "zone" => "Indian/Mauritius"
            ],
            [
                "country" => "YT",
                "zone" => "Indian/Mayotte"
            ],
            [
                "country" => "MX",
                "zone" => "America/Tijuana"
            ],
            [
                "country" => "FM",
                "zone" => "Pacific/Pohnpei"
            ],
            [
                "country" => "MD",
                "zone" => "Europe/Chisinau"
            ],
            [
                "country" => "MC",
                "zone" => "Europe/Monaco"
            ],
            [
                "country" => "MN",
                "zone" => "Asia/Ulaanbaatar"
            ],
            [
                "country" => "ME",
                "zone" => "Europe/Podgorica"
            ],
            [
                "country" => "MS",
                "zone" => "America/Montserrat"
            ],
            [
                "country" => "MA",
                "zone" => "Africa/Casablanca"
            ],
            [
                "country" => "MZ",
                "zone" => "Africa/Maputo"
            ],
            [
                "country" => "MM",
                "zone" => "Asia/Yangon"
            ],
            [
                "country" => "NA",
                "zone" => "Africa/Windhoek"
            ],
            [
                "country" => "NR",
                "zone" => "Pacific/Nauru"
            ],
            [
                "country" => "NP",
                "zone" => "Asia/Kathmandu"
            ],
            [
                "country" => "NL",
                "zone" => "Europe/Amsterdam"
            ],
            [
                "country" => "NC",
                "zone" => "Pacific/Noumea"
            ],
            [
                "country" => "NZ",
                "zone" => "Pacific/Chatham"
            ],
            [
                "country" => "NI",
                "zone" => "America/Managua"
            ],
            [
                "country" => "NE",
                "zone" => "Africa/Niamey"
            ],
            [
                "country" => "NG",
                "zone" => "Africa/Lagos"
            ],
            [
                "country" => "NU",
                "zone" => "Pacific/Niue"
            ],
            [
                "country" => "KP",
                "zone" => "Asia/Pyongyang"
            ],
            [
                "country" => "MP",
                "zone" => "Pacific/Saipan"
            ],
            [
                "country" => "NO",
                "zone" => "Europe/Oslo"
            ],
            [
                "country" => "OM",
                "zone" => "Asia/Muscat"
            ],
            [
                "country" => "PK",
                "zone" => "Asia/Karachi"
            ],
            [
                "country" => "PW",
                "zone" => "Pacific/Palau"
            ],
            [
                "country" => "PS",
                "zone" => "Asia/Hebron"
            ],
            [
                "country" => "PA",
                "zone" => "America/Panama"
            ],
            [
                "country" => "PG",
                "zone" => "Pacific/Port_Moresby"
            ],
            [
                "country" => "PY",
                "zone" => "America/Asuncion"
            ],
            [
                "country" => "PE",
                "zone" => "America/Lima"
            ],
            [
                "country" => "PH",
                "zone" => "Asia/Manila"
            ],
            [
                "country" => "PN",
                "zone" => "Pacific/Pitcairn"
            ],
            [
                "country" => "PL",
                "zone" => "Europe/Warsaw"
            ],
            [
                "country" => "PT",
                "zone" => "Europe/Lisbon"
            ],
            [
                "country" => "PR",
                "zone" => "America/Puerto_Rico"
            ],
            [
                "country" => "QA",
                "zone" => "Asia/Qatar"
            ],
            [
                "country" => "CG",
                "zone" => "Africa/Brazzaville"
            ],
            [
                "country" => "RE",
                "zone" => "Indian/Reunion"
            ],
            [
                "country" => "RO",
                "zone" => "Europe/Bucharest"
            ],
            [
                "country" => "RU",
                "zone" => "Europe/Volgograd"
            ],
            [
                "country" => "RW",
                "zone" => "Africa/Kigali"
            ],
            [
                "country" => "BL",
                "zone" => "America/St_Barthelemy"
            ],
            [
                "country" => "SH",
                "zone" => "Atlantic/St_Helena"
            ],
            [
                "country" => "KN",
                "zone" => "America/St_Kitts"
            ],
            [
                "country" => "LC",
                "zone" => "America/St_Lucia"
            ],
            [
                "country" => "MF",
                "zone" => "America/Marigot"
            ],
            [
                "country" => "PM",
                "zone" => "America/Miquelon"
            ],
            [
                "country" => "VC",
                "zone" => "America/St_Vincent"
            ],
            [
                "country" => "WS",
                "zone" => "Pacific/Apia"
            ],
            [
                "country" => "SM",
                "zone" => "Europe/San_Marino"
            ],
            [
                "country" => "ST",
                "zone" => "Africa/Sao_Tome"
            ],
            [
                "country" => "SA",
                "zone" => "Asia/Riyadh"
            ],
            [
                "country" => "SN",
                "zone" => "Africa/Dakar"
            ],
            [
                "country" => "RS",
                "zone" => "Europe/Belgrade"
            ],
            [
                "country" => "SC",
                "zone" => "Indian/Mahe"
            ],
            [
                "country" => "SL",
                "zone" => "Africa/Freetown"
            ],
            [
                "country" => "SG",
                "zone" => "Asia/Singapore"
            ],
            [
                "country" => "SX",
                "zone" => "America/Anguilla"
            ],
            [
                "country" => "SK",
                "zone" => "Europe/Bratislava"
            ],
            [
                "country" => "SI",
                "zone" => "Europe/Ljubljana"
            ],
            [
                "country" => "SB",
                "zone" => "Pacific/Guadalcanal"
            ],
            [
                "country" => "SO",
                "zone" => "Africa/Mogadishu"
            ],
            [
                "country" => "ZA",
                "zone" => "Africa/Johannesburg"
            ],
            [
                "country" => "KR",
                "zone" => "Asia/Seoul"
            ],
            [
                "country" => "SS",
                "zone" => "Africa/Juba"
            ],
            [
                "country" => "ES",
                "zone" => "Europe/Madrid"
            ],
            [
                "country" => "LK",
                "zone" => "Asia/Colombo"
            ],
            [
                "country" => "SD",
                "zone" => "Africa/Khartoum"
            ],
            [
                "country" => "SR",
                "zone" => "America/Paramaribo"
            ],
            [
                "country" => "SJ",
                "zone" => "Arctic/Longyearbyen"
            ],
            [
                "country" => "SZ",
                "zone" => "Africa/Mbabane"
            ],
            [
                "country" => "SE",
                "zone" => "Europe/Stockholm"
            ],
            [
                "country" => "CH",
                "zone" => "Europe/Zurich"
            ],
            [
                "country" => "SY",
                "zone" => "Asia/Damascus"
            ],
            [
                "country" => "TW",
                "zone" => "Asia/Taipei"
            ],
            [
                "country" => "TJ",
                "zone" => "Asia/Dushanbe"
            ],
            [
                "country" => "TZ",
                "zone" => "Africa/Dar_es_Salaam"
            ],
            [
                "country" => "TH",
                "zone" => "Asia/Bangkok"
            ],
            [
                "country" => "TG",
                "zone" => "Africa/Lome"
            ],
            [
                "country" => "TK",
                "zone" => "Pacific/Fakaofo"
            ],
            [
                "country" => "TO",
                "zone" => "Pacific/Tongatapu"
            ],
            [
                "country" => "TT",
                "zone" => "America/Port_of_Spain"
            ],
            [
                "country" => "TN",
                "zone" => "Africa/Tunis"
            ],
            [
                "country" => "TR",
                "zone" => "Europe/Istanbul"
            ],
            [
                "country" => "TM",
                "zone" => "Asia/Ashgabat"
            ],
            [
                "country" => "TC",
                "zone" => "America/Grand_Turk"
            ],
            [
                "country" => "TV",
                "zone" => "Pacific/Funafuti"
            ],
            [
                "country" => "VI",
                "zone" => "America/St_Thomas"
            ],
            [
                "country" => "UG",
                "zone" => "Africa/Kampala"
            ],
            [
                "country" => "UA",
                "zone" => "Europe/Zaporozhye"
            ],
            [
                "country" => "AE",
                "zone" => "Asia/Dubai"
            ],
            [
                "country" => "GB",
                "zone" => "Europe/London"
            ],
            [
                "country" => "US",
                "zone" => "Pacific/Honolulu"
            ],
            [
                "country" => "UY",
                "zone" => "America/Montevideo"
            ],
            [
                "country" => "UZ",
                "zone" => "Asia/Tashkent"
            ],
            [
                "country" => "VU",
                "zone" => "Pacific/Efate"
            ],
            [
                "country" => "VA",
                "zone" => "Europe/Vatican"
            ],
            [
                "country" => "VE",
                "zone" => "America/Caracas"
            ],
            [
                "country" => "VN",
                "zone" => "Asia/Ho_Chi_Minh"
            ],
            [
                "country" => "WF",
                "zone" => "Pacific/Wallis"
            ],
            [
                "country" => "EH",
                "zone" => "Africa/El_Aaiun"
            ],
            [
                "country" => "YE",
                "zone" => "Asia/Aden"
            ],
            [
                "country" => "ZM",
                "zone" => "Africa/Lusaka"
            ],
            [
                "country" => "ZW",
                "zone" => "Africa/Harare"
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('time_zone_map')->truncate();
        foreach ($timeZones as $timeZone) 
        {
            $countryName = $timeZone["country"];
            $country = Country::where('code', $countryName)->first();

            if(is_null($country))
                throw new \Exception("unable to find country: $countryName", 1);

            $timeZone['country'] = $country->id; 

            $zoneName = $timeZone["zone"];
            $zone = TimeZone::where('name', $zoneName)->first();

            if(is_null($zone))
                throw new \Exception("unable to find zone: $zoneName", 1);

            $timeZone['zone'] = $zone->id; 
                
            TimeZoneMap::create($timeZone);
            $this->command->info('Inserted time zones from' . $timeZone['zone'] . ' [' . count($timeZone) . ']..');
        }
        Schema::enableForeignKeyConstraints();
    }
}
