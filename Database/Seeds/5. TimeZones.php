<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Caiocesar173\Utils\Entities\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use Caiocesar173\Utils\Entities\TimeZone;


class TimeZones extends Seeder
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
                "abbreviation" => "AFT",
                "offset" => 16200,
                "offset_name" => "UTC+04:30",
                "name" => "Asia/Kabul",
                "tz_name" => "Afghanistan Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Tirane",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Algiers",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "SST",
                "offset" => -39600,
                "offset_name" => "UTC-11:00",
                "name" => "Pacific/Pago_Pago",
                "tz_name" => "Samoa Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Andorra",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Luanda",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Anguilla",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "VOST",
                "offset" => 21600,
                "offset_name" => "UTC+06:00",
                "name" => "Antarctica/Vostok",
                "tz_name" => "Vostok Station Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Antigua",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "ART",
                "offset" => -10800,
                "offset_name" => "UTC-03:00",
                "name" => "America/Argentina/Ushuaia",
                "tz_name" => "Argentina Time"
            ],
            [
                "abbreviation" => "AMT",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Asia/Yerevan",
                "tz_name" => "Armenia Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Aruba",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "AEDT",
                "offset" => 39600,
                "offset_name" => "UTC+11:00",
                "name" => "Australia/Sydney",
                "tz_name" => "Australian Eastern Daylight Saving Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Vienna",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "AZT",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Asia/Baku",
                "tz_name" => "Azerbaijan Time"
            ],
            [
                "abbreviation" => "EST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Nassau",
                "tz_name" => "Eastern Standard Time (North America)"
            ],
            [
                "abbreviation" => "AST",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Asia/Bahrain",
                "tz_name" => "Arabia Standard Time"
            ],
            [
                "abbreviation" => "BDT",
                "offset" => 21600,
                "offset_name" => "UTC+06:00",
                "name" => "Asia/Dhaka",
                "tz_name" => "Bangladesh Standard Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Barbados",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "MSK",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Europe/Minsk",
                "tz_name" => "Moscow Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Brussels",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => -21600,
                "offset_name" => "UTC-06:00",
                "name" => "America/Belize",
                "tz_name" => "Central Standard Time (North America)"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Porto-Novo",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "Atlantic/Bermuda",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "BTT",
                "offset" => 21600,
                "offset_name" => "UTC+06:00",
                "name" => "Asia/Thimphu",
                "tz_name" => "Bhutan Time"
            ],
            [
                "abbreviation" => "BOT",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/La_Paz",
                "tz_name" => "Bolivia Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Sarajevo",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Gaborone",
                "tz_name" => "Central Africa Time"
            ],
            [
                "abbreviation" => "BRT",
                "offset" => -10800,
                "offset_name" => "UTC-03:00",
                "name" => "America/Sao_Paulo",
                "tz_name" => "Brasília Time"
            ],
            [
                "abbreviation" => "IOT",
                "offset" => 21600,
                "offset_name" => "UTC+06:00",
                "name" => "Indian/Chagos",
                "tz_name" => "Indian Ocean Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Tortola",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "BNT",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Brunei",
                "tz_name" => "Brunei Darussalam Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Sofia",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Ouagadougou",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Bujumbura",
                "tz_name" => "Central Africa Time"
            ],
            [
                "abbreviation" => "ICT",
                "offset" => 25200,
                "offset_name" => "UTC+07:00",
                "name" => "Asia/Phnom_Penh",
                "tz_name" => "Indochina Time"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Douala",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "MST",
                "offset" => -25200,
                "offset_name" => "UTC-07:00",
                "name" => "America/Yellowknife",
                "tz_name" => "Mountain Standard Time (North America"
            ],
            [
                "abbreviation" => "CVT",
                "offset" => -3600,
                "offset_name" => "UTC-01:00",
                "name" => "Atlantic/Cape_Verde",
                "tz_name" => "Cape Verde Time"
            ],
            [
                "abbreviation" => "EST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Cayman",
                "tz_name" => "Eastern Standard Time (North America"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Bangui",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Ndjamena",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "EASST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "Pacific/Easter",
                "tz_name" => "Easter Island Summer Time"
            ],
            [
                "abbreviation" => "XJT",
                "offset" => 21600,
                "offset_name" => "UTC+06:00",
                "name" => "Asia/Urumqi",
                "tz_name" => "China Standard Time"
            ],
            [
                "abbreviation" => "CXT",
                "offset" => 25200,
                "offset_name" => "UTC+07:00",
                "name" => "Indian/Christmas",
                "tz_name" => "Christmas Island Time"
            ],
            [
                "abbreviation" => "CCT",
                "offset" => 23400,
                "offset_name" => "UTC+06:30",
                "name" => "Indian/Cocos",
                "tz_name" => "Cocos Islands Time"
            ],
            [
                "abbreviation" => "COT",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Bogota",
                "tz_name" => "Colombia Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Indian/Comoro",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "CKT",
                "offset" => -36000,
                "offset_name" => "UTC-10:00",
                "name" => "Pacific/Rarotonga",
                "tz_name" => "Cook Island Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => -21600,
                "offset_name" => "UTC-06:00",
                "name" => "America/Costa_Rica",
                "tz_name" => "Central Standard Time (North America"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Zagreb",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Havana",
                "tz_name" => "Cuba Standard Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Curacao",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Asia/Nicosia",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Prague",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Lubumbashi",
                "tz_name" => "Central Africa Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Copenhagen",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Djibouti",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Dominica",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Santo_Domingo",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "TLT",
                "offset" => 32400,
                "offset_name" => "UTC+09:00",
                "name" => "Asia/Dili",
                "tz_name" => "Timor Leste Time"
            ],
            [
                "abbreviation" => "GALT",
                "offset" => -21600,
                "offset_name" => "UTC-06:00",
                "name" => "Pacific/Galapagos",
                "tz_name" => "Galápagos Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Cairo",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => -21600,
                "offset_name" => "UTC-06:00",
                "name" => "America/El_Salvador",
                "tz_name" => "Central Standard Time (North America"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Malabo",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Asmara",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Tallinn",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Addis_Ababa",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "FKST",
                "offset" => -10800,
                "offset_name" => "UTC-03:00",
                "name" => "Atlantic/Stanley",
                "tz_name" => "Falkland Islands Summer Time"
            ],
            [
                "abbreviation" => "WET",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Atlantic/Faroe",
                "tz_name" => "Western European Time"
            ],
            [
                "abbreviation" => "FJT",
                "offset" => 43200,
                "offset_name" => "UTC+12:00",
                "name" => "Pacific/Fiji",
                "tz_name" => "Fiji Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Helsinki",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Paris",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "TAHT",
                "offset" => -36000,
                "offset_name" => "UTC-10:00",
                "name" => "Pacific/Tahiti",
                "tz_name" => "Tahiti Time"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Libreville",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Banjul",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "GET",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Asia/Tbilisi",
                "tz_name" => "Georgia Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Busingen",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Accra",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Gibraltar",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Athens",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Thule",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Grenada",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "CHST",
                "offset" => 36000,
                "offset_name" => "UTC+10:00",
                "name" => "Pacific/Guam",
                "tz_name" => "Chamorro Standard Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => -21600,
                "offset_name" => "UTC-06:00",
                "name" => "America/Guatemala",
                "tz_name" => "Central Standard Time (North America"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Europe/Guernsey",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Conakry",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Bissau",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "GYT",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Guyana",
                "tz_name" => "Guyana Time"
            ],
            [
                "abbreviation" => "EST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Port-au-Prince",
                "tz_name" => "Eastern Standard Time (North America"
            ],
            [
                "abbreviation" => "CST",
                "offset" => -21600,
                "offset_name" => "UTC-06:00",
                "name" => "America/Tegucigalpa",
                "tz_name" => "Central Standard Time (North America"
            ],
            [
                "abbreviation" => "HKT",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Hong_Kong",
                "tz_name" => "Hong Kong Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Budapest",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Atlantic/Reykjavik",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "IST",
                "offset" => 19800,
                "offset_name" => "UTC+05:30",
                "name" => "Asia/Kolkata",
                "tz_name" => "Indian Standard Time"
            ],
            [
                "abbreviation" => "WIB",
                "offset" => 25200,
                "offset_name" => "UTC+07:00",
                "name" => "Asia/Pontianak",
                "tz_name" => "Western Indonesian Time"
            ],
            [
                "abbreviation" => "IRDT",
                "offset" => 12600,
                "offset_name" => "UTC+03:30",
                "name" => "Asia/Tehran",
                "tz_name" => "Iran Daylight Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Asia/Baghdad",
                "tz_name" => "Arabia Standard Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Europe/Dublin",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Europe/Isle_of_Man",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "IST",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Asia/Jerusalem",
                "tz_name" => "Israel Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Rome",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Abidjan",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "EST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Jamaica",
                "tz_name" => "Eastern Standard Time (North America"
            ],
            [
                "abbreviation" => "JST",
                "offset" => 32400,
                "offset_name" => "UTC+09:00",
                "name" => "Asia/Tokyo",
                "tz_name" => "Japan Standard Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Europe/Jersey",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Asia/Amman",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "QYZT",
                "offset" => 18000,
                "offset_name" => "UTC+05:00",
                "name" => "Asia/Qyzylorda",
                "tz_name" => "Qyzylorda Summer Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Nairobi",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "GILT",
                "offset" => 43200,
                "offset_name" => "UTC+12:00",
                "name" => "Pacific/Tarawa",
                "tz_name" => "Gilbert Island Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Belgrade",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Asia/Kuwait",
                "tz_name" => "Arabia Standard Time"
            ],
            [
                "abbreviation" => "KGT",
                "offset" => 21600,
                "offset_name" => "UTC+06:00",
                "name" => "Asia/Bishkek",
                "tz_name" => "Kyrgyzstan Time"
            ],
            [
                "abbreviation" => "ICT",
                "offset" => 25200,
                "offset_name" => "UTC+07:00",
                "name" => "Asia/Vientiane",
                "tz_name" => "Indochina Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Riga",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Asia/Beirut",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "SAST",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Maseru",
                "tz_name" => "South African Standard Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Monrovia",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Tripoli",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Vaduz",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Vilnius",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Luxembourg",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Macau",
                "tz_name" => "China Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Skopje",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Indian/Antananarivo",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Blantyre",
                "tz_name" => "Central Africa Time"
            ],
            [
                "abbreviation" => "MYT",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Kuching",
                "tz_name" => "Malaysia Time"
            ],
            [
                "abbreviation" => "MVT",
                "offset" => 18000,
                "offset_name" => "UTC+05:00",
                "name" => "Indian/Maldives",
                "tz_name" => "Maldives Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Bamako",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Malta",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "MHT",
                "offset" => 43200,
                "offset_name" => "UTC+12:00",
                "name" => "Pacific/Majuro",
                "tz_name" => "Marshall Islands Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Nouakchott",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "MUT",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Indian/Mauritius",
                "tz_name" => "Mauritius Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Indian/Mayotte",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "PST",
                "offset" => -28800,
                "offset_name" => "UTC-08:00",
                "name" => "America/Tijuana",
                "tz_name" => "Pacific Standard Time (North America"
            ],
            [
                "abbreviation" => "PONT",
                "offset" => 39600,
                "offset_name" => "UTC+11:00",
                "name" => "Pacific/Pohnpei",
                "tz_name" => "Pohnpei Standard Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Chisinau",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Monaco",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "ULAT",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Ulaanbaatar",
                "tz_name" => "Ulaanbaatar Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Podgorica",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Montserrat",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "WEST",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Casablanca",
                "tz_name" => "Western European Summer Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Maputo",
                "tz_name" => "Central Africa Time"
            ],
            [
                "abbreviation" => "MMT",
                "offset" => 23400,
                "offset_name" => "UTC+06:30",
                "name" => "Asia/Yangon",
                "tz_name" => "Myanmar Standard Time"
            ],
            [
                "abbreviation" => "WAST",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Windhoek",
                "tz_name" => "West Africa Summer Time"
            ],
            [
                "abbreviation" => "NRT",
                "offset" => 43200,
                "offset_name" => "UTC+12:00",
                "name" => "Pacific/Nauru",
                "tz_name" => "Nauru Time"
            ],
            [
                "abbreviation" => "NPT",
                "offset" => 20700,
                "offset_name" => "UTC+05:45",
                "name" => "Asia/Kathmandu",
                "tz_name" => "Nepal Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Amsterdam",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "NCT",
                "offset" => 39600,
                "offset_name" => "UTC+11:00",
                "name" => "Pacific/Noumea",
                "tz_name" => "New Caledonia Time"
            ],
            [
                "abbreviation" => "CHAST",
                "offset" => 49500,
                "offset_name" => "UTC+13:45",
                "name" => "Pacific/Chatham",
                "tz_name" => "Chatham Standard Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => -21600,
                "offset_name" => "UTC-06:00",
                "name" => "America/Managua",
                "tz_name" => "Central Standard Time (North America"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Niamey",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Lagos",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "NUT",
                "offset" => -39600,
                "offset_name" => "UTC-11:00",
                "name" => "Pacific/Niue",
                "tz_name" => "Niue Time"
            ],
            [
                "abbreviation" => "KST",
                "offset" => 32400,
                "offset_name" => "UTC+09:00",
                "name" => "Asia/Pyongyang",
                "tz_name" => "Korea Standard Time"
            ],
            [
                "abbreviation" => "ChST",
                "offset" => 36000,
                "offset_name" => "UTC+10:00",
                "name" => "Pacific/Saipan",
                "tz_name" => "Chamorro Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Oslo",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "GST",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Asia/Muscat",
                "tz_name" => "Gulf Standard Time"
            ],
            [
                "abbreviation" => "PKT",
                "offset" => 18000,
                "offset_name" => "UTC+05:00",
                "name" => "Asia/Karachi",
                "tz_name" => "Pakistan Standard Time"
            ],
            [
                "abbreviation" => "PWT",
                "offset" => 32400,
                "offset_name" => "UTC+09:00",
                "name" => "Pacific/Palau",
                "tz_name" => "Palau Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Asia/Hebron",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "EST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Panama",
                "tz_name" => "Eastern Standard Time (North America"
            ],
            [
                "abbreviation" => "PGT",
                "offset" => 36000,
                "offset_name" => "UTC+10:00",
                "name" => "Pacific/Port_Moresby",
                "tz_name" => "Papua New Guinea Time"
            ],
            [
                "abbreviation" => "PYST",
                "offset" => -10800,
                "offset_name" => "UTC-03:00",
                "name" => "America/Asuncion",
                "tz_name" => "Paraguay Summer Time"
            ],
            [
                "abbreviation" => "PET",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Lima",
                "tz_name" => "Peru Time"
            ],
            [
                "abbreviation" => "PHT",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Manila",
                "tz_name" => "Philippine Time"
            ],
            [
                "abbreviation" => "PST",
                "offset" => -28800,
                "offset_name" => "UTC-08:00",
                "name" => "Pacific/Pitcairn",
                "tz_name" => "Pacific Standard Time (North America"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Warsaw",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "WET",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Europe/Lisbon",
                "tz_name" => "Western European Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Puerto_Rico",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Asia/Qatar",
                "tz_name" => "Arabia Standard Time"
            ],
            [
                "abbreviation" => "WAT",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Brazzaville",
                "tz_name" => "West Africa Time"
            ],
            [
                "abbreviation" => "RET",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Indian/Reunion",
                "tz_name" => "Réunion Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Bucharest",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "MSK",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Europe/Volgograd",
                "tz_name" => "Moscow Standard Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Kigali",
                "tz_name" => "Central Africa Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/St_Barthelemy",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Atlantic/St_Helena",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/St_Kitts",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/St_Lucia",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Marigot",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "PMDT",
                "offset" => -10800,
                "offset_name" => "UTC-03:00",
                "name" => "America/Miquelon",
                "tz_name" => "Pierre & Miquelon Daylight Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/St_Vincent",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "WST",
                "offset" => 50400,
                "offset_name" => "UTC+14:00",
                "name" => "Pacific/Apia",
                "tz_name" => "West Samoa Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/San_Marino",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Sao_Tome",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Asia/Riyadh",
                "tz_name" => "Arabia Standard Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Dakar",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Belgrade",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "SCT",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Indian/Mahe",
                "tz_name" => "Seychelles Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Freetown",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "SGT",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Singapore",
                "tz_name" => "Singapore Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Anguilla",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Bratislava",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Ljubljana",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "SBT",
                "offset" => 39600,
                "offset_name" => "UTC+11:00",
                "name" => "Pacific/Guadalcanal",
                "tz_name" => "Solomon Islands Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Mogadishu",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "SAST",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Johannesburg",
                "tz_name" => "South African Standard Time"
            ],
            [
                "abbreviation" => "KST",
                "offset" => 32400,
                "offset_name" => "UTC+09:00",
                "name" => "Asia/Seoul",
                "tz_name" => "Korea Standard Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Juba",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Madrid",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "IST",
                "offset" => 19800,
                "offset_name" => "UTC+05:30",
                "name" => "Asia/Colombo",
                "tz_name" => "Indian Standard Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Khartoum",
                "tz_name" => "Eastern African Time"
            ],
            [
                "abbreviation" => "SRT",
                "offset" => -10800,
                "offset_name" => "UTC-03:00",
                "name" => "America/Paramaribo",
                "tz_name" => "Suriname Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Arctic/Longyearbyen",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "SAST",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Mbabane",
                "tz_name" => "South African Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Stockholm",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Zurich",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Asia/Damascus",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "CST",
                "offset" => 28800,
                "offset_name" => "UTC+08:00",
                "name" => "Asia/Taipei",
                "tz_name" => "China Standard Time"
            ],
            [
                "abbreviation" => "TJT",
                "offset" => 18000,
                "offset_name" => "UTC+05:00",
                "name" => "Asia/Dushanbe",
                "tz_name" => "Tajikistan Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Dar_es_Salaam",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "ICT",
                "offset" => 25200,
                "offset_name" => "UTC+07:00",
                "name" => "Asia/Bangkok",
                "tz_name" => "Indochina Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Africa/Lome",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "TKT",
                "offset" => 46800,
                "offset_name" => "UTC+13:00",
                "name" => "Pacific/Fakaofo",
                "tz_name" => "Tokelau Time"
            ],
            [
                "abbreviation" => "TOT",
                "offset" => 46800,
                "offset_name" => "UTC+13:00",
                "name" => "Pacific/Tongatapu",
                "tz_name" => "Tonga Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Port_of_Spain",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/Tunis",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Europe/Istanbul",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "TMT",
                "offset" => 18000,
                "offset_name" => "UTC+05:00",
                "name" => "Asia/Ashgabat",
                "tz_name" => "Turkmenistan Time"
            ],
            [
                "abbreviation" => "EST",
                "offset" => -18000,
                "offset_name" => "UTC-05:00",
                "name" => "America/Grand_Turk",
                "tz_name" => "Eastern Standard Time (North America"
            ],
            [
                "abbreviation" => "TVT",
                "offset" => 43200,
                "offset_name" => "UTC+12:00",
                "name" => "Pacific/Funafuti",
                "tz_name" => "Tuvalu Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/St_Thomas",
                "tz_name" => "Atlantic Standard Time"
            ],
            [
                "abbreviation" => "EAT",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Africa/Kampala",
                "tz_name" => "East Africa Time"
            ],
            [
                "abbreviation" => "EET",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Europe/Zaporozhye",
                "tz_name" => "Eastern European Time"
            ],
            [
                "abbreviation" => "GST",
                "offset" => 14400,
                "offset_name" => "UTC+04:00",
                "name" => "Asia/Dubai",
                "tz_name" => "Gulf Standard Time"
            ],
            [
                "abbreviation" => "GMT",
                "offset" => 0,
                "offset_name" => "UTC±00",
                "name" => "Europe/London",
                "tz_name" => "Greenwich Mean Time"
            ],
            [
                "abbreviation" => "HST",
                "offset" => -36000,
                "offset_name" => "UTC-10:00",
                "name" => "Pacific/Honolulu",
                "tz_name" => "Hawaii–Aleutian Standard Time"
            ],
            [
                "abbreviation" => "UYT",
                "offset" => -10800,
                "offset_name" => "UTC-03:00",
                "name" => "America/Montevideo",
                "tz_name" => "Uruguay Standard Time"
            ],
            [
                "abbreviation" => "UZT",
                "offset" => 18000,
                "offset_name" => "UTC+05:00",
                "name" => "Asia/Tashkent",
                "tz_name" => "Uzbekistan Time"
            ],
            [
                "abbreviation" => "VUT",
                "offset" => 39600,
                "offset_name" => "UTC+11:00",
                "name" => "Pacific/Efate",
                "tz_name" => "Vanuatu Time"
            ],
            [
                "abbreviation" => "CET",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Europe/Vatican",
                "tz_name" => "Central European Time"
            ],
            [
                "abbreviation" => "VET",
                "offset" => -14400,
                "offset_name" => "UTC-04:00",
                "name" => "America/Caracas",
                "tz_name" => "Venezuelan Standard Time"
            ],
            [
                "abbreviation" => "ICT",
                "offset" => 25200,
                "offset_name" => "UTC+07:00",
                "name" => "Asia/Ho_Chi_Minh",
                "tz_name" => "Indochina Time"
            ],
            [
                "abbreviation" => "WFT",
                "offset" => 43200,
                "offset_name" => "UTC+12:00",
                "name" => "Pacific/Wallis",
                "tz_name" => "Wallis & Futuna Time"
            ],
            [
                "abbreviation" => "WEST",
                "offset" => 3600,
                "offset_name" => "UTC+01:00",
                "name" => "Africa/El_Aaiun",
                "tz_name" => "Western European Summer Time"
            ],
            [
                "abbreviation" => "AST",
                "offset" => 10800,
                "offset_name" => "UTC+03:00",
                "name" => "Asia/Aden",
                "tz_name" => "Arabia Standard Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Lusaka",
                "tz_name" => "Central Africa Time"
            ],
            [
                "abbreviation" => "CAT",
                "offset" => 7200,
                "offset_name" => "UTC+02:00",
                "name" => "Africa/Harare",
                "tz_name" => "Central Africa Time"
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('time_zone')->truncate();
        foreach ($timeZones as $timeZone) 
        {
            TimeZone::create($timeZone);
            $this->command->info('Inserted time zones from' . $timeZone['name'] . ' [' . count($timeZone) . ']..');
        }
        Schema::enableForeignKeyConstraints();
    }
}
