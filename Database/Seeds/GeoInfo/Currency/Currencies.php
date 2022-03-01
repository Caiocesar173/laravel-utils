<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\Country;
use Caiocesar173\Utils\Entities\Currency;


class Currencies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::disableQueryLog();

        $currencies = [
            [
                "code" => 1,
                "country" => "AF",
                "currency_symbol" => "؋",
                "name" => "AFN",
                "tld" => ".af"
            ],
            [
                "code" => 2,
                "country" => "AX",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".ax"
            ],
            [
                "code" => 3,
                "country" => "AL",
                "currency_symbol" => "Lek",
                "name" => "ALL",
                "tld" => ".al"
            ],
            [
                "code" => 4,
                "country" => "DZ",
                "currency_symbol" => "دج",
                "name" => "DZD",
                "tld" => ".dz"
            ],
            [
                "code" => 5,
                "country" => "AS",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".as"
            ],
            [
                "code" => 6,
                "country" => "AD",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".ad"
            ],
            [
                "code" => 7,
                "country" => "AO",
                "currency_symbol" => "Kz",
                "name" => "AOA",
                "tld" => ".ao"
            ],
            [
                "code" => 8,
                "country" => "AI",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".ai"
            ],
            [
                "code" => 9,
                "country" => "AQ",
                "currency_symbol" => "$",
                "name" => "AAD",
                "tld" => ".aq"
            ],
            [
                "code" => 10,
                "country" => "AG",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".ag"
            ],
            [
                "code" => 11,
                "country" => "AR",
                "currency_symbol" => "$",
                "name" => "ARS",
                "tld" => ".ar"
            ],
            [
                "code" => 12,
                "country" => "AM",
                "currency_symbol" => "֏",
                "name" => "AMD",
                "tld" => ".am"
            ],
            [
                "code" => 13,
                "country" => "AW",
                "currency_symbol" => "ƒ",
                "name" => "AWG",
                "tld" => ".aw"
            ],
            [
                "code" => 14,
                "country" => "AU",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".au"
            ],
            [
                "code" => 15,
                "country" => "AT",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".at"
            ],
            [
                "code" => 16,
                "country" => "AZ",
                "currency_symbol" => "m",
                "name" => "AZN",
                "tld" => ".az"
            ],
            [
                "code" => 17,
                "country" => "BS",
                "currency_symbol" => "B$",
                "name" => "BSD",
                "tld" => ".bs"
            ],
            [
                "code" => 18,
                "country" => "BH",
                "currency_symbol" => ".د.ب",
                "name" => "BHD",
                "tld" => ".bh"
            ],
            [
                "code" => 19,
                "country" => "BD",
                "currency_symbol" => "৳",
                "name" => "BDT",
                "tld" => ".bd"
            ],
            [
                "code" => 20,
                "country" => "BB",
                "currency_symbol" => "Bds$",
                "name" => "BBD",
                "tld" => ".bb"
            ],
            [
                "code" => 21,
                "country" => "BY",
                "currency_symbol" => "Br",
                "name" => "BYN",
                "tld" => ".by"
            ],
            [
                "code" => 22,
                "country" => "BE",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".be"
            ],
            [
                "code" => 23,
                "country" => "BZ",
                "currency_symbol" => "$",
                "name" => "BZD",
                "tld" => ".bz"
            ],
            [
                "code" => 24,
                "country" => "BJ",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".bj"
            ],
            [
                "code" => 25,
                "country" => "BM",
                "currency_symbol" => "$",
                "name" => "BMD",
                "tld" => ".bm"
            ],
            [
                "code" => 26,
                "country" => "BT",
                "currency_symbol" => "Nu.",
                "name" => "BTN",
                "tld" => ".bt"
            ],
            [
                "code" => 27,
                "country" => "BO",
                "currency_symbol" => "Bs.",
                "name" => "BOB",
                "tld" => ".bo"
            ],
            [
                "code" => 155,
                "country" => "BQ",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".an"
            ],
            [
                "code" => 28,
                "country" => "BA",
                "currency_symbol" => "KM",
                "name" => "BAM",
                "tld" => ".ba"
            ],
            [
                "code" => 29,
                "country" => "BW",
                "currency_symbol" => "P",
                "name" => "BWP",
                "tld" => ".bw"
            ],
            [
                "code" => 30,
                "country" => "BV",
                "currency_symbol" => "kr",
                "name" => "NOK",
                "tld" => ".bv"
            ],
            [
                "code" => 31,
                "country" => "BR",
                "currency_symbol" => "R$",
                "name" => "BRL",
                "tld" => ".br"
            ],
            [
                "code" => 32,
                "country" => "IO",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".io"
            ],
            [
                "code" => 33,
                "country" => "BN",
                "currency_symbol" => "B$",
                "name" => "BND",
                "tld" => ".bn"
            ],
            [
                "code" => 34,
                "country" => "BG",
                "currency_symbol" => "Лв.",
                "name" => "BGN",
                "tld" => ".bg"
            ],
            [
                "code" => 35,
                "country" => "BF",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".bf"
            ],
            [
                "code" => 36,
                "country" => "BI",
                "currency_symbol" => "FBu",
                "name" => "BIF",
                "tld" => ".bi"
            ],
            [
                "code" => 37,
                "country" => "KH",
                "currency_symbol" => "KHR",
                "name" => "KHR",
                "tld" => ".kh"
            ],
            [
                "code" => 38,
                "country" => "CM",
                "currency_symbol" => "FCFA",
                "name" => "XAF",
                "tld" => ".cm"
            ],
            [
                "code" => 39,
                "country" => "CA",
                "currency_symbol" => "$",
                "name" => "CAD",
                "tld" => ".ca"
            ],
            [
                "code" => 40,
                "country" => "CV",
                "currency_symbol" => "$",
                "name" => "CVE",
                "tld" => ".cv"
            ],
            [
                "code" => 41,
                "country" => "KY",
                "currency_symbol" => "$",
                "name" => "KYD",
                "tld" => ".ky"
            ],
            [
                "code" => 42,
                "country" => "CF",
                "currency_symbol" => "FCFA",
                "name" => "XAF",
                "tld" => ".cf"
            ],
            [
                "code" => 43,
                "country" => "TD",
                "currency_symbol" => "FCFA",
                "name" => "XAF",
                "tld" => ".td"
            ],
            [
                "code" => 44,
                "country" => "CL",
                "currency_symbol" => "$",
                "name" => "CLP",
                "tld" => ".cl"
            ],
            [
                "code" => 45,
                "country" => "CN",
                "currency_symbol" => "¥",
                "name" => "CNY",
                "tld" => ".cn"
            ],
            [
                "code" => 46,
                "country" => "CX",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".cx"
            ],
            [
                "code" => 47,
                "country" => "CC",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".cc"
            ],
            [
                "code" => 48,
                "country" => "CO",
                "currency_symbol" => "$",
                "name" => "COP",
                "tld" => ".co"
            ],
            [
                "code" => 49,
                "country" => "KM",
                "currency_symbol" => "CF",
                "name" => "KMF",
                "tld" => ".km"
            ],
            [
                "code" => 50,
                "country" => "CG",
                "currency_symbol" => "FC",
                "name" => "XAF",
                "tld" => ".cg"
            ],
            [
                "code" => 52,
                "country" => "CK",
                "currency_symbol" => "$",
                "name" => "NZD",
                "tld" => ".ck"
            ],
            [
                "code" => 53,
                "country" => "CR",
                "currency_symbol" => "₡",
                "name" => "CRC",
                "tld" => ".cr"
            ],
            [
                "code" => 54,
                "country" => "CI",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".ci"
            ],
            [
                "code" => 55,
                "country" => "HR",
                "currency_symbol" => "kn",
                "name" => "HRK",
                "tld" => ".hr"
            ],
            [
                "code" => 56,
                "country" => "CU",
                "currency_symbol" => "$",
                "name" => "CUP",
                "tld" => ".cu"
            ],
            [
                "code" => 249,
                "country" => "CW",
                "currency_symbol" => "ƒ",
                "name" => "ANG",
                "tld" => ".cw"
            ],
            [
                "code" => 57,
                "country" => "CY",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".cy"
            ],
            [
                "code" => 58,
                "country" => "CZ",
                "currency_symbol" => "Kč",
                "name" => "CZK",
                "tld" => ".cz"
            ],
            [
                "code" => 51,
                "country" => "CD",
                "currency_symbol" => "FC",
                "name" => "CDF",
                "tld" => ".cd"
            ],
            [
                "code" => 59,
                "country" => "DK",
                "currency_symbol" => "Kr.",
                "name" => "DKK",
                "tld" => ".dk"
            ],
            [
                "code" => 60,
                "country" => "DJ",
                "currency_symbol" => "Fdj",
                "name" => "DJF",
                "tld" => ".dj"
            ],
            [
                "code" => 61,
                "country" => "DM",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".dm"
            ],
            [
                "code" => 62,
                "country" => "DO",
                "currency_symbol" => "$",
                "name" => "DOP",
                "tld" => ".do"
            ],
            [
                "code" => 63,
                "country" => "TL",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".tl"
            ],
            [
                "code" => 64,
                "country" => "EC",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".ec"
            ],
            [
                "code" => 65,
                "country" => "EG",
                "currency_symbol" => "ج.م",
                "name" => "EGP",
                "tld" => ".eg"
            ],
            [
                "code" => 66,
                "country" => "SV",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".sv"
            ],
            [
                "code" => 67,
                "country" => "GQ",
                "currency_symbol" => "FCFA",
                "name" => "XAF",
                "tld" => ".gq"
            ],
            [
                "code" => 68,
                "country" => "ER",
                "currency_symbol" => "Nfk",
                "name" => "ERN",
                "tld" => ".er"
            ],
            [
                "code" => 69,
                "country" => "EE",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".ee"
            ],
            [
                "code" => 70,
                "country" => "ET",
                "currency_symbol" => "Nkf",
                "name" => "ETB",
                "tld" => ".et"
            ],
            [
                "code" => 71,
                "country" => "FK",
                "currency_symbol" => "£",
                "name" => "FKP",
                "tld" => ".fk"
            ],
            [
                "code" => 72,
                "country" => "FO",
                "currency_symbol" => "Kr.",
                "name" => "DKK",
                "tld" => ".fo"
            ],
            [
                "code" => 73,
                "country" => "FJ",
                "currency_symbol" => "FJ$",
                "name" => "FJD",
                "tld" => ".fj"
            ],
            [
                "code" => 74,
                "country" => "FI",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".fi"
            ],
            [
                "code" => 75,
                "country" => "FR",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".fr"
            ],
            [
                "code" => 76,
                "country" => "GF",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".gf"
            ],
            [
                "code" => 77,
                "country" => "PF",
                "currency_symbol" => "₣",
                "name" => "XPF",
                "tld" => ".pf"
            ],
            [
                "code" => 78,
                "country" => "TF",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".tf"
            ],
            [
                "code" => 79,
                "country" => "GA",
                "currency_symbol" => "FCFA",
                "name" => "XAF",
                "tld" => ".ga"
            ],
            [
                "code" => 80,
                "country" => "GM",
                "currency_symbol" => "D",
                "name" => "GMD",
                "tld" => ".gm"
            ],
            [
                "code" => 81,
                "country" => "GE",
                "currency_symbol" => "ლ",
                "name" => "GEL",
                "tld" => ".ge"
            ],
            [
                "code" => 82,
                "country" => "DE",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".de"
            ],
            [
                "code" => 83,
                "country" => "GH",
                "currency_symbol" => "GH₵",
                "name" => "GHS",
                "tld" => ".gh"
            ],
            [
                "code" => 84,
                "country" => "GI",
                "currency_symbol" => "£",
                "name" => "GIP",
                "tld" => ".gi"
            ],
            [
                "code" => 85,
                "country" => "GR",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".gr"
            ],
            [
                "code" => 86,
                "country" => "GL",
                "currency_symbol" => "Kr.",
                "name" => "DKK",
                "tld" => ".gl"
            ],
            [
                "code" => 87,
                "country" => "GD",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".gd"
            ],
            [
                "code" => 88,
                "country" => "GP",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".gp"
            ],
            [
                "code" => 89,
                "country" => "GU",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".gu"
            ],
            [
                "code" => 90,
                "country" => "GT",
                "currency_symbol" => "Q",
                "name" => "GTQ",
                "tld" => ".gt"
            ],
            [
                "code" => 91,
                "country" => "GG",
                "currency_symbol" => "£",
                "name" => "GBP",
                "tld" => ".gg"
            ],
            [
                "code" => 92,
                "country" => "GN",
                "currency_symbol" => "FG",
                "name" => "GNF",
                "tld" => ".gn"
            ],
            [
                "code" => 93,
                "country" => "GW",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".gw"
            ],
            [
                "code" => 94,
                "country" => "GY",
                "currency_symbol" => "$",
                "name" => "GYD",
                "tld" => ".gy"
            ],
            [
                "code" => 95,
                "country" => "HT",
                "currency_symbol" => "G",
                "name" => "HTG",
                "tld" => ".ht"
            ],
            [
                "code" => 96,
                "country" => "HM",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".hm"
            ],
            [
                "code" => 97,
                "country" => "HN",
                "currency_symbol" => "L",
                "name" => "HNL",
                "tld" => ".hn"
            ],
            [
                "code" => 98,
                "country" => "HK",
                "currency_symbol" => "$",
                "name" => "HKD",
                "tld" => ".hk"
            ],
            [
                "code" => 99,
                "country" => "HU",
                "currency_symbol" => "Ft",
                "name" => "HUF",
                "tld" => ".hu"
            ],
            [
                "code" => 100,
                "country" => "IS",
                "currency_symbol" => "kr",
                "name" => "ISK",
                "tld" => ".is"
            ],
            [
                "code" => 101,
                "country" => "IN",
                "currency_symbol" => "₹",
                "name" => "INR",
                "tld" => ".in"
            ],
            [
                "code" => 102,
                "country" => "ID",
                "currency_symbol" => "Rp",
                "name" => "IDR",
                "tld" => ".id"
            ],
            [
                "code" => 103,
                "country" => "IR",
                "currency_symbol" => "﷼",
                "name" => "IRR",
                "tld" => ".ir"
            ],
            [
                "code" => 104,
                "country" => "IQ",
                "currency_symbol" => "د.ع",
                "name" => "IQD",
                "tld" => ".iq"
            ],
            [
                "code" => 105,
                "country" => "IE",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".ie"
            ],
            [
                "code" => 106,
                "country" => "IL",
                "currency_symbol" => "₪",
                "name" => "ILS",
                "tld" => ".il"
            ],
            [
                "code" => 107,
                "country" => "IT",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".it"
            ],
            [
                "code" => 108,
                "country" => "JM",
                "currency_symbol" => "J$",
                "name" => "JMD",
                "tld" => ".jm"
            ],
            [
                "code" => 109,
                "country" => "JP",
                "currency_symbol" => "¥",
                "name" => "JPY",
                "tld" => ".jp"
            ],
            [
                "code" => 110,
                "country" => "JE",
                "currency_symbol" => "£",
                "name" => "GBP",
                "tld" => ".je"
            ],
            [
                "code" => 111,
                "country" => "JO",
                "currency_symbol" => "ا.د",
                "name" => "JOD",
                "tld" => ".jo"
            ],
            [
                "code" => 112,
                "country" => "KZ",
                "currency_symbol" => "лв",
                "name" => "KZT",
                "tld" => ".kz"
            ],
            [
                "code" => 113,
                "country" => "KE",
                "currency_symbol" => "KSh",
                "name" => "KES",
                "tld" => ".ke"
            ],
            [
                "code" => 114,
                "country" => "KI",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".ki"
            ],
            [
                "code" => 248,
                "country" => "XK",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".xk"
            ],
            [
                "code" => 117,
                "country" => "KW",
                "currency_symbol" => "ك.د",
                "name" => "KWD",
                "tld" => ".kw"
            ],
            [
                "code" => 118,
                "country" => "KG",
                "currency_symbol" => "лв",
                "name" => "KGS",
                "tld" => ".kg"
            ],
            [
                "code" => 119,
                "country" => "LA",
                "currency_symbol" => "₭",
                "name" => "LAK",
                "tld" => ".la"
            ],
            [
                "code" => 120,
                "country" => "LV",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".lv"
            ],
            [
                "code" => 121,
                "country" => "LB",
                "currency_symbol" => "£",
                "name" => "LBP",
                "tld" => ".lb"
            ],
            [
                "code" => 122,
                "country" => "LS",
                "currency_symbol" => "L",
                "name" => "LSL",
                "tld" => ".ls"
            ],
            [
                "code" => 123,
                "country" => "LR",
                "currency_symbol" => "$",
                "name" => "LRD",
                "tld" => ".lr"
            ],
            [
                "code" => 124,
                "country" => "LY",
                "currency_symbol" => "د.ل",
                "name" => "LYD",
                "tld" => ".ly"
            ],
            [
                "code" => 125,
                "country" => "LI",
                "currency_symbol" => "CHf",
                "name" => "CHF",
                "tld" => ".li"
            ],
            [
                "code" => 126,
                "country" => "LT",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".lt"
            ],
            [
                "code" => 127,
                "country" => "LU",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".lu"
            ],
            [
                "code" => 128,
                "country" => "MO",
                "currency_symbol" => "$",
                "name" => "MOP",
                "tld" => ".mo"
            ],
            [
                "code" => 129,
                "country" => "MK",
                "currency_symbol" => "ден",
                "name" => "MKD",
                "tld" => ".mk"
            ],
            [
                "code" => 130,
                "country" => "MG",
                "currency_symbol" => "Ar",
                "name" => "MGA",
                "tld" => ".mg"
            ],
            [
                "code" => 131,
                "country" => "MW",
                "currency_symbol" => "MK",
                "name" => "MWK",
                "tld" => ".mw"
            ],
            [
                "code" => 132,
                "country" => "MY",
                "currency_symbol" => "RM",
                "name" => "MYR",
                "tld" => ".my"
            ],
            [
                "code" => 133,
                "country" => "MV",
                "currency_symbol" => "Rf",
                "name" => "MVR",
                "tld" => ".mv"
            ],
            [
                "code" => 134,
                "country" => "ML",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".ml"
            ],
            [
                "code" => 135,
                "country" => "MT",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".mt"
            ],
            [
                "code" => 136,
                "country" => "IM",
                "currency_symbol" => "£",
                "name" => "GBP",
                "tld" => ".im"
            ],
            [
                "code" => 137,
                "country" => "MH",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".mh"
            ],
            [
                "code" => 138,
                "country" => "MQ",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".mq"
            ],
            [
                "code" => 139,
                "country" => "MR",
                "currency_symbol" => "MRU",
                "name" => "MRO",
                "tld" => ".mr"
            ],
            [
                "code" => 140,
                "country" => "MU",
                "currency_symbol" => "₨",
                "name" => "MUR",
                "tld" => ".mu"
            ],
            [
                "code" => 141,
                "country" => "YT",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".yt"
            ],
            [
                "code" => 142,
                "country" => "MX",
                "currency_symbol" => "$",
                "name" => "MXN",
                "tld" => ".mx"
            ],
            [
                "code" => 143,
                "country" => "FM",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".fm"
            ],
            [
                "code" => 144,
                "country" => "MD",
                "currency_symbol" => "L",
                "name" => "MDL",
                "tld" => ".md"
            ],
            [
                "code" => 145,
                "country" => "MC",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".mc"
            ],
            [
                "code" => 146,
                "country" => "MN",
                "currency_symbol" => "₮",
                "name" => "MNT",
                "tld" => ".mn"
            ],
            [
                "code" => 147,
                "country" => "ME",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".me"
            ],
            [
                "code" => 148,
                "country" => "MS",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".ms"
            ],
            [
                "code" => 149,
                "country" => "MA",
                "currency_symbol" => "DH",
                "name" => "MAD",
                "tld" => ".ma"
            ],
            [
                "code" => 150,
                "country" => "MZ",
                "currency_symbol" => "MT",
                "name" => "MZN",
                "tld" => ".mz"
            ],
            [
                "code" => 151,
                "country" => "MM",
                "currency_symbol" => "K",
                "name" => "MMK",
                "tld" => ".mm"
            ],
            [
                "code" => 152,
                "country" => "NA",
                "currency_symbol" => "$",
                "name" => "NAD",
                "tld" => ".na"
            ],
            [
                "code" => 153,
                "country" => "NR",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".nr"
            ],
            [
                "code" => 154,
                "country" => "NP",
                "currency_symbol" => "₨",
                "name" => "NPR",
                "tld" => ".np"
            ],
            [
                "code" => 156,
                "country" => "NL",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".nl"
            ],
            [
                "code" => 157,
                "country" => "NC",
                "currency_symbol" => "₣",
                "name" => "XPF",
                "tld" => ".nc"
            ],
            [
                "code" => 158,
                "country" => "NZ",
                "currency_symbol" => "$",
                "name" => "NZD",
                "tld" => ".nz"
            ],
            [
                "code" => 159,
                "country" => "NI",
                "currency_symbol" => "C$",
                "name" => "NIO",
                "tld" => ".ni"
            ],
            [
                "code" => 160,
                "country" => "NE",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".ne"
            ],
            [
                "code" => 161,
                "country" => "NG",
                "currency_symbol" => "₦",
                "name" => "NGN",
                "tld" => ".ng"
            ],
            [
                "code" => 162,
                "country" => "NU",
                "currency_symbol" => "$",
                "name" => "NZD",
                "tld" => ".nu"
            ],
            [
                "code" => 163,
                "country" => "NF",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".nf"
            ],
            [
                "code" => 115,
                "country" => "KP",
                "currency_symbol" => "₩",
                "name" => "KPW",
                "tld" => ".kp"
            ],
            [
                "code" => 164,
                "country" => "MP",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".mp"
            ],
            [
                "code" => 165,
                "country" => "NO",
                "currency_symbol" => "kr",
                "name" => "NOK",
                "tld" => ".no"
            ],
            [
                "code" => 166,
                "country" => "OM",
                "currency_symbol" => ".ع.ر",
                "name" => "OMR",
                "tld" => ".om"
            ],
            [
                "code" => 167,
                "country" => "PK",
                "currency_symbol" => "₨",
                "name" => "PKR",
                "tld" => ".pk"
            ],
            [
                "code" => 168,
                "country" => "PW",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".pw"
            ],
            [
                "code" => 169,
                "country" => "PS",
                "currency_symbol" => "₪",
                "name" => "ILS",
                "tld" => ".ps"
            ],
            [
                "code" => 170,
                "country" => "PA",
                "currency_symbol" => "B/.",
                "name" => "PAB",
                "tld" => ".pa"
            ],
            [
                "code" => 171,
                "country" => "PG",
                "currency_symbol" => "K",
                "name" => "PGK",
                "tld" => ".pg"
            ],
            [
                "code" => 172,
                "country" => "PY",
                "currency_symbol" => "₲",
                "name" => "PYG",
                "tld" => ".py"
            ],
            [
                "code" => 173,
                "country" => "PE",
                "currency_symbol" => "S/.",
                "name" => "PEN",
                "tld" => ".pe"
            ],
            [
                "code" => 174,
                "country" => "PH",
                "currency_symbol" => "₱",
                "name" => "PHP",
                "tld" => ".ph"
            ],
            [
                "code" => 175,
                "country" => "PN",
                "currency_symbol" => "$",
                "name" => "NZD",
                "tld" => ".pn"
            ],
            [
                "code" => 176,
                "country" => "PL",
                "currency_symbol" => "zł",
                "name" => "PLN",
                "tld" => ".pl"
            ],
            [
                "code" => 177,
                "country" => "PT",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".pt"
            ],
            [
                "code" => 178,
                "country" => "PR",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".pr"
            ],
            [
                "code" => 179,
                "country" => "QA",
                "currency_symbol" => "ق.ر",
                "name" => "QAR",
                "tld" => ".qa"
            ],
            [
                "code" => 180,
                "country" => "RE",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".re"
            ],
            [
                "code" => 181,
                "country" => "RO",
                "currency_symbol" => "lei",
                "name" => "RON",
                "tld" => ".ro"
            ],
            [
                "code" => 182,
                "country" => "RU",
                "currency_symbol" => "₽",
                "name" => "RUB",
                "tld" => ".ru"
            ],
            [
                "code" => 183,
                "country" => "RW",
                "currency_symbol" => "FRw",
                "name" => "RWF",
                "tld" => ".rw"
            ],
            [
                "code" => 184,
                "country" => "SH",
                "currency_symbol" => "£",
                "name" => "SHP",
                "tld" => ".sh"
            ],
            [
                "code" => 185,
                "country" => "KN",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".kn"
            ],
            [
                "code" => 186,
                "country" => "LC",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".lc"
            ],
            [
                "code" => 187,
                "country" => "PM",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".pm"
            ],
            [
                "code" => 188,
                "country" => "VC",
                "currency_symbol" => "$",
                "name" => "XCD",
                "tld" => ".vc"
            ],
            [
                "code" => 189,
                "country" => "BL",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".bl"
            ],
            [
                "code" => 190,
                "country" => "MF",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".mf"
            ],
            [
                "code" => 191,
                "country" => "WS",
                "currency_symbol" => "SAT",
                "name" => "WST",
                "tld" => ".ws"
            ],
            [
                "code" => 192,
                "country" => "SM",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".sm"
            ],
            [
                "code" => 193,
                "country" => "ST",
                "currency_symbol" => "Db",
                "name" => "STD",
                "tld" => ".st"
            ],
            [
                "code" => 194,
                "country" => "SA",
                "currency_symbol" => "﷼",
                "name" => "SAR",
                "tld" => ".sa"
            ],
            [
                "code" => 195,
                "country" => "SN",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".sn"
            ],
            [
                "code" => 196,
                "country" => "RS",
                "currency_symbol" => "din",
                "name" => "RSD",
                "tld" => ".rs"
            ],
            [
                "code" => 197,
                "country" => "SC",
                "currency_symbol" => "SRe",
                "name" => "SCR",
                "tld" => ".sc"
            ],
            [
                "code" => 198,
                "country" => "SL",
                "currency_symbol" => "Le",
                "name" => "SLL",
                "tld" => ".sl"
            ],
            [
                "code" => 199,
                "country" => "SG",
                "currency_symbol" => "$",
                "name" => "SGD",
                "tld" => ".sg"
            ],
            [
                "code" => 250,
                "country" => "SX",
                "currency_symbol" => "ƒ",
                "name" => "ANG",
                "tld" => ".sx"
            ],
            [
                "code" => 200,
                "country" => "SK",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".sk"
            ],
            [
                "code" => 201,
                "country" => "SI",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".si"
            ],
            [
                "code" => 202,
                "country" => "SB",
                "currency_symbol" => "Si$",
                "name" => "SBD",
                "tld" => ".sb"
            ],
            [
                "code" => 203,
                "country" => "SO",
                "currency_symbol" => "Sh.so.",
                "name" => "SOS",
                "tld" => ".so"
            ],
            [
                "code" => 204,
                "country" => "ZA",
                "currency_symbol" => "R",
                "name" => "ZAR",
                "tld" => ".za"
            ],
            [
                "code" => 205,
                "country" => "GS",
                "currency_symbol" => "£",
                "name" => "GBP",
                "tld" => ".gs"
            ],
            [
                "code" => 116,
                "country" => "KR",
                "currency_symbol" => "₩",
                "name" => "KRW",
                "tld" => ".kr"
            ],
            [
                "code" => 206,
                "country" => "SS",
                "currency_symbol" => "£",
                "name" => "SSP",
                "tld" => ".ss"
            ],
            [
                "code" => 207,
                "country" => "ES",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".es"
            ],
            [
                "code" => 208,
                "country" => "LK",
                "currency_symbol" => "Rs",
                "name" => "LKR",
                "tld" => ".lk"
            ],
            [
                "code" => 209,
                "country" => "SD",
                "currency_symbol" => ".س.ج",
                "name" => "SDG",
                "tld" => ".sd"
            ],
            [
                "code" => 210,
                "country" => "SR",
                "currency_symbol" => "$",
                "name" => "SRD",
                "tld" => ".sr"
            ],
            [
                "code" => 211,
                "country" => "SJ",
                "currency_symbol" => "kr",
                "name" => "NOK",
                "tld" => ".sj"
            ],
            [
                "code" => 212,
                "country" => "SZ",
                "currency_symbol" => "E",
                "name" => "SZL",
                "tld" => ".sz"
            ],
            [
                "code" => 213,
                "country" => "SE",
                "currency_symbol" => "kr",
                "name" => "SEK",
                "tld" => ".se"
            ],
            [
                "code" => 214,
                "country" => "CH",
                "currency_symbol" => "CHf",
                "name" => "CHF",
                "tld" => ".ch"
            ],
            [
                "code" => 215,
                "country" => "SY",
                "currency_symbol" => "LS",
                "name" => "SYP",
                "tld" => ".sy"
            ],
            [
                "code" => 216,
                "country" => "TW",
                "currency_symbol" => "$",
                "name" => "TWD",
                "tld" => ".tw"
            ],
            [
                "code" => 217,
                "country" => "TJ",
                "currency_symbol" => "SM",
                "name" => "TJS",
                "tld" => ".tj"
            ],
            [
                "code" => 218,
                "country" => "TZ",
                "currency_symbol" => "TSh",
                "name" => "TZS",
                "tld" => ".tz"
            ],
            [
                "code" => 219,
                "country" => "TH",
                "currency_symbol" => "฿",
                "name" => "THB",
                "tld" => ".th"
            ],
            [
                "code" => 220,
                "country" => "TG",
                "currency_symbol" => "CFA",
                "name" => "XOF",
                "tld" => ".tg"
            ],
            [
                "code" => 221,
                "country" => "TK",
                "currency_symbol" => "$",
                "name" => "NZD",
                "tld" => ".tk"
            ],
            [
                "code" => 222,
                "country" => "TO",
                "currency_symbol" => "$",
                "name" => "TOP",
                "tld" => ".to"
            ],
            [
                "code" => 223,
                "country" => "TT",
                "currency_symbol" => "$",
                "name" => "TTD",
                "tld" => ".tt"
            ],
            [
                "code" => 224,
                "country" => "TN",
                "currency_symbol" => "ت.د",
                "name" => "TND",
                "tld" => ".tn"
            ],
            [
                "code" => 225,
                "country" => "TR",
                "currency_symbol" => "₺",
                "name" => "TRY",
                "tld" => ".tr"
            ],
            [
                "code" => 226,
                "country" => "TM",
                "currency_symbol" => "T",
                "name" => "TMT",
                "tld" => ".tm"
            ],
            [
                "code" => 227,
                "country" => "TC",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".tc"
            ],
            [
                "code" => 228,
                "country" => "TV",
                "currency_symbol" => "$",
                "name" => "AUD",
                "tld" => ".tv"
            ],
            [
                "code" => 229,
                "country" => "UG",
                "currency_symbol" => "USh",
                "name" => "UGX",
                "tld" => ".ug"
            ],
            [
                "code" => 230,
                "country" => "UA",
                "currency_symbol" => "₴",
                "name" => "UAH",
                "tld" => ".ua"
            ],
            [
                "code" => 231,
                "country" => "AE",
                "currency_symbol" => "إ.د",
                "name" => "AED",
                "tld" => ".ae"
            ],
            [
                "code" => 232,
                "country" => "GB",
                "currency_symbol" => "£",
                "name" => "GBP",
                "tld" => ".uk"
            ],
            [
                "code" => 233,
                "country" => "US",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".us"
            ],
            [
                "code" => 234,
                "country" => "UM",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".us"
            ],
            [
                "code" => 235,
                "country" => "UY",
                "currency_symbol" => "$",
                "name" => "UYU",
                "tld" => ".uy"
            ],
            [
                "code" => 236,
                "country" => "UZ",
                "currency_symbol" => "лв",
                "name" => "UZS",
                "tld" => ".uz"
            ],
            [
                "code" => 237,
                "country" => "VU",
                "currency_symbol" => "VT",
                "name" => "VUV",
                "tld" => ".vu"
            ],
            [
                "code" => 238,
                "country" => "VA",
                "currency_symbol" => "€",
                "name" => "EUR",
                "tld" => ".va"
            ],
            [
                "code" => 239,
                "country" => "VE",
                "currency_symbol" => "Bs",
                "name" => "VEF",
                "tld" => ".ve"
            ],
            [
                "code" => 240,
                "country" => "VN",
                "currency_symbol" => "₫",
                "name" => "VND",
                "tld" => ".vn"
            ],
            [
                "code" => 241,
                "country" => "VG",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".vg"
            ],
            [
                "code" => 242,
                "country" => "VI",
                "currency_symbol" => "$",
                "name" => "USD",
                "tld" => ".vi"
            ],
            [
                "code" => 243,
                "country" => "WF",
                "currency_symbol" => "₣",
                "name" => "XPF",
                "tld" => ".wf"
            ],
            [
                "code" => 244,
                "country" => "EH",
                "currency_symbol" => "MAD",
                "name" => "MAD",
                "tld" => ".eh"
            ],
            [
                "code" => 245,
                "country" => "YE",
                "currency_symbol" => "﷼",
                "name" => "YER",
                "tld" => ".ye"
            ],
            [
                "code" => 246,
                "country" => "ZM",
                "currency_symbol" => "ZK",
                "name" => "ZMW",
                "tld" => ".zm"
            ],
            [
                "code" => 247,
                "country" => "ZW",
                "currency_symbol" => "$",
                "name" => "ZWL",
                "tld" => ".zw"
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('currency')->truncate();
        foreach ($currencies as $currency) 
        {   
            $countryName =  $currency["country"];
            $country = Country::where('code', $countryName)->first();

            if(is_null($country))
                throw new \Exception("unable to find country: $countryName", 1);

            $currency['country'] = $country->id;    

            $this->command->info('Inserted currency from' . $currency['name'] . ' [' . count($currency) . ']..');
            $currencySave = Currency::create($currency);
            if(is_string($currencySave))
                throw new \Exception($currencySave, 1);
                
        }
        Schema::enableForeignKeyConstraints();

    }
}
