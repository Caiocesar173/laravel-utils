<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Caiocesar173\Utils\Entities\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\PhoneArea;


class PhoneAreas extends Seeder
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
                "country" => "Afghanistan",
                "gdp" => "20650000000",
                "landline" => "13500",
                "mobile" => "18000000"
            ],
            [
                "code" => "355",
                "country" => "Albania",
                "gdp" => "12800000000",
                "landline" => "312000",
                "mobile" => "3500000"
            ],
            [
                "code" => "213",
                "country" => "Algeria",
                "gdp" => "215700000000",
                "landline" => "3200000",
                "mobile" => "37692000"
            ],
            [
                "code" => "1-684",
                "country" => "American Samoa",
                "gdp" => "462200000",
                "landline" => "10000",
                "mobile" => ""
            ],
            [
                "code" => "376",
                "country" => "Andorra",
                "gdp" => "4800000000",
                "landline" => "39000",
                "mobile" => "65000"
            ],
            [
                "code" => "244",
                "country" => "Angola",
                "gdp" => "124000000000",
                "landline" => "303000",
                "mobile" => "9800000"
            ],
            [
                "code" => "1-264",
                "country" => "Anguilla",
                "gdp" => "175400000",
                "landline" => "6000",
                "mobile" => "26000"
            ],
            [
                "code" => "672",
                "country" => "Antarctica",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "1-268",
                "country" => "Antigua and Barbuda",
                "gdp" => "1220000000",
                "landline" => "35000",
                "mobile" => "179800"
            ],
            [
                "code" => "54",
                "country" => "Argentina",
                "gdp" => "484600000000",
                "landline" => "1",
                "mobile" => "58600000"
            ],
            [
                "code" => "374",
                "country" => "Armenia",
                "gdp" => "10440000000",
                "landline" => "584000",
                "mobile" => "3223000"
            ],
            [
                "code" => "297",
                "country" => "Aruba",
                "gdp" => "2516000000",
                "landline" => "43000",
                "mobile" => "135000"
            ],
            [
                "code" => "61",
                "country" => "Australia",
                "gdp" => "1488000000000",
                "landline" => "10470000",
                "mobile" => "24400000"
            ],
            [
                "code" => "43",
                "country" => "Austria",
                "gdp" => "417900000000",
                "landline" => "3342000",
                "mobile" => "13590000"
            ],
            [
                "code" => "994",
                "country" => "Azerbaijan",
                "gdp" => "76010000000",
                "landline" => "1734000",
                "mobile" => "10125000"
            ],
            [
                "code" => "1-242",
                "country" => "Bahamas",
                "gdp" => "8373000000",
                "landline" => "137000",
                "mobile" => "254000"
            ],
            [
                "code" => "973",
                "country" => "Bahrain",
                "gdp" => "28360000000",
                "landline" => "290000",
                "mobile" => "2125000"
            ],
            [
                "code" => "880",
                "country" => "Bangladesh",
                "gdp" => "140200000000",
                "landline" => "962000",
                "mobile" => "97180000"
            ],
            [
                "code" => "1-246",
                "country" => "Barbados",
                "gdp" => "4262000000",
                "landline" => "144000",
                "mobile" => "347000"
            ],
            [
                "code" => "375",
                "country" => "Belarus",
                "gdp" => "69240000000",
                "landline" => "4407000",
                "mobile" => "10675000"
            ],
            [
                "code" => "32",
                "country" => "Belgium",
                "gdp" => "507400000000",
                "landline" => "4631000",
                "mobile" => "12880000"
            ],
            [
                "code" => "501",
                "country" => "Belize",
                "gdp" => "1637000000",
                "landline" => "25400",
                "mobile" => "164200"
            ],
            [
                "code" => "229",
                "country" => "Benin",
                "gdp" => "8359000000",
                "landline" => "156700",
                "mobile" => "8408000"
            ],
            [
                "code" => "1-441",
                "country" => "Bermuda",
                "gdp" => "5600000000",
                "landline" => "69000",
                "mobile" => "91000"
            ],
            [
                "code" => "975",
                "country" => "Bhutan",
                "gdp" => "2133000000",
                "landline" => "27000",
                "mobile" => "560000"
            ],
            [
                "code" => "591",
                "country" => "Bolivia",
                "gdp" => "30790000000",
                "landline" => "880600",
                "mobile" => "9494000"
            ],
            [
                "code" => "387",
                "country" => "Bosnia and Herzegovina",
                "gdp" => "18870000000",
                "landline" => "878000",
                "mobile" => "3350000"
            ],
            [
                "code" => "267",
                "country" => "Botswana",
                "gdp" => "15530000000",
                "landline" => "160500",
                "mobile" => "3082000"
            ],
            [
                "code" => "55",
                "country" => "Brazil",
                "gdp" => "2190000000000",
                "landline" => "44300000",
                "mobile" => "248324000"
            ],
            [
                "code" => "246",
                "country" => "British Indian Ocean Territory",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "1-284",
                "country" => "British Virgin Islands",
                "gdp" => "1095000000",
                "landline" => "12268",
                "mobile" => "48700"
            ],
            [
                "code" => "673",
                "country" => "Brunei",
                "gdp" => "16560000000",
                "landline" => "70933",
                "mobile" => "469700"
            ],
            [
                "code" => "359",
                "country" => "Bulgaria",
                "gdp" => "53700000000",
                "landline" => "2253000",
                "mobile" => "10780000"
            ],
            [
                "code" => "226",
                "country" => "Burkina Faso",
                "gdp" => "12130000000",
                "landline" => "141400",
                "mobile" => "9980000"
            ],
            [
                "code" => "257",
                "country" => "Burundi",
                "gdp" => "2676000000",
                "landline" => "17400",
                "mobile" => "2247000"
            ],
            [
                "code" => "855",
                "country" => "Cambodia",
                "gdp" => "15640000000",
                "landline" => "584000",
                "mobile" => "19100000"
            ],
            [
                "code" => "237",
                "country" => "Cameroon",
                "gdp" => "27880000000",
                "landline" => "737400",
                "mobile" => "13100000"
            ],
            [
                "code" => "1",
                "country" => "Canada",
                "gdp" => "1825000000000",
                "landline" => "18010000",
                "mobile" => "26263000"
            ],
            [
                "code" => "238",
                "country" => "Cape Verde",
                "gdp" => "1955000000",
                "landline" => "70200",
                "mobile" => "425300"
            ],
            [
                "code" => "1-345",
                "country" => "Cayman Islands",
                "gdp" => "2250000000",
                "landline" => "37400",
                "mobile" => "96300"
            ],
            [
                "code" => "236",
                "country" => "Central African Republic",
                "gdp" => "2050000000",
                "landline" => "5600",
                "mobile" => "1070000"
            ],
            [
                "code" => "235",
                "country" => "Chad",
                "gdp" => "13590000000",
                "landline" => "29900",
                "mobile" => "4200000"
            ],
            [
                "code" => "56",
                "country" => "Chile",
                "gdp" => "281700000000",
                "landline" => "3276000",
                "mobile" => "24130000"
            ],
            [
                "code" => "86",
                "country" => "China",
                "gdp" => "9330000000000",
                "landline" => "278860000",
                "mobile" => "1100000000"
            ],
            [
                "code" => "61",
                "country" => "Christmas Island",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "61",
                "country" => "Cocos Islands",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "57",
                "country" => "Colombia",
                "gdp" => "369200000000",
                "landline" => "6291000",
                "mobile" => "49066000"
            ],
            [
                "code" => "269",
                "country" => "Comoros",
                "gdp" => "658000000",
                "landline" => "24000",
                "mobile" => "250000"
            ],
            [
                "code" => "682",
                "country" => "Cook Islands",
                "gdp" => "183200000",
                "landline" => "7200",
                "mobile" => "7800"
            ],
            [
                "code" => "506",
                "country" => "Costa Rica",
                "gdp" => "48510000000",
                "landline" => "1018000",
                "mobile" => "6151000"
            ],
            [
                "code" => "385",
                "country" => "Croatia",
                "gdp" => "59140000000",
                "landline" => "1640000",
                "mobile" => "4970000"
            ],
            [
                "code" => "53",
                "country" => "Cuba",
                "gdp" => "72300000000",
                "landline" => "1217000",
                "mobile" => "1682000"
            ],
            [
                "code" => "599",
                "country" => "Curacao",
                "gdp" => "5600000000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "357",
                "country" => "Cyprus",
                "gdp" => "21780000000",
                "landline" => "373200",
                "mobile" => "1110000"
            ],
            [
                "code" => "420",
                "country" => "Czech Republic",
                "gdp" => "194800000000",
                "landline" => "2100000",
                "mobile" => "12973000"
            ],
            [
                "code" => "243",
                "country" => "Democratic Republic of the Congo",
                "gdp" => "18560000000",
                "landline" => "58200",
                "mobile" => "19487000"
            ],
            [
                "code" => "45",
                "country" => "Denmark",
                "gdp" => "324300000000",
                "landline" => "2431000",
                "mobile" => "6600000"
            ],
            [
                "code" => "253",
                "country" => "Djibouti",
                "gdp" => "1459000000",
                "landline" => "18000",
                "mobile" => "209000"
            ],
            [
                "code" => "1-767",
                "country" => "Dominica",
                "gdp" => "495000000",
                "landline" => "14600",
                "mobile" => "109300"
            ],
            [
                "code" => "1-809, 1-829, 1-849",
                "country" => "Dominican Republic",
                "gdp" => "59270000000",
                "landline" => "1065000",
                "mobile" => "9038000"
            ],
            [
                "code" => "670",
                "country" => "East Timor",
                "gdp" => "6129000000",
                "landline" => "3000",
                "mobile" => "621000"
            ],
            [
                "code" => "593",
                "country" => "Ecuador",
                "gdp" => "91410000000",
                "landline" => "2310000",
                "mobile" => "16457000"
            ],
            [
                "code" => "20",
                "country" => "Egypt",
                "gdp" => "262000000000",
                "landline" => "8557000",
                "mobile" => "96800000"
            ],
            [
                "code" => "503",
                "country" => "El Salvador",
                "gdp" => "24670000000",
                "landline" => "1060000",
                "mobile" => "8650000"
            ],
            [
                "code" => "240",
                "country" => "Equatorial Guinea",
                "gdp" => "17080000000",
                "landline" => "14900",
                "mobile" => "501000"
            ],
            [
                "code" => "291",
                "country" => "Eritrea",
                "gdp" => "3438000000",
                "landline" => "60000",
                "mobile" => "305300"
            ],
            [
                "code" => "372",
                "country" => "Estonia",
                "gdp" => "24280000000",
                "landline" => "448200",
                "mobile" => "2070000"
            ],
            [
                "code" => "251",
                "country" => "Ethiopia",
                "gdp" => "47340000000",
                "landline" => "797500",
                "mobile" => "20524000"
            ],
            [
                "code" => "500",
                "country" => "Falkland Islands",
                "gdp" => "164500000",
                "landline" => "1980",
                "mobile" => "3450"
            ],
            [
                "code" => "298",
                "country" => "Faroe Islands",
                "gdp" => "2320000000",
                "landline" => "24000",
                "mobile" => "61000"
            ],
            [
                "code" => "679",
                "country" => "Fiji",
                "gdp" => "4218000000",
                "landline" => "88400",
                "mobile" => "858800"
            ],
            [
                "code" => "358",
                "country" => "Finland",
                "gdp" => "259600000000",
                "landline" => "890000",
                "mobile" => "9320000"
            ],
            [
                "code" => "33",
                "country" => "France",
                "gdp" => "2739000000000",
                "landline" => "39290000",
                "mobile" => "62280000"
            ],
            [
                "code" => "689",
                "country" => "French Polynesia",
                "gdp" => "5650000000",
                "landline" => "55000",
                "mobile" => "226000"
            ],
            [
                "code" => "241",
                "country" => "Gabon",
                "gdp" => "19970000000",
                "landline" => "17000",
                "mobile" => "2930000"
            ],
            [
                "code" => "220",
                "country" => "Gambia",
                "gdp" => "896000000",
                "landline" => "64200",
                "mobile" => "1526000"
            ],
            [
                "code" => "995",
                "country" => "Georgia",
                "gdp" => "15950000000",
                "landline" => "1276000",
                "mobile" => "4699000"
            ],
            [
                "code" => "49",
                "country" => "Germany",
                "gdp" => "3593000000000",
                "landline" => "50700000",
                "mobile" => "107700000"
            ],
            [
                "code" => "233",
                "country" => "Ghana",
                "gdp" => "45550000000",
                "landline" => "285000",
                "mobile" => "25618000"
            ],
            [
                "code" => "350",
                "country" => "Gibraltar",
                "gdp" => "1106000000",
                "landline" => "23100",
                "mobile" => "34750"
            ],
            [
                "code" => "30",
                "country" => "Greece",
                "gdp" => "243300000000",
                "landline" => "5461000",
                "mobile" => "13354000"
            ],
            [
                "code" => "299",
                "country" => "Greenland",
                "gdp" => "2160000000",
                "landline" => "18900",
                "mobile" => "59455"
            ],
            [
                "code" => "1-473",
                "country" => "Grenada",
                "gdp" => "811000000",
                "landline" => "28500",
                "mobile" => "128000"
            ],
            [
                "code" => "1-671",
                "country" => "Guam",
                "gdp" => "4600000000",
                "landline" => "67000",
                "mobile" => "98000"
            ],
            [
                "code" => "502",
                "country" => "Guatemala",
                "gdp" => "53900000000",
                "landline" => "1744000",
                "mobile" => "20787000"
            ],
            [
                "code" => "44-1481",
                "country" => "Guernsey",
                "gdp" => "2742000000",
                "landline" => "45100",
                "mobile" => "43800"
            ],
            [
                "code" => "224",
                "country" => "Guinea",
                "gdp" => "6544000000",
                "landline" => "18000",
                "mobile" => "4781000"
            ],
            [
                "code" => "245",
                "country" => "Guinea-Bissau",
                "gdp" => "880000000",
                "landline" => "5000",
                "mobile" => "1100000"
            ],
            [
                "code" => "592",
                "country" => "Guyana",
                "gdp" => "3020000000",
                "landline" => "154200",
                "mobile" => "547000"
            ],
            [
                "code" => "509",
                "country" => "Haiti",
                "gdp" => "8287000000",
                "landline" => "50000",
                "mobile" => "6095000"
            ],
            [
                "code" => "504",
                "country" => "Honduras",
                "gdp" => "18880000000",
                "landline" => "610000",
                "mobile" => "7370000"
            ],
            [
                "code" => "852",
                "country" => "Hong Kong",
                "gdp" => "272100000000",
                "landline" => "4362000",
                "mobile" => "16403000"
            ],
            [
                "code" => "36",
                "country" => "Hungary",
                "gdp" => "130600000000",
                "landline" => "2960000",
                "mobile" => "11580000"
            ],
            [
                "code" => "354",
                "country" => "Iceland",
                "gdp" => "14590000000",
                "landline" => "189000",
                "mobile" => "346000"
            ],
            [
                "code" => "91",
                "country" => "India",
                "gdp" => "1670000000000",
                "landline" => "31080000",
                "mobile" => "893862000"
            ],
            [
                "code" => "62",
                "country" => "Indonesia",
                "gdp" => "867500000000",
                "landline" => "37983000",
                "mobile" => "281960000"
            ],
            [
                "code" => "98",
                "country" => "Iran",
                "gdp" => "411900000000",
                "landline" => "28760000",
                "mobile" => "58160000"
            ],
            [
                "code" => "964",
                "country" => "Iraq",
                "gdp" => "221800000000",
                "landline" => "1870000",
                "mobile" => "26760000"
            ],
            [
                "code" => "353",
                "country" => "Ireland",
                "gdp" => "220900000000",
                "landline" => "2007000",
                "mobile" => "4906000"
            ],
            [
                "code" => "44-1624",
                "country" => "Isle of Man",
                "gdp" => "4076000000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "972",
                "country" => "Israel",
                "gdp" => "272700000000",
                "landline" => "3594000",
                "mobile" => "9225000"
            ],
            [
                "code" => "39",
                "country" => "Italy",
                "gdp" => "2068000000000",
                "landline" => "21656000",
                "mobile" => "97225000"
            ],
            [
                "code" => "225",
                "country" => "Ivory Coast",
                "gdp" => "28280000000",
                "landline" => "268000",
                "mobile" => "19827000"
            ],
            [
                "code" => "1-876",
                "country" => "Jamaica",
                "gdp" => "14390000000",
                "landline" => "265000",
                "mobile" => "2665000"
            ],
            [
                "code" => "81",
                "country" => "Japan",
                "gdp" => "5007000000000",
                "landline" => "64273000",
                "mobile" => "138363000"
            ],
            [
                "code" => "44-1534",
                "country" => "Jersey",
                "gdp" => "5100000000",
                "landline" => "73800",
                "mobile" => "108000"
            ],
            [
                "code" => "962",
                "country" => "Jordan",
                "gdp" => "34080000000",
                "landline" => "435000",
                "mobile" => "8984000"
            ],
            [
                "code" => "7",
                "country" => "Kazakhstan",
                "gdp" => "224900000000",
                "landline" => "4340000",
                "mobile" => "28731000"
            ],
            [
                "code" => "254",
                "country" => "Kenya",
                "gdp" => "45310000000",
                "landline" => "251600",
                "mobile" => "30732000"
            ],
            [
                "code" => "686",
                "country" => "Kiribati",
                "gdp" => "173000000",
                "landline" => "9000",
                "mobile" => "16000"
            ],
            [
                "code" => "383",
                "country" => "Kosovo",
                "gdp" => "7150000000",
                "landline" => "106300",
                "mobile" => "562000"
            ],
            [
                "code" => "965",
                "country" => "Kuwait",
                "gdp" => "179500000000",
                "landline" => "510000",
                "mobile" => "5526000"
            ],
            [
                "code" => "996",
                "country" => "Kyrgyzstan",
                "gdp" => "7234000000",
                "landline" => "489000",
                "mobile" => "6800000"
            ],
            [
                "code" => "856",
                "country" => "Laos",
                "gdp" => "10100000000",
                "landline" => "112000",
                "mobile" => "6492000"
            ],
            [
                "code" => "371",
                "country" => "Latvia",
                "gdp" => "30380000000",
                "landline" => "501000",
                "mobile" => "2310000"
            ],
            [
                "code" => "961",
                "country" => "Lebanon",
                "gdp" => "43490000000",
                "landline" => "878000",
                "mobile" => "4000000"
            ],
            [
                "code" => "266",
                "country" => "Lesotho",
                "gdp" => "2457000000",
                "landline" => "43100",
                "mobile" => "1312000"
            ],
            [
                "code" => "231",
                "country" => "Liberia",
                "gdp" => "1977000000",
                "landline" => "3200",
                "mobile" => "2394000"
            ],
            [
                "code" => "218",
                "country" => "Libya",
                "gdp" => "70920000000",
                "landline" => "814000",
                "mobile" => "9590000"
            ],
            [
                "code" => "423",
                "country" => "Liechtenstein",
                "gdp" => "5113000000",
                "landline" => "20000",
                "mobile" => "38000"
            ],
            [
                "code" => "370",
                "country" => "Lithuania",
                "gdp" => "46710000000",
                "landline" => "667300",
                "mobile" => "5000000"
            ],
            [
                "code" => "352",
                "country" => "Luxembourg",
                "gdp" => "60540000000",
                "landline" => "266700",
                "mobile" => "761300"
            ],
            [
                "code" => "853",
                "country" => "Macau",
                "gdp" => "51680000000",
                "landline" => "162500",
                "mobile" => "1613000"
            ],
            [
                "code" => "389",
                "country" => "Macedonia",
                "gdp" => "10650000000",
                "landline" => "407900",
                "mobile" => "2235000"
            ],
            [
                "code" => "261",
                "country" => "Madagascar",
                "gdp" => "10530000000",
                "landline" => "143700",
                "mobile" => "8564000"
            ],
            [
                "code" => "265",
                "country" => "Malawi",
                "gdp" => "3683000000",
                "landline" => "227300",
                "mobile" => "4420000"
            ],
            [
                "code" => "60",
                "country" => "Malaysia",
                "gdp" => "312400000000",
                "landline" => "4589000",
                "mobile" => "41325000"
            ],
            [
                "code" => "960",
                "country" => "Maldives",
                "gdp" => "2270000000",
                "landline" => "23140",
                "mobile" => "560000"
            ],
            [
                "code" => "223",
                "country" => "Mali",
                "gdp" => "11370000000",
                "landline" => "112000",
                "mobile" => "14613000"
            ],
            [
                "code" => "356",
                "country" => "Malta",
                "gdp" => "9541000000",
                "landline" => "229700",
                "mobile" => "539500"
            ],
            [
                "code" => "692",
                "country" => "Marshall Islands",
                "gdp" => "193000000",
                "landline" => "4400",
                "mobile" => "3800"
            ],
            [
                "code" => "222",
                "country" => "Mauritania",
                "gdp" => "4183000000",
                "landline" => "65100",
                "mobile" => "4024000"
            ],
            [
                "code" => "230",
                "country" => "Mauritius",
                "gdp" => "11900000000",
                "landline" => "349100",
                "mobile" => "1485000"
            ],
            [
                "code" => "262",
                "country" => "Mayotte",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "52",
                "country" => "Mexico",
                "gdp" => "1327000000000",
                "landline" => "20220000",
                "mobile" => "100786000"
            ],
            [
                "code" => "691",
                "country" => "Micronesia",
                "gdp" => "339000000",
                "landline" => "8400",
                "mobile" => "27600"
            ],
            [
                "code" => "373",
                "country" => "Moldova",
                "gdp" => "7932000000",
                "landline" => "1206000",
                "mobile" => "4080000"
            ],
            [
                "code" => "377",
                "country" => "Monaco",
                "gdp" => "5748000000",
                "landline" => "44500",
                "mobile" => "33200"
            ],
            [
                "code" => "976",
                "country" => "Mongolia",
                "gdp" => "11140000000",
                "landline" => "176700",
                "mobile" => "3375000"
            ],
            [
                "code" => "382",
                "country" => "Montenegro",
                "gdp" => "4518000000",
                "landline" => "163000",
                "mobile" => "1126000"
            ],
            [
                "code" => "1-664",
                "country" => "Montserrat",
                "gdp" => "",
                "landline" => "3000",
                "mobile" => "4000"
            ],
            [
                "code" => "212",
                "country" => "Morocco",
                "gdp" => "104800000000",
                "landline" => "3280000",
                "mobile" => "39016000"
            ],
            [
                "code" => "258",
                "country" => "Mozambique",
                "gdp" => "14670000000",
                "landline" => "88100",
                "mobile" => "8108000"
            ],
            [
                "code" => "95",
                "country" => "Myanmar",
                "gdp" => "59430000000",
                "landline" => "556000",
                "mobile" => "5440000"
            ],
            [
                "code" => "264",
                "country" => "Namibia",
                "gdp" => "12300000000",
                "landline" => "171000",
                "mobile" => "2435000"
            ],
            [
                "code" => "674",
                "country" => "Nauru",
                "gdp" => "",
                "landline" => "1900",
                "mobile" => "6800"
            ],
            [
                "code" => "977",
                "country" => "Nepal",
                "gdp" => "19340000000",
                "landline" => "834000",
                "mobile" => "18138000"
            ],
            [
                "code" => "31",
                "country" => "Netherlands",
                "gdp" => "722300000000",
                "landline" => "7086000",
                "mobile" => "19643000"
            ],
            [
                "code" => "599",
                "country" => "Netherlands Antilles",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "687",
                "country" => "New Caledonia",
                "gdp" => "9280000000",
                "landline" => "80000",
                "mobile" => "231000"
            ],
            [
                "code" => "64",
                "country" => "New Zealand",
                "gdp" => "181100000000",
                "landline" => "1880000",
                "mobile" => "4922000"
            ],
            [
                "code" => "505",
                "country" => "Nicaragua",
                "gdp" => "11260000000",
                "landline" => "320000",
                "mobile" => "5346000"
            ],
            [
                "code" => "227",
                "country" => "Niger",
                "gdp" => "7304000000",
                "landline" => "100500",
                "mobile" => "5400000"
            ],
            [
                "code" => "234",
                "country" => "Nigeria",
                "gdp" => "502000000000",
                "landline" => "418200",
                "mobile" => "112780000"
            ],
            [
                "code" => "683",
                "country" => "Niue",
                "gdp" => "10010000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "850",
                "country" => "North Korea",
                "gdp" => "28000000000",
                "landline" => "1180000",
                "mobile" => "1700000"
            ],
            [
                "code" => "1-670",
                "country" => "Northern Mariana Islands",
                "gdp" => "733000000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "47",
                "country" => "Norway",
                "gdp" => "515800000000",
                "landline" => "1465000",
                "mobile" => "5732000"
            ],
            [
                "code" => "968",
                "country" => "Oman",
                "gdp" => "81950000000",
                "landline" => "305000",
                "mobile" => "5278000"
            ],
            [
                "code" => "92",
                "country" => "Pakistan",
                "gdp" => "236500000000",
                "landline" => "5803000",
                "mobile" => "125000000"
            ],
            [
                "code" => "680",
                "country" => "Palau",
                "gdp" => "221000000",
                "landline" => "7300",
                "mobile" => "17150"
            ],
            [
                "code" => "970",
                "country" => "Palestine",
                "gdp" => "6641000000",
                "landline" => "406000",
                "mobile" => "3041000"
            ],
            [
                "code" => "507",
                "country" => "Panama",
                "gdp" => "40620000000",
                "landline" => "640000",
                "mobile" => "6770000"
            ],
            [
                "code" => "675",
                "country" => "Papua New Guinea",
                "gdp" => "16100000000",
                "landline" => "139000",
                "mobile" => "2709000"
            ],
            [
                "code" => "595",
                "country" => "Paraguay",
                "gdp" => "30560000000",
                "landline" => "376000",
                "mobile" => "6790000"
            ],
            [
                "code" => "51",
                "country" => "Peru",
                "gdp" => "210300000000",
                "landline" => "3420000",
                "mobile" => "29400000"
            ],
            [
                "code" => "63",
                "country" => "Philippines",
                "gdp" => "272200000000",
                "landline" => "3939000",
                "mobile" => "103000000"
            ],
            [
                "code" => "64",
                "country" => "Pitcairn",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "48",
                "country" => "Poland",
                "gdp" => "513900000000",
                "landline" => "6125000",
                "mobile" => "50840000"
            ],
            [
                "code" => "351",
                "country" => "Portugal",
                "gdp" => "219300000000",
                "landline" => "4558000",
                "mobile" => "12312000"
            ],
            [
                "code" => "1-787, 1-939",
                "country" => "Puerto Rico",
                "gdp" => "93520000000",
                "landline" => "780200",
                "mobile" => "3060000"
            ],
            [
                "code" => "974",
                "country" => "Qatar",
                "gdp" => "213100000000",
                "landline" => "327000",
                "mobile" => "2600000"
            ],
            [
                "code" => "242",
                "country" => "Republic of the Congo",
                "gdp" => "14250000000",
                "landline" => "14900",
                "mobile" => "4283000"
            ],
            [
                "code" => "262",
                "country" => "Reunion",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "40",
                "country" => "Romania",
                "gdp" => "188900000000",
                "landline" => "4680000",
                "mobile" => "22700000"
            ],
            [
                "code" => "7",
                "country" => "Russia",
                "gdp" => "2113000000000",
                "landline" => "42900000",
                "mobile" => "261900000"
            ],
            [
                "code" => "250",
                "country" => "Rwanda",
                "gdp" => "7700000000",
                "landline" => "44400",
                "mobile" => "5690000"
            ],
            [
                "code" => "590",
                "country" => "Saint Barthelemy",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "290",
                "country" => "Saint Helena",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "1-869",
                "country" => "Saint Kitts and Nevis",
                "gdp" => "767000000",
                "landline" => "20000",
                "mobile" => "84000"
            ],
            [
                "code" => "1-758",
                "country" => "Saint Lucia",
                "gdp" => "1377000000",
                "landline" => "36800",
                "mobile" => "227000"
            ],
            [
                "code" => "590",
                "country" => "Saint Martin",
                "gdp" => "561500000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "508",
                "country" => "Saint Pierre and Miquelon",
                "gdp" => "215300000",
                "landline" => "4800",
                "mobile" => ""
            ],
            [
                "code" => "1-784",
                "country" => "Saint Vincent and the Grenadines",
                "gdp" => "742000000",
                "landline" => "19400",
                "mobile" => "135500"
            ],
            [
                "code" => "685",
                "country" => "Samoa",
                "gdp" => "705000000",
                "landline" => "35300",
                "mobile" => "167400"
            ],
            [
                "code" => "378",
                "country" => "San Marino",
                "gdp" => "1866000000",
                "landline" => "18700",
                "mobile" => "36000"
            ],
            [
                "code" => "239",
                "country" => "Sao Tome and Principe",
                "gdp" => "311000000",
                "landline" => "8000",
                "mobile" => "122000"
            ],
            [
                "code" => "966",
                "country" => "Saudi Arabia",
                "gdp" => "718500000000",
                "landline" => "4800000",
                "mobile" => "53000000"
            ],
            [
                "code" => "221",
                "country" => "Senegal",
                "gdp" => "15360000000",
                "landline" => "338200",
                "mobile" => "11470000"
            ],
            [
                "code" => "381",
                "country" => "Serbia",
                "gdp" => "43680000000",
                "landline" => "2977000",
                "mobile" => "9138000"
            ],
            [
                "code" => "248",
                "country" => "Seychelles",
                "gdp" => "1271000000",
                "landline" => "28900",
                "mobile" => "138300"
            ],
            [
                "code" => "232",
                "country" => "Sierra Leone",
                "gdp" => "4607000000",
                "landline" => "18000",
                "mobile" => "2210000"
            ],
            [
                "code" => "65",
                "country" => "Singapore",
                "gdp" => "295700000000",
                "landline" => "1990000",
                "mobile" => "8063000"
            ],
            [
                "code" => "1-721",
                "country" => "Sint Maarten",
                "gdp" => "794700000",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "421",
                "country" => "Slovakia",
                "gdp" => "96960000000",
                "landline" => "975000",
                "mobile" => "6095000"
            ],
            [
                "code" => "386",
                "country" => "Slovenia",
                "gdp" => "46820000000",
                "landline" => "825000",
                "mobile" => "2246000"
            ],
            [
                "code" => "677",
                "country" => "Solomon Islands",
                "gdp" => "1099000000",
                "landline" => "8060",
                "mobile" => "302100"
            ],
            [
                "code" => "252",
                "country" => "Somalia",
                "gdp" => "2372000000",
                "landline" => "100000",
                "mobile" => "658000"
            ],
            [
                "code" => "27",
                "country" => "South Africa",
                "gdp" => "353900000000",
                "landline" => "4030000",
                "mobile" => "68400000"
            ],
            [
                "code" => "82",
                "country" => "South Korea",
                "gdp" => "1198000000000",
                "landline" => "30100000",
                "mobile" => "53625000"
            ],
            [
                "code" => "211",
                "country" => "South Sudan",
                "gdp" => "11770000000",
                "landline" => "2200",
                "mobile" => "2000000"
            ],
            [
                "code" => "34",
                "country" => "Spain",
                "gdp" => "1356000000000",
                "landline" => "19220000",
                "mobile" => "50663000"
            ],
            [
                "code" => "94",
                "country" => "Sri Lanka",
                "gdp" => "65120000000",
                "landline" => "2796000",
                "mobile" => "19533000"
            ],
            [
                "code" => "249",
                "country" => "Sudan",
                "gdp" => "52500000000",
                "landline" => "425000",
                "mobile" => "27659000"
            ],
            [
                "code" => "597",
                "country" => "Suriname",
                "gdp" => "5009000000",
                "landline" => "83000",
                "mobile" => "977000"
            ],
            [
                "code" => "47",
                "country" => "Svalbard and Jan Mayen",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "268",
                "country" => "Swaziland",
                "gdp" => "3807000000",
                "landline" => "48600",
                "mobile" => "805000"
            ],
            [
                "code" => "46",
                "country" => "Sweden",
                "gdp" => "552000000000",
                "landline" => "4321000",
                "mobile" => "11643000"
            ],
            [
                "code" => "41",
                "country" => "Switzerland",
                "gdp" => "646200000000",
                "landline" => "4382000",
                "mobile" => "10460000"
            ],
            [
                "code" => "963",
                "country" => "Syria",
                "gdp" => "64700000000",
                "landline" => "4425000",
                "mobile" => "12928000"
            ],
            [
                "code" => "886",
                "country" => "Taiwan",
                "gdp" => "484700000000",
                "landline" => "15998000",
                "mobile" => "29455000"
            ],
            [
                "code" => "992",
                "country" => "Tajikistan",
                "gdp" => "8513000000",
                "landline" => "393000",
                "mobile" => "6528000"
            ],
            [
                "code" => "255",
                "country" => "Tanzania",
                "gdp" => "31940000000",
                "landline" => "161100",
                "mobile" => "27220000"
            ],
            [
                "code" => "66",
                "country" => "Thailand",
                "gdp" => "400900000000",
                "landline" => "6391000",
                "mobile" => "84075000"
            ],
            [
                "code" => "228",
                "country" => "Togo",
                "gdp" => "4299000000",
                "landline" => "225000",
                "mobile" => "3518000"
            ],
            [
                "code" => "690",
                "country" => "Tokelau",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "676",
                "country" => "Tonga",
                "gdp" => "477000000",
                "landline" => "30000",
                "mobile" => "56000"
            ],
            [
                "code" => "1-868",
                "country" => "Trinidad and Tobago",
                "gdp" => "27130000000",
                "landline" => "287000",
                "mobile" => "1884000"
            ],
            [
                "code" => "216",
                "country" => "Tunisia",
                "gdp" => "48380000000",
                "landline" => "1105000",
                "mobile" => "12840000"
            ],
            [
                "code" => "90",
                "country" => "Turkey",
                "gdp" => "821800000000",
                "landline" => "13860000",
                "mobile" => "67680000"
            ],
            [
                "code" => "993",
                "country" => "Turkmenistan",
                "gdp" => "40560000000",
                "landline" => "575000",
                "mobile" => "3953000"
            ],
            [
                "code" => "1-649",
                "country" => "Turks and Caicos Islands",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "688",
                "country" => "Tuvalu",
                "gdp" => "38000000",
                "landline" => "1450",
                "mobile" => "2800"
            ],
            [
                "code" => "1-340",
                "country" => "U.S. Virgin Islands",
                "gdp" => "",
                "landline" => "75800",
                "mobile" => "80300"
            ],
            [
                "code" => "256",
                "country" => "Uganda",
                "gdp" => "22600000000",
                "landline" => "315000",
                "mobile" => "16355000"
            ],
            [
                "code" => "380",
                "country" => "Ukraine",
                "gdp" => "175500000000",
                "landline" => "12182000",
                "mobile" => "59344000"
            ],
            [
                "code" => "971",
                "country" => "United Arab Emirates",
                "gdp" => "390000000000",
                "landline" => "1967000",
                "mobile" => "13775000"
            ],
            [
                "code" => "44",
                "country" => "United Kingdom",
                "gdp" => "2490000000000",
                "landline" => "33010000",
                "mobile" => "82109000"
            ],
            [
                "code" => "1",
                "country" => "United States",
                "gdp" => "16720000000000",
                "landline" => "139000000",
                "mobile" => "310000000"
            ],
            [
                "code" => "598",
                "country" => "Uruguay",
                "gdp" => "57110000000",
                "landline" => "1010000",
                "mobile" => "5000000"
            ],
            [
                "code" => "998",
                "country" => "Uzbekistan",
                "gdp" => "55180000000",
                "landline" => "1963000",
                "mobile" => "20274000"
            ],
            [
                "code" => "678",
                "country" => "Vanuatu",
                "gdp" => "828000000",
                "landline" => "5800",
                "mobile" => "137000"
            ],
            [
                "code" => "379",
                "country" => "Vatican",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "58",
                "country" => "Venezuela",
                "gdp" => "367500000000",
                "landline" => "7650000",
                "mobile" => "30520000"
            ],
            [
                "code" => "84",
                "country" => "Vietnam",
                "gdp" => "170000000000",
                "landline" => "10191000",
                "mobile" => "134066000"
            ],
            [
                "code" => "681",
                "country" => "Wallis and Futuna",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "212",
                "country" => "Western Sahara",
                "gdp" => "",
                "landline" => "",
                "mobile" => ""
            ],
            [
                "code" => "967",
                "country" => "Yemen",
                "gdp" => "43890000000",
                "landline" => "1100000",
                "mobile" => "13900000"
            ],
            [
                "code" => "260",
                "country" => "Zambia",
                "gdp" => "22240000000",
                "landline" => "82500",
                "mobile" => "10525000"
            ],
            [
                "code" => "263",
                "country" => "Zimbabwe",
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
            $country = Country::where('name', $countryName)->first();

            if(is_null($country))
                throw new \Exception("unable to find country: $countryName", 1);

            $phone['country'] = $country->id; 

            $this->command->info('Inserted phone from' . $phone['code'] . ' [' . count($phone) . ']..');
            PhoneArea::create($phone);
        }
        Schema::enableForeignKeyConstraints();

    }
}
