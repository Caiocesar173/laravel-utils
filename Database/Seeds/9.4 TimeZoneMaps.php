<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Caiocesar173\Utils\Entities\Country;
use Caiocesar173\Utils\Entities\TimeZone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
                "country" => "AG",
                "zone" => "Africa/Algiers"
            ],
            [
                "country" => "AQ",
                "zone" => "Pacific/Pago_Pago"
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
                "country" => "AC",
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
                "country" => "AA",
                "zone" => "America/Aruba"
            ],
            [
                "country" => "AS",
                "zone" => "Australia/Sydney"
            ],
            [
                "country" => "AU",
                "zone" => "Europe/Vienna"
            ],
            [
                "country" => "AJ",
                "zone" => "Asia/Baku"
            ],
            [
                "country" => "BF",
                "zone" => "America/Nassau"
            ],
            [
                "country" => "BA",
                "zone" => "Asia/Bahrain"
            ],
            [
                "country" => "BG",
                "zone" => "Asia/Dhaka"
            ],
            [
                "country" => "BB",
                "zone" => "America/Barbados"
            ],
            [
                "country" => "BO",
                "zone" => "Europe/Minsk"
            ],
            [
                "country" => "BE",
                "zone" => "Europe/Brussels"
            ],
            [
                "country" => "BH",
                "zone" => "America/Belize"
            ],
            [
                "country" => "BN",
                "zone" => "Africa/Porto-Novo"
            ],
            [
                "country" => "BD",
                "zone" => "Atlantic/Bermuda"
            ],
            [
                "country" => "BT",
                "zone" => "Asia/Thimphu"
            ],
            [
                "country" => "BL",
                "zone" => "America/La_Paz"
            ],
            [
                "country" => "BK",
                "zone" => "Europe/Sarajevo"
            ],
            [
                "country" => "BC",
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
                "country" => "VI",
                "zone" => "America/Tortola"
            ],
            [
                "country" => "BX",
                "zone" => "Asia/Brunei"
            ],
            [
                "country" => "BU",
                "zone" => "Europe/Sofia"
            ],
            [
                "country" => "UV",
                "zone" => "Africa/Ouagadougou"
            ],
            [
                "country" => "BY",
                "zone" => "Africa/Bujumbura"
            ],
            [
                "country" => "CB",
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
                "country" => "CJ",
                "zone" => "America/Cayman"
            ],
            [
                "country" => "CT",
                "zone" => "Africa/Bangui"
            ],
            [
                "country" => "CD",
                "zone" => "Africa/Ndjamena"
            ],
            [
                "country" => "CI",
                "zone" => "Pacific/Easter"
            ],
            [
                "country" => "CH",
                "zone" => "Asia/Urumqi"
            ],
            [
                "country" => "KT",
                "zone" => "Indian/Christmas"
            ],
            [
                "country" => "CK",
                "zone" => "Indian/Cocos"
            ],
            [
                "country" => "CO",
                "zone" => "America/Bogota"
            ],
            [
                "country" => "CN",
                "zone" => "Indian/Comoro"
            ],
            [
                "country" => "CW",
                "zone" => "Pacific/Rarotonga"
            ],
            [
                "country" => "CS",
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
                "country" => "UC",
                "zone" => "America/Curacao"
            ],
            [
                "country" => "CY",
                "zone" => "Asia/Nicosia"
            ],
            [
                "country" => "EZ",
                "zone" => "Europe/Prague"
            ],
            [
                "country" => "CG",
                "zone" => "Africa/Lubumbashi"
            ],
            [
                "country" => "DA",
                "zone" => "Europe/Copenhagen"
            ],
            [
                "country" => "DJ",
                "zone" => "Africa/Djibouti"
            ],
            [
                "country" => "DO",
                "zone" => "America/Dominica"
            ],
            [
                "country" => "DR",
                "zone" => "America/Santo_Domingo"
            ],
            [
                "country" => "TT",
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
                "country" => "ES",
                "zone" => "America/El_Salvador"
            ],
            [
                "country" => "EK",
                "zone" => "Africa/Malabo"
            ],
            [
                "country" => "ER",
                "zone" => "Africa/Asmara"
            ],
            [
                "country" => "EN",
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
                "country" => "FP",
                "zone" => "Pacific/Tahiti"
            ],
            [
                "country" => "GB",
                "zone" => "Africa/Libreville"
            ],
            [
                "country" => "GA",
                "zone" => "Africa/Banjul"
            ],
            [
                "country" => "GG",
                "zone" => "Asia/Tbilisi"
            ],
            [
                "country" => "GM",
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
                "country" => "GJ",
                "zone" => "America/Grenada"
            ],
            [
                "country" => "GQ",
                "zone" => "Pacific/Guam"
            ],
            [
                "country" => "GT",
                "zone" => "America/Guatemala"
            ],
            [
                "country" => "GK",
                "zone" => "Europe/Guernsey"
            ],
            [
                "country" => "GV",
                "zone" => "Africa/Conakry"
            ],
            [
                "country" => "PU",
                "zone" => "Africa/Bissau"
            ],
            [
                "country" => "GY",
                "zone" => "America/Guyana"
            ],
            [
                "country" => "HA",
                "zone" => "America/Port-au-Prince"
            ],
            [
                "country" => "HO",
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
                "country" => "IC",
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
                "country" => "IZ",
                "zone" => "Asia/Baghdad"
            ],
            [
                "country" => "EI",
                "zone" => "Europe/Dublin"
            ],
            [
                "country" => "IM",
                "zone" => "Europe/Isle_of_Man"
            ],
            [
                "country" => "IS",
                "zone" => "Asia/Jerusalem"
            ],
            [
                "country" => "IT",
                "zone" => "Europe/Rome"
            ],
            [
                "country" => "IV",
                "zone" => "Africa/Abidjan"
            ],
            [
                "country" => "JM",
                "zone" => "America/Jamaica"
            ],
            [
                "country" => "JA",
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
                "country" => "KR",
                "zone" => "Pacific/Tarawa"
            ],
            [
                "country" => "KV",
                "zone" => "Europe/Belgrade"
            ],
            [
                "country" => "KU",
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
                "country" => "LG",
                "zone" => "Europe/Riga"
            ],
            [
                "country" => "LE",
                "zone" => "Asia/Beirut"
            ],
            [
                "country" => "LT",
                "zone" => "Africa/Maseru"
            ],
            [
                "country" => "LI",
                "zone" => "Africa/Monrovia"
            ],
            [
                "country" => "LY",
                "zone" => "Africa/Tripoli"
            ],
            [
                "country" => "LS",
                "zone" => "Europe/Vaduz"
            ],
            [
                "country" => "LH",
                "zone" => "Europe/Vilnius"
            ],
            [
                "country" => "LU",
                "zone" => "Europe/Luxembourg"
            ],
            [
                "country" => "MC",
                "zone" => "Asia/Macau"
            ],
            [
                "country" => "MK",
                "zone" => "Europe/Skopje"
            ],
            [
                "country" => "MA",
                "zone" => "Indian/Antananarivo"
            ],
            [
                "country" => "MI",
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
                "country" => "RM",
                "zone" => "Pacific/Majuro"
            ],
            [
                "country" => "MR",
                "zone" => "Africa/Nouakchott"
            ],
            [
                "country" => "MP",
                "zone" => "Indian/Mauritius"
            ],
            [
                "country" => "MF",
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
                "country" => "MN",
                "zone" => "Europe/Monaco"
            ],
            [
                "country" => "MG",
                "zone" => "Asia/Ulaanbaatar"
            ],
            [
                "country" => "MJ",
                "zone" => "Europe/Podgorica"
            ],
            [
                "country" => "MH",
                "zone" => "America/Montserrat"
            ],
            [
                "country" => "MO",
                "zone" => "Africa/Casablanca"
            ],
            [
                "country" => "MZ",
                "zone" => "Africa/Maputo"
            ],
            [
                "country" => "BM",
                "zone" => "Asia/Yangon"
            ],
            [
                "country" => "WA",
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
                "country" => "NU",
                "zone" => "America/Managua"
            ],
            [
                "country" => "NG",
                "zone" => "Africa/Niamey"
            ],
            [
                "country" => "NI",
                "zone" => "Africa/Lagos"
            ],
            [
                "country" => "NE",
                "zone" => "Pacific/Niue"
            ],
            [
                "country" => "KN",
                "zone" => "Asia/Pyongyang"
            ],
            [
                "country" => "CQ",
                "zone" => "Pacific/Saipan"
            ],
            [
                "country" => "NO",
                "zone" => "Europe/Oslo"
            ],
            [
                "country" => "MU",
                "zone" => "Asia/Muscat"
            ],
            [
                "country" => "PK",
                "zone" => "Asia/Karachi"
            ],
            [
                "country" => "PS",
                "zone" => "Pacific/Palau"
            ],
            [
                "country" => "WE",
                "zone" => "Asia/Hebron"
            ],
            [
                "country" => "PM",
                "zone" => "America/Panama"
            ],
            [
                "country" => "PP",
                "zone" => "Pacific/Port_Moresby"
            ],
            [
                "country" => "PA",
                "zone" => "America/Asuncion"
            ],
            [
                "country" => "PE",
                "zone" => "America/Lima"
            ],
            [
                "country" => "RP",
                "zone" => "Asia/Manila"
            ],
            [
                "country" => "PC",
                "zone" => "Pacific/Pitcairn"
            ],
            [
                "country" => "PL",
                "zone" => "Europe/Warsaw"
            ],
            [
                "country" => "PO",
                "zone" => "Europe/Lisbon"
            ],
            [
                "country" => "RQ",
                "zone" => "America/Puerto_Rico"
            ],
            [
                "country" => "QA",
                "zone" => "Asia/Qatar"
            ],
            [
                "country" => "CF",
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
                "country" => "RS",
                "zone" => "Europe/Volgograd"
            ],
            [
                "country" => "RW",
                "zone" => "Africa/Kigali"
            ],
            [
                "country" => "TB",
                "zone" => "America/St_Barthelemy"
            ],
            [
                "country" => "SH",
                "zone" => "Atlantic/St_Helena"
            ],
            [
                "country" => "SC",
                "zone" => "America/St_Kitts"
            ],
            [
                "country" => "ST",
                "zone" => "America/St_Lucia"
            ],
            [
                "country" => "RN",
                "zone" => "America/Marigot"
            ],
            [
                "country" => "SB",
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
                "country" => "TP",
                "zone" => "Africa/Sao_Tome"
            ],
            [
                "country" => "SA",
                "zone" => "Asia/Riyadh"
            ],
            [
                "country" => "SG",
                "zone" => "Africa/Dakar"
            ],
            [
                "country" => "RI",
                "zone" => "Europe/Belgrade"
            ],
            [
                "country" => "SE",
                "zone" => "Indian/Mahe"
            ],
            [
                "country" => "SL",
                "zone" => "Africa/Freetown"
            ],
            [
                "country" => "SN",
                "zone" => "Asia/Singapore"
            ],
            [
                "country" => "NN",
                "zone" => "America/Anguilla"
            ],
            [
                "country" => "LO",
                "zone" => "Europe/Bratislava"
            ],
            [
                "country" => "SI",
                "zone" => "Europe/Ljubljana"
            ],
            [
                "country" => "BP",
                "zone" => "Pacific/Guadalcanal"
            ],
            [
                "country" => "SO",
                "zone" => "Africa/Mogadishu"
            ],
            [
                "country" => "SF",
                "zone" => "Africa/Johannesburg"
            ],
            [
                "country" => "KS",
                "zone" => "Asia/Seoul"
            ],
            [
                "country" => "OD",
                "zone" => "Africa/Juba"
            ],
            [
                "country" => "SP",
                "zone" => "Europe/Madrid"
            ],
            [
                "country" => "CE",
                "zone" => "Asia/Colombo"
            ],
            [
                "country" => "SU",
                "zone" => "Africa/Khartoum"
            ],
            [
                "country" => "NS",
                "zone" => "America/Paramaribo"
            ],
            [
                "country" => "SV",
                "zone" => "Arctic/Longyearbyen"
            ],
            [
                "country" => "WZ",
                "zone" => "Africa/Mbabane"
            ],
            [
                "country" => "SW",
                "zone" => "Europe/Stockholm"
            ],
            [
                "country" => "SZ",
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
                "country" => "TI",
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
                "country" => "TO",
                "zone" => "Africa/Lome"
            ],
            [
                "country" => "TL",
                "zone" => "Pacific/Fakaofo"
            ],
            [
                "country" => "TN",
                "zone" => "Pacific/Tongatapu"
            ],
            [
                "country" => "TD",
                "zone" => "America/Port_of_Spain"
            ],
            [
                "country" => "TS",
                "zone" => "Africa/Tunis"
            ],
            [
                "country" => "TU",
                "zone" => "Europe/Istanbul"
            ],
            [
                "country" => "TX",
                "zone" => "Asia/Ashgabat"
            ],
            [
                "country" => "TK",
                "zone" => "America/Grand_Turk"
            ],
            [
                "country" => "TV",
                "zone" => "Pacific/Funafuti"
            ],
            [
                "country" => "VQ",
                "zone" => "America/St_Thomas"
            ],
            [
                "country" => "UG",
                "zone" => "Africa/Kampala"
            ],
            [
                "country" => "UP",
                "zone" => "Europe/Zaporozhye"
            ],
            [
                "country" => "AE",
                "zone" => "Asia/Dubai"
            ],
            [
                "country" => "UK",
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
                "country" => "NH",
                "zone" => "Pacific/Efate"
            ],
            [
                "country" => "VT",
                "zone" => "Europe/Vatican"
            ],
            [
                "country" => "VE",
                "zone" => "America/Caracas"
            ],
            [
                "country" => "VM",
                "zone" => "Asia/Ho_Chi_Minh"
            ],
            [
                "country" => "WF",
                "zone" => "Pacific/Wallis"
            ],
            [
                "country" => "WI",
                "zone" => "Africa/El_Aaiun"
            ],
            [
                "country" => "YM",
                "zone" => "Asia/Aden"
            ],
            [
                "country" => "ZA",
                "zone" => "Africa/Lusaka"
            ],
            [
                "country" => "ZI",
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
