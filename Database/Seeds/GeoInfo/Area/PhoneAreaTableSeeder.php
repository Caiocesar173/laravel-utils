<?php

namespace Caiocesar173\Utils\Database\Seeds\GeoInfo\Area;

use Caiocesar173\Utils\Entities\Country;
use Caiocesar173\Utils\Entities\PhoneArea;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PhoneAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::disableQueryLog();

        $phoneAreas = [
            [
                "code" => "93",
                "country" => "AF",
                "gdp" => "20650000000",
                "landline" => "13500",
                "mobile" => "18000000"
            ],
            [
                "code" => "355",
                "country" => "AL",
                "gdp" => "12800000000",
                "landline" => "312000",
                "mobile" => "3500000"
            ],
            [
                "code" => "213",
                "country" => "DZ",
                "gdp" => "215700000000",
                "landline" => "3200000",
                "mobile" => "37692000"
            ],
            [
                "code" => "1-684",
                "country" => "AS",
                "gdp" => "462200000",
                "landline" => "10000",
                "mobile" => ""
            ],
            [
                "code" => "376",
                "country" => "AD",
                "gdp" => "4800000000",
                "landline" => "39000",
                "mobile" => "65000"
            ],
            [
                "code" => "244",
                "country" => "AO",
                "gdp" => "124000000000",
                "landline" => "303000",
                "mobile" => "9800000"
            ],
            [
                "code" => "1-264",
                "country" => "AI",
                "gdp" => "175400000",
                "landline" => "6000",
                "mobile" => "26000"
            ],
            [
                "code" => "672",
                "country" => "AQ",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "1-268",
                "country" => "AG",
                "gdp" => "1220000000",
                "landline" => "35000",
                "mobile" => "179800"
            ],
            [
                "code" => "54",
                "country" => "AR",
                "gdp" => "484600000000",
                "landline" => "1",
                "mobile" => "58600000"
            ],
            [
                "code" => "374",
                "country" => "AM",
                "gdp" => "10440000000",
                "landline" => "584000",
                "mobile" => "3223000"
            ],
            [
                "code" => "297",
                "country" => "AW",
                "gdp" => "2516000000",
                "landline" => "43000",
                "mobile" => "135000"
            ],
            [
                "code" => "61",
                "country" => "AU",
                "gdp" => "1488000000000",
                "landline" => "10470000",
                "mobile" => "24400000"
            ],
            [
                "code" => "43",
                "country" => "AT",
                "gdp" => "417900000000",
                "landline" => "3342000",
                "mobile" => "13590000"
            ],
            [
                "code" => "994",
                "country" => "AZ",
                "gdp" => "76010000000",
                "landline" => "1734000",
                "mobile" => "10125000"
            ],
            [
                "code" => "1-242",
                "country" => "BS",
                "gdp" => "8373000000",
                "landline" => "137000",
                "mobile" => "254000"
            ],
            [
                "code" => "973",
                "country" => "BH",
                "gdp" => "28360000000",
                "landline" => "290000",
                "mobile" => "2125000"
            ],
            [
                "code" => "880",
                "country" => "BD",
                "gdp" => "140200000000",
                "landline" => "962000",
                "mobile" => "97180000"
            ],
            [
                "code" => "1-246",
                "country" => "BB",
                "gdp" => "4262000000",
                "landline" => "144000",
                "mobile" => "347000"
            ],
            [
                "code" => "375",
                "country" => "BY",
                "gdp" => "69240000000",
                "landline" => "4407000",
                "mobile" => "10675000"
            ],
            [
                "code" => "32",
                "country" => "BE",
                "gdp" => "507400000000",
                "landline" => "4631000",
                "mobile" => "12880000"
            ],
            [
                "code" => "501",
                "country" => "BZ",
                "gdp" => "1637000000",
                "landline" => "25400",
                "mobile" => "164200"
            ],
            [
                "code" => "229",
                "country" => "BJ",
                "gdp" => "8359000000",
                "landline" => "156700",
                "mobile" => "8408000"
            ],
            [
                "code" => "1-441",
                "country" => "BM",
                "gdp" => "5600000000",
                "landline" => "69000",
                "mobile" => "91000"
            ],
            [
                "code" => "975",
                "country" => "BT",
                "gdp" => "2133000000",
                "landline" => "27000",
                "mobile" => "560000"
            ],
            [
                "code" => "591",
                "country" => "BO",
                "gdp" => "30790000000",
                "landline" => "880600",
                "mobile" => "9494000"
            ],
            [
                "code" => "387",
                "country" => "BA",
                "gdp" => "18870000000",
                "landline" => "878000",
                "mobile" => "3350000"
            ],
            [
                "code" => "267",
                "country" => "BW",
                "gdp" => "15530000000",
                "landline" => "160500",
                "mobile" => "3082000"
            ],
            [
                "code" => "55",
                "country" => "BR",
                "gdp" => "2190000000000",
                "landline" => "44300000",
                "mobile" => "248324000"
            ],
            [
                "code" => "246",
                "country" => "IO",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "1-284",
                "country" => "VG",
                "gdp" => "1095000000",
                "landline" => "12268",
                "mobile" => "48700"
            ],
            [
                "code" => "673",
                "country" => "BN",
                "gdp" => "16560000000",
                "landline" => "70933",
                "mobile" => "469700"
            ],
            [
                "code" => "359",
                "country" => "BG",
                "gdp" => "53700000000",
                "landline" => "2253000",
                "mobile" => "10780000"
            ],
            [
                "code" => "226",
                "country" => "BF",
                "gdp" => "12130000000",
                "landline" => "141400",
                "mobile" => "9980000"
            ],
            [
                "code" => "257",
                "country" => "BI",
                "gdp" => "2676000000",
                "landline" => "17400",
                "mobile" => "2247000"
            ],
            [
                "code" => "855",
                "country" => "KH",
                "gdp" => "15640000000",
                "landline" => "584000",
                "mobile" => "19100000"
            ],
            [
                "code" => "237",
                "country" => "CM",
                "gdp" => "27880000000",
                "landline" => "737400",
                "mobile" => "13100000"
            ],
            [
                "code" => "1",
                "country" => "CA",
                "gdp" => "1825000000000",
                "landline" => "18010000",
                "mobile" => "26263000"
            ],
            [
                "code" => "238",
                "country" => "CV",
                "gdp" => "1955000000",
                "landline" => "70200",
                "mobile" => "425300"
            ],
            [
                "code" => "1-345",
                "country" => "KY",
                "gdp" => "2250000000",
                "landline" => "37400",
                "mobile" => "96300"
            ],
            [
                "code" => "236",
                "country" => "CF",
                "gdp" => "2050000000",
                "landline" => "5600",
                "mobile" => "1070000"
            ],
            [
                "code" => "235",
                "country" => "TD",
                "gdp" => "13590000000",
                "landline" => "29900",
                "mobile" => "4200000"
            ],
            [
                "code" => "56",
                "country" => "CL",
                "gdp" => "281700000000",
                "landline" => "3276000",
                "mobile" => "24130000"
            ],
            [
                "code" => "86",
                "country" => "CN",
                "gdp" => "9330000000000",
                "landline" => "278860000",
                "mobile" => "1100000000"
            ],
            [
                "code" => "61",
                "country" => "CX",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "61",
                "country" => "CC",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "57",
                "country" => "CO",
                "gdp" => "369200000000",
                "landline" => "6291000",
                "mobile" => "49066000"
            ],
            [
                "code" => "269",
                "country" => "KM",
                "gdp" => "658000000",
                "landline" => "24000",
                "mobile" => "250000"
            ],
            [
                "code" => "682",
                "country" => "CK",
                "gdp" => "183200000",
                "landline" => "7200",
                "mobile" => "7800"
            ],
            [
                "code" => "506",
                "country" => "CR",
                "gdp" => "48510000000",
                "landline" => "1018000",
                "mobile" => "6151000"
            ],
            [
                "code" => "385",
                "country" => "HR",
                "gdp" => "59140000000",
                "landline" => "1640000",
                "mobile" => "4970000"
            ],
            [
                "code" => "53",
                "country" => "CU",
                "gdp" => "72300000000",
                "landline" => "1217000",
                "mobile" => "1682000"
            ],
            [
                "code" => "599",
                "country" => "CW",
                "gdp" => "5600000000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "357",
                "country" => "CY",
                "gdp" => "21780000000",
                "landline" => "373200",
                "mobile" => "1110000"
            ],
            [
                "code" => "420",
                "country" => "CZ",
                "gdp" => "194800000000",
                "landline" => "2100000",
                "mobile" => "12973000"
            ],
            [
                "code" => "243",
                "country" => "CD",
                "gdp" => "18560000000",
                "landline" => "58200",
                "mobile" => "19487000"
            ],
            [
                "code" => "45",
                "country" => "DK",
                "gdp" => "324300000000",
                "landline" => "2431000",
                "mobile" => "6600000"
            ],
            [
                "code" => "253",
                "country" => "DJ",
                "gdp" => "1459000000",
                "landline" => "18000",
                "mobile" => "209000"
            ],
            [
                "code" => "1-767",
                "country" => "DM",
                "gdp" => "495000000",
                "landline" => "14600",
                "mobile" => "109300"
            ],
            [
                "code" => "1-809, 1-829, 1-849",
                "country" => "DO",
                "gdp" => "59270000000",
                "landline" => "1065000",
                "mobile" => "9038000"
            ],
            [
                "code" => "670",
                "country" => "TL",
                "gdp" => "6129000000",
                "landline" => "3000",
                "mobile" => "621000"
            ],
            [
                "code" => "593",
                "country" => "EC",
                "gdp" => "91410000000",
                "landline" => "2310000",
                "mobile" => "16457000"
            ],
            [
                "code" => "20",
                "country" => "EG",
                "gdp" => "262000000000",
                "landline" => "8557000",
                "mobile" => "96800000"
            ],
            [
                "code" => "503",
                "country" => "SV",
                "gdp" => "24670000000",
                "landline" => "1060000",
                "mobile" => "8650000"
            ],
            [
                "code" => "240",
                "country" => "GQ",
                "gdp" => "17080000000",
                "landline" => "14900",
                "mobile" => "501000"
            ],
            [
                "code" => "291",
                "country" => "ER",
                "gdp" => "3438000000",
                "landline" => "60000",
                "mobile" => "305300"
            ],
            [
                "code" => "372",
                "country" => "EE",
                "gdp" => "24280000000",
                "landline" => "448200",
                "mobile" => "2070000"
            ],
            [
                "code" => "251",
                "country" => "ET",
                "gdp" => "47340000000",
                "landline" => "797500",
                "mobile" => "20524000"
            ],
            [
                "code" => "500",
                "country" => "FK",
                "gdp" => "164500000",
                "landline" => "1980",
                "mobile" => "3450"
            ],
            [
                "code" => "298",
                "country" => "FO",
                "gdp" => "2320000000",
                "landline" => "24000",
                "mobile" => "61000"
            ],
            [
                "code" => "679",
                "country" => "FJ",
                "gdp" => "4218000000",
                "landline" => "88400",
                "mobile" => "858800"
            ],
            [
                "code" => "358",
                "country" => "FI",
                "gdp" => "259600000000",
                "landline" => "890000",
                "mobile" => "9320000"
            ],
            [
                "code" => "33",
                "country" => "FR",
                "gdp" => "2739000000000",
                "landline" => "39290000",
                "mobile" => "62280000"
            ],
            [
                "code" => "689",
                "country" => "PF",
                "gdp" => "5650000000",
                "landline" => "55000",
                "mobile" => "226000"
            ],
            [
                "code" => "241",
                "country" => "GA",
                "gdp" => "19970000000",
                "landline" => "17000",
                "mobile" => "2930000"
            ],
            [
                "code" => "220",
                "country" => "GM",
                "gdp" => "896000000",
                "landline" => "64200",
                "mobile" => "1526000"
            ],
            [
                "code" => "995",
                "country" => "GE",
                "gdp" => "15950000000",
                "landline" => "1276000",
                "mobile" => "4699000"
            ],
            [
                "code" => "49",
                "country" => "DE",
                "gdp" => "3593000000000",
                "landline" => "50700000",
                "mobile" => "107700000"
            ],
            [
                "code" => "233",
                "country" => "GH",
                "gdp" => "45550000000",
                "landline" => "285000",
                "mobile" => "25618000"
            ],
            [
                "code" => "350",
                "country" => "GI",
                "gdp" => "1106000000",
                "landline" => "23100",
                "mobile" => "34750"
            ],
            [
                "code" => "30",
                "country" => "GR",
                "gdp" => "243300000000",
                "landline" => "5461000",
                "mobile" => "13354000"
            ],
            [
                "code" => "299",
                "country" => "GL",
                "gdp" => "2160000000",
                "landline" => "18900",
                "mobile" => "59455"
            ],
            [
                "code" => "1-473",
                "country" => "GD",
                "gdp" => "811000000",
                "landline" => "28500",
                "mobile" => "128000"
            ],
            [
                "code" => "1-671",
                "country" => "GU",
                "gdp" => "4600000000",
                "landline" => "67000",
                "mobile" => "98000"
            ],
            [
                "code" => "502",
                "country" => "GT",
                "gdp" => "53900000000",
                "landline" => "1744000",
                "mobile" => "20787000"
            ],
            [
                "code" => "44-1481",
                "country" => "GG",
                "gdp" => "2742000000",
                "landline" => "45100",
                "mobile" => "43800"
            ],
            [
                "code" => "224",
                "country" => "GN",
                "gdp" => "6544000000",
                "landline" => "18000",
                "mobile" => "4781000"
            ],
            [
                "code" => "245",
                "country" => "GW",
                "gdp" => "880000000",
                "landline" => "5000",
                "mobile" => "1100000"
            ],
            [
                "code" => "592",
                "country" => "GY",
                "gdp" => "3020000000",
                "landline" => "154200",
                "mobile" => "547000"
            ],
            [
                "code" => "509",
                "country" => "HT",
                "gdp" => "8287000000",
                "landline" => "50000",
                "mobile" => "6095000"
            ],
            [
                "code" => "504",
                "country" => "HN",
                "gdp" => "18880000000",
                "landline" => "610000",
                "mobile" => "7370000"
            ],
            [
                "code" => "852",
                "country" => "HK",
                "gdp" => "272100000000",
                "landline" => "4362000",
                "mobile" => "16403000"
            ],
            [
                "code" => "36",
                "country" => "HU",
                "gdp" => "130600000000",
                "landline" => "2960000",
                "mobile" => "11580000"
            ],
            [
                "code" => "354",
                "country" => "IS",
                "gdp" => "14590000000",
                "landline" => "189000",
                "mobile" => "346000"
            ],
            [
                "code" => "91",
                "country" => "IN",
                "gdp" => "1670000000000",
                "landline" => "31080000",
                "mobile" => "893862000"
            ],
            [
                "code" => "62",
                "country" => "ID",
                "gdp" => "867500000000",
                "landline" => "37983000",
                "mobile" => "281960000"
            ],
            [
                "code" => "98",
                "country" => "IR",
                "gdp" => "411900000000",
                "landline" => "28760000",
                "mobile" => "58160000"
            ],
            [
                "code" => "964",
                "country" => "IQ",
                "gdp" => "221800000000",
                "landline" => "1870000",
                "mobile" => "26760000"
            ],
            [
                "code" => "353",
                "country" => "IE",
                "gdp" => "220900000000",
                "landline" => "2007000",
                "mobile" => "4906000"
            ],
            [
                "code" => "44-1624",
                "country" => "IM",
                "gdp" => "4076000000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "972",
                "country" => "IL",
                "gdp" => "272700000000",
                "landline" => "3594000",
                "mobile" => "9225000"
            ],
            [
                "code" => "39",
                "country" => "IT",
                "gdp" => "2068000000000",
                "landline" => "21656000",
                "mobile" => "97225000"
            ],
            [
                "code" => "225",
                "country" => "CI",
                "gdp" => "28280000000",
                "landline" => "268000",
                "mobile" => "19827000"
            ],
            [
                "code" => "1-876",
                "country" => "JM",
                "gdp" => "14390000000",
                "landline" => "265000",
                "mobile" => "2665000"
            ],
            [
                "code" => "81",
                "country" => "JP",
                "gdp" => "5007000000000",
                "landline" => "64273000",
                "mobile" => "138363000"
            ],
            [
                "code" => "44-1534",
                "country" => "JE",
                "gdp" => "5100000000",
                "landline" => "73800",
                "mobile" => "108000"
            ],
            [
                "code" => "962",
                "country" => "JO",
                "gdp" => "34080000000",
                "landline" => "435000",
                "mobile" => "8984000"
            ],
            [
                "code" => "7",
                "country" => "KZ",
                "gdp" => "224900000000",
                "landline" => "4340000",
                "mobile" => "28731000"
            ],
            [
                "code" => "254",
                "country" => "KE",
                "gdp" => "45310000000",
                "landline" => "251600",
                "mobile" => "30732000"
            ],
            [
                "code" => "686",
                "country" => "KI",
                "gdp" => "173000000",
                "landline" => "9000",
                "mobile" => "16000"
            ],
            [
                "code" => "383",
                "country" => "XK",
                "gdp" => "7150000000",
                "landline" => "106300",
                "mobile" => "562000"
            ],
            [
                "code" => "965",
                "country" => "KW",
                "gdp" => "179500000000",
                "landline" => "510000",
                "mobile" => "5526000"
            ],
            [
                "code" => "996",
                "country" => "KG",
                "gdp" => "7234000000",
                "landline" => "489000",
                "mobile" => "6800000"
            ],
            [
                "code" => "856",
                "country" => "LA",
                "gdp" => "10100000000",
                "landline" => "112000",
                "mobile" => "6492000"
            ],
            [
                "code" => "371",
                "country" => "LV",
                "gdp" => "30380000000",
                "landline" => "501000",
                "mobile" => "2310000"
            ],
            [
                "code" => "961",
                "country" => "LB",
                "gdp" => "43490000000",
                "landline" => "878000",
                "mobile" => "4000000"
            ],
            [
                "code" => "266",
                "country" => "LS",
                "gdp" => "2457000000",
                "landline" => "43100",
                "mobile" => "1312000"
            ],
            [
                "code" => "231",
                "country" => "LR",
                "gdp" => "1977000000",
                "landline" => "3200",
                "mobile" => "2394000"
            ],
            [
                "code" => "218",
                "country" => "LY",
                "gdp" => "70920000000",
                "landline" => "814000",
                "mobile" => "9590000"
            ],
            [
                "code" => "423",
                "country" => "LI",
                "gdp" => "5113000000",
                "landline" => "20000",
                "mobile" => "38000"
            ],
            [
                "code" => "370",
                "country" => "LT",
                "gdp" => "46710000000",
                "landline" => "667300",
                "mobile" => "5000000"
            ],
            [
                "code" => "352",
                "country" => "LU",
                "gdp" => "60540000000",
                "landline" => "266700",
                "mobile" => "761300"
            ],
            [
                "code" => "853",
                "country" => "MO",
                "gdp" => "51680000000",
                "landline" => "162500",
                "mobile" => "1613000"
            ],
            [
                "code" => "389",
                "country" => "MK",
                "gdp" => "10650000000",
                "landline" => "407900",
                "mobile" => "2235000"
            ],
            [
                "code" => "261",
                "country" => "MG",
                "gdp" => "10530000000",
                "landline" => "143700",
                "mobile" => "8564000"
            ],
            [
                "code" => "265",
                "country" => "MW",
                "gdp" => "3683000000",
                "landline" => "227300",
                "mobile" => "4420000"
            ],
            [
                "code" => "60",
                "country" => "MY",
                "gdp" => "312400000000",
                "landline" => "4589000",
                "mobile" => "41325000"
            ],
            [
                "code" => "960",
                "country" => "MV",
                "gdp" => "2270000000",
                "landline" => "23140",
                "mobile" => "560000"
            ],
            [
                "code" => "223",
                "country" => "ML",
                "gdp" => "11370000000",
                "landline" => "112000",
                "mobile" => "14613000"
            ],
            [
                "code" => "356",
                "country" => "MT",
                "gdp" => "9541000000",
                "landline" => "229700",
                "mobile" => "539500"
            ],
            [
                "code" => "692",
                "country" => "MH",
                "gdp" => "193000000",
                "landline" => "4400",
                "mobile" => "3800"
            ],
            [
                "code" => "222",
                "country" => "MR",
                "gdp" => "4183000000",
                "landline" => "65100",
                "mobile" => "4024000"
            ],
            [
                "code" => "230",
                "country" => "MU",
                "gdp" => "11900000000",
                "landline" => "349100",
                "mobile" => "1485000"
            ],
            [
                "code" => "262",
                "country" => "YT",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "52",
                "country" => "MX",
                "gdp" => "1327000000000",
                "landline" => "20220000",
                "mobile" => "100786000"
            ],
            [
                "code" => "691",
                "country" => "FM",
                "gdp" => "339000000",
                "landline" => "8400",
                "mobile" => "27600"
            ],
            [
                "code" => "373",
                "country" => "MD",
                "gdp" => "7932000000",
                "landline" => "1206000",
                "mobile" => "4080000"
            ],
            [
                "code" => "377",
                "country" => "MC",
                "gdp" => "5748000000",
                "landline" => "44500",
                "mobile" => "33200"
            ],
            [
                "code" => "976",
                "country" => "MN",
                "gdp" => "11140000000",
                "landline" => "176700",
                "mobile" => "3375000"
            ],
            [
                "code" => "382",
                "country" => "ME",
                "gdp" => "4518000000",
                "landline" => "163000",
                "mobile" => "1126000"
            ],
            [
                "code" => "1-664",
                "country" => "MS",
                "gdp" => "",
                "landline" => "3000",
                "mobile" => "4000"
            ],
            [
                "code" => "212",
                "country" => "MA",
                "gdp" => "104800000000",
                "landline" => "3280000",
                "mobile" => "39016000"
            ],
            [
                "code" => "258",
                "country" => "MZ",
                "gdp" => "14670000000",
                "landline" => "88100",
                "mobile" => "8108000"
            ],
            [
                "code" => "95",
                "country" => "MM",
                "gdp" => "59430000000",
                "landline" => "556000",
                "mobile" => "5440000"
            ],
            [
                "code" => "264",
                "country" => "NA",
                "gdp" => "12300000000",
                "landline" => "171000",
                "mobile" => "2435000"
            ],
            [
                "code" => "674",
                "country" => "NR",
                "gdp" => "",
                "landline" => "1900",
                "mobile" => "6800"
            ],
            [
                "code" => "977",
                "country" => "NP",
                "gdp" => "19340000000",
                "landline" => "834000",
                "mobile" => "18138000"
            ],
            [
                "code" => "31",
                "country" => "NL",
                "gdp" => "722300000000",
                "landline" => "7086000",
                "mobile" => "19643000"
            ],
            [
                "code" => "687",
                "country" => "NC",
                "gdp" => "9280000000",
                "landline" => "80000",
                "mobile" => "231000"
            ],
            [
                "code" => "64",
                "country" => "NZ",
                "gdp" => "181100000000",
                "landline" => "1880000",
                "mobile" => "4922000"
            ],
            [
                "code" => "505",
                "country" => "NI",
                "gdp" => "11260000000",
                "landline" => "320000",
                "mobile" => "5346000"
            ],
            [
                "code" => "227",
                "country" => "NE",
                "gdp" => "7304000000",
                "landline" => "100500",
                "mobile" => "5400000"
            ],
            [
                "code" => "234",
                "country" => "NG",
                "gdp" => "502000000000",
                "landline" => "418200",
                "mobile" => "112780000"
            ],
            [
                "code" => "683",
                "country" => "NU",
                "gdp" => "10010000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "850",
                "country" => "KP",
                "gdp" => "28000000000",
                "landline" => "1180000",
                "mobile" => "1700000"
            ],
            [
                "code" => "1-670",
                "country" => "MP",
                "gdp" => "733000000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "47",
                "country" => "NO",
                "gdp" => "515800000000",
                "landline" => "1465000",
                "mobile" => "5732000"
            ],
            [
                "code" => "968",
                "country" => "OM",
                "gdp" => "81950000000",
                "landline" => "305000",
                "mobile" => "5278000"
            ],
            [
                "code" => "92",
                "country" => "PK",
                "gdp" => "236500000000",
                "landline" => "5803000",
                "mobile" => "125000000"
            ],
            [
                "code" => "680",
                "country" => "PW",
                "gdp" => "221000000",
                "landline" => "7300",
                "mobile" => "17150"
            ],
            [
                "code" => "970",
                "country" => "PS",
                "gdp" => "6641000000",
                "landline" => "406000",
                "mobile" => "3041000"
            ],
            [
                "code" => "507",
                "country" => "PA",
                "gdp" => "40620000000",
                "landline" => "640000",
                "mobile" => "6770000"
            ],
            [
                "code" => "675",
                "country" => "PG",
                "gdp" => "16100000000",
                "landline" => "139000",
                "mobile" => "2709000"
            ],
            [
                "code" => "595",
                "country" => "PY",
                "gdp" => "30560000000",
                "landline" => "376000",
                "mobile" => "6790000"
            ],
            [
                "code" => "51",
                "country" => "PE",
                "gdp" => "210300000000",
                "landline" => "3420000",
                "mobile" => "29400000"
            ],
            [
                "code" => "63",
                "country" => "PH",
                "gdp" => "272200000000",
                "landline" => "3939000",
                "mobile" => "103000000"
            ],
            [
                "code" => "64",
                "country" => "PN",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "48",
                "country" => "PL",
                "gdp" => "513900000000",
                "landline" => "6125000",
                "mobile" => "50840000"
            ],
            [
                "code" => "351",
                "country" => "PT",
                "gdp" => "219300000000",
                "landline" => "4558000",
                "mobile" => "12312000"
            ],
            [
                "code" => "1-787, 1-939",
                "country" => "PR",
                "gdp" => "93520000000",
                "landline" => "780200",
                "mobile" => "3060000"
            ],
            [
                "code" => "974",
                "country" => "QA",
                "gdp" => "213100000000",
                "landline" => "327000",
                "mobile" => "2600000"
            ],
            [
                "code" => "242",
                "country" => "CG",
                "gdp" => "14250000000",
                "landline" => "14900",
                "mobile" => "4283000"
            ],
            [
                "code" => "262",
                "country" => "RE",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "40",
                "country" => "RO",
                "gdp" => "188900000000",
                "landline" => "4680000",
                "mobile" => "22700000"
            ],
            [
                "code" => "7",
                "country" => "RU",
                "gdp" => "2113000000000",
                "landline" => "42900000",
                "mobile" => "261900000"
            ],
            [
                "code" => "250",
                "country" => "RW",
                "gdp" => "7700000000",
                "landline" => "44400",
                "mobile" => "5690000"
            ],
            [
                "code" => "590",
                "country" => "BL",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "290",
                "country" => "SH",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "1-869",
                "country" => "KN",
                "gdp" => "767000000",
                "landline" => "20000",
                "mobile" => "84000"
            ],
            [
                "code" => "1-758",
                "country" => "LC",
                "gdp" => "1377000000",
                "landline" => "36800",
                "mobile" => "227000"
            ],
            [
                "code" => "590",
                "country" => "MF",
                "gdp" => "561500000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "508",
                "country" => "PM",
                "gdp" => "215300000",
                "landline" => "4800",
                "mobile" => ""
            ],
            [
                "code" => "1-784",
                "country" => "VC",
                "gdp" => "742000000",
                "landline" => "19400",
                "mobile" => "135500"
            ],
            [
                "code" => "685",
                "country" => "WS",
                "gdp" => "705000000",
                "landline" => "35300",
                "mobile" => "167400"
            ],
            [
                "code" => "378",
                "country" => "SM",
                "gdp" => "1866000000",
                "landline" => "18700",
                "mobile" => "36000"
            ],
            [
                "code" => "239",
                "country" => "ST",
                "gdp" => "311000000",
                "landline" => "8000",
                "mobile" => "122000"
            ],
            [
                "code" => "966",
                "country" => "SA",
                "gdp" => "718500000000",
                "landline" => "4800000",
                "mobile" => "53000000"
            ],
            [
                "code" => "221",
                "country" => "SN",
                "gdp" => "15360000000",
                "landline" => "338200",
                "mobile" => "11470000"
            ],
            [
                "code" => "381",
                "country" => "RS",
                "gdp" => "43680000000",
                "landline" => "2977000",
                "mobile" => "9138000"
            ],
            [
                "code" => "248",
                "country" => "SC",
                "gdp" => "1271000000",
                "landline" => "28900",
                "mobile" => "138300"
            ],
            [
                "code" => "232",
                "country" => "SL",
                "gdp" => "4607000000",
                "landline" => "18000",
                "mobile" => "2210000"
            ],
            [
                "code" => "65",
                "country" => "SG",
                "gdp" => "295700000000",
                "landline" => "1990000",
                "mobile" => "8063000"
            ],
            [
                "code" => "1-721",
                "country" => "SX",
                "gdp" => "794700000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "421",
                "country" => "SK",
                "gdp" => "96960000000",
                "landline" => "975000",
                "mobile" => "6095000"
            ],
            [
                "code" => "386",
                "country" => "SI",
                "gdp" => "46820000000",
                "landline" => "825000",
                "mobile" => "2246000"
            ],
            [
                "code" => "677",
                "country" => "SB",
                "gdp" => "1099000000",
                "landline" => "8060",
                "mobile" => "302100"
            ],
            [
                "code" => "252",
                "country" => "SO",
                "gdp" => "2372000000",
                "landline" => "100000",
                "mobile" => "658000"
            ],
            [
                "code" => "27",
                "country" => "ZA",
                "gdp" => "353900000000",
                "landline" => "4030000",
                "mobile" => "68400000"
            ],
            [
                "code" => "82",
                "country" => "KR",
                "gdp" => "1198000000000",
                "landline" => "30100000",
                "mobile" => "53625000"
            ],
            [
                "code" => "211",
                "country" => "SS",
                "gdp" => "11770000000",
                "landline" => "2200",
                "mobile" => "2000000"
            ],
            [
                "code" => "34",
                "country" => "ES",
                "gdp" => "1356000000000",
                "landline" => "19220000",
                "mobile" => "50663000"
            ],
            [
                "code" => "94",
                "country" => "LK",
                "gdp" => "65120000000",
                "landline" => "2796000",
                "mobile" => "19533000"
            ],
            [
                "code" => "249",
                "country" => "SD",
                "gdp" => "52500000000",
                "landline" => "425000",
                "mobile" => "27659000"
            ],
            [
                "code" => "597",
                "country" => "SR",
                "gdp" => "5009000000",
                "landline" => "83000",
                "mobile" => "977000"
            ],
            [
                "code" => "47",
                "country" => "SJ",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "268",
                "country" => "SZ",
                "gdp" => "3807000000",
                "landline" => "48600",
                "mobile" => "805000"
            ],
            [
                "code" => "46",
                "country" => "SE",
                "gdp" => "552000000000",
                "landline" => "4321000",
                "mobile" => "11643000"
            ],
            [
                "code" => "41",
                "country" => "CH",
                "gdp" => "646200000000",
                "landline" => "4382000",
                "mobile" => "10460000"
            ],
            [
                "code" => "963",
                "country" => "SY",
                "gdp" => "64700000000",
                "landline" => "4425000",
                "mobile" => "12928000"
            ],
            [
                "code" => "886",
                "country" => "TW",
                "gdp" => "484700000000",
                "landline" => "15998000",
                "mobile" => "29455000"
            ],
            [
                "code" => "992",
                "country" => "TJ",
                "gdp" => "8513000000",
                "landline" => "393000",
                "mobile" => "6528000"
            ],
            [
                "code" => "255",
                "country" => "TZ",
                "gdp" => "31940000000",
                "landline" => "161100",
                "mobile" => "27220000"
            ],
            [
                "code" => "66",
                "country" => "TH",
                "gdp" => "400900000000",
                "landline" => "6391000",
                "mobile" => "84075000"
            ],
            [
                "code" => "228",
                "country" => "TG",
                "gdp" => "4299000000",
                "landline" => "225000",
                "mobile" => "3518000"
            ],
            [
                "code" => "690",
                "country" => "TK",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "676",
                "country" => "TO",
                "gdp" => "477000000",
                "landline" => "30000",
                "mobile" => "56000"
            ],
            [
                "code" => "1-868",
                "country" => "TT",
                "gdp" => "27130000000",
                "landline" => "287000",
                "mobile" => "1884000"
            ],
            [
                "code" => "216",
                "country" => "TN",
                "gdp" => "48380000000",
                "landline" => "1105000",
                "mobile" => "12840000"
            ],
            [
                "code" => "90",
                "country" => "TR",
                "gdp" => "821800000000",
                "landline" => "13860000",
                "mobile" => "67680000"
            ],
            [
                "code" => "993",
                "country" => "TM",
                "gdp" => "40560000000",
                "landline" => "575000",
                "mobile" => "3953000"
            ],
            [
                "code" => "1-649",
                "country" => "TC",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "688",
                "country" => "TV",
                "gdp" => "38000000",
                "landline" => "1450",
                "mobile" => "2800"
            ],
            [
                "code" => "1-340",
                "country" => "VI",
                "gdp" => "",
                "landline" => "75800",
                "mobile" => "80300"
            ],
            [
                "code" => "256",
                "country" => "UG",
                "gdp" => "22600000000",
                "landline" => "315000",
                "mobile" => "16355000"
            ],
            [
                "code" => "380",
                "country" => "UA",
                "gdp" => "175500000000",
                "landline" => "12182000",
                "mobile" => "59344000"
            ],
            [
                "code" => "971",
                "country" => "AE",
                "gdp" => "390000000000",
                "landline" => "1967000",
                "mobile" => "13775000"
            ],
            [
                "code" => "44",
                "country" => "GB",
                "gdp" => "2490000000000",
                "landline" => "33010000",
                "mobile" => "82109000"
            ],
            [
                "code" => "1",
                "country" => "US",
                "gdp" => "16720000000000",
                "landline" => "139000000",
                "mobile" => "310000000"
            ],
            [
                "code" => "598",
                "country" => "UY",
                "gdp" => "57110000000",
                "landline" => "1010000",
                "mobile" => "5000000"
            ],
            [
                "code" => "998",
                "country" => "UZ",
                "gdp" => "55180000000",
                "landline" => "1963000",
                "mobile" => "20274000"
            ],
            [
                "code" => "678",
                "country" => "VU",
                "gdp" => "828000000",
                "landline" => "5800",
                "mobile" => "137000"
            ],
            [
                "code" => "379",
                "country" => "VA",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "58",
                "country" => "VE",
                "gdp" => "367500000000",
                "landline" => "7650000",
                "mobile" => "30520000"
            ],
            [
                "code" => "84",
                "country" => "VN",
                "gdp" => "170000000000",
                "landline" => "10191000",
                "mobile" => "134066000"
            ],
            [
                "code" => "681",
                "country" => "WF",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "212",
                "country" => "EH",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "967",
                "country" => "YE",
                "gdp" => "43890000000",
                "landline" => "1100000",
                "mobile" => "13900000"
            ],
            [
                "code" => "260",
                "country" => "ZM",
                "gdp" => "22240000000",
                "landline" => "82500",
                "mobile" => "10525000"
            ],
            [
                "code" => "263",
                "country" => "ZW",
                "gdp" => "10480000000",
                "landline" => "301600",
                "mobile" => "12614000"
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('phone_area')->truncate();
        foreach ($phoneAreas as $phone) 
        {
            $countryName = $phone["country"];
            $country = Country::where('code', $countryName)->first();

            if(is_null($country))
                throw new \Exception("unable to find country: $countryName", 1);

            $phone['country'] = $country->id; 

            $this->command->info('Inserted phone from' . $phone['code'] . ' [' . count($phone) . ']..');
            PhoneArea::create($phone);
        }
        Schema::enableForeignKeyConstraints();

    }
}
