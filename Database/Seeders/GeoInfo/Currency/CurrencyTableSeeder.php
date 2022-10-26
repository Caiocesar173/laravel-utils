<?php

namespace Caiocesar173\Utils\Database\Seeders\GeoInfo\Currency;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\Country;
use Caiocesar173\Utils\Entities\Currency;

/**
 * The currencies names and codes where provided by https://openexchangerates.org/
 *  
 */

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::disableQueryLog();

        $currencies = [
            [
                "country" => "BR",
                "symbol" => "R$",
                "code" => "BRL",
                "name" => "Brazilian Real",
            ],
            [
                "country" => "AF",
                "symbol" => "؋",
                "code" => "AFN",
                "name" => "Afghan Afghani",
            ],
            [
                "country" => "AL",
                "symbol" => "Lek",
                "code" => "ALL",
                "name" => "Albanian Lek",
            ],
            [
                "country" => "DZ",
                "symbol" => "دج",
                "code" => "DZD",
                "name" => "Algerian Dinar",
            ],
            [
                "country" => "AO",
                "symbol" => "Kz",
                "code" => "AOA",
                "name" => "Angolan Kwanza",
            ],
            [
                "country" => "AQ",
                "symbol" => "$",
                "code" => "AAD",
                "name" => "Arab Accounting Dinar",
            ],
            [
                "country" => "AR",
                "symbol" => "$",
                "code" => "ARS",
                "name" => "Argentine Peso",
            ],
            [
                "country" => "AM",
                "symbol" => "֏",
                "code" => "AMD",
                "name" => "Armenian Dram",
            ],
            [
                "country" => "AW",
                "symbol" => "ƒ",
                "code" => "AWG",
                "name" => "Aruban Florin",
            ],
            [
                "country" => "AZ",
                "symbol" => "m",
                "code" => "AZN",
                "name" => "Azerbaijani Manat",
            ],
            [
                "country" => "BS",
                "symbol" => "B$",
                "code" => "BSD",
                "name" => "Bahamian Dollar",
            ],
            [
                "country" => "BH",
                "symbol" => ".د.ب",
                "code" => "BHD",
                "name" => "Bahraini Dinar",
            ],
            [
                "country" => "BD",
                "symbol" => "৳",
                "code" => "BDT",
                "name" => "Bangladeshi Taka",
            ],
            [
                "country" => "BB",
                "symbol" => "Bds$",
                "code" => "BBD",
                "name" => "Barbadian Dollar",
            ],
            [
                "country" => "BY",
                "symbol" => "Br",
                "code" => "BYN",
                "name" => "Belarusian Ruble",
            ],
            [
                "country" => "BZ",
                "symbol" => "$",
                "code" => "BZD",
                "name" => "Belize Dollar",
            ],
            [
                "country" => "BM",
                "symbol" => "$",
                "code" => "BMD",
                "name" => "Bermudan Dollar",
            ],
            [
                "country" => "BT",
                "symbol" => "Nu.",
                "code" => "BTN",
                "name" => "Bhutanese Ngultrum",
            ],
            [
                "country" => NULL,
                "symbol" => "₿",
                "code" => "BTC",
                "name" => "Bitcoin",
            ],
            [
                "country" => "BO",
                "symbol" => "Bs.",
                "code" => "BOB",
                "name" => "Bolivian Boliviano",
            ],
            [
                "country" => "BA",
                "symbol" => "KM",
                "code" => "BAM",
                "name" => "Bosnia-Herzegovina Convertible Mark",
            ],
            [
                "country" => "BW",
                "symbol" => "P",
                "code" => "BWP",
                "name" => "Botswanan Pula",
            ],
            [
                "country" => "BN",
                "symbol" => "B$",
                "code" => "BND",
                "name" => "Brunei Dollar",
            ],
            [
                "country" => "BG",
                "symbol" => "Лв.",
                "code" => "BGN",
                "name" => "Bulgarian Lev",
            ],
            [
                "country" => "BI",
                "symbol" => "FBu",
                "code" => "BIF",
                "name" => "Burundian Franc",
            ],
            [
                "country" => "KH",
                "symbol" => "KHR",
                "code" => "KHR",
                "name" => "Cambodian Riel",
            ],
            [
                "country" => "CA",
                "symbol" => "$",
                "code" => "CAD",
                "name" => "Canadian Dollar",
            ],
            [
                "country" => "CV",
                "symbol" => "$",
                "code" => "CVE",
                "name" => "Cape Verdean Escudo",
            ],
            [
                "country" => "KY",
                "symbol" => "$",
                "code" => "KYD",
                "name" => "Cayman Islands Dollar",
            ],
            [
                "country" => "CF",
                "symbol" => "FCFA",
                "code" => "XAF",
                "name" => "CFA Franc BEAC",
            ],
            [
                "country" => NULL,
                "symbol" => "Ag",
                "code" => "XAG",
                "name" => "Silver Ounce",
            ],
            [
                "country" => NULL,
                "symbol" => "Au",
                "code" => "XAU",
                "name" => "Gold Ounce",
            ],
            [
                "country" => "CL",
                "symbol" => "$",
                "code" => "CLP",
                "name" => "Chilean Peso",
            ],
            [
                "country" => "CL",
                "symbol" => "UF",
                "code" => "CLF",
                "name" => "Chilean Unit of Account (UF)",
            ],
            [
                "country" => "CN",
                "symbol" => "¥",
                "code" => "CNY",
                "name" => "Chinese Yuan",
            ],
            [
                "country" => "CN",
                "symbol" => "CN¥",
                "code" => "CNH",
                "name" => "Chinese Yuan (Offshore)",
            ],
            [
                "country" => "CO",
                "symbol" => "$",
                "code" => "COP",
                "name" => "Colombian Peso",
            ],
            [
                "country" => "KM",
                "symbol" => "CF",
                "code" => "KMF",
                "name" => "Comorian Franc",
            ],
            [
                "country" => "CR",
                "symbol" => "₡",
                "code" => "CRC",
                "name" => "Costa Rican Colón",
            ],
            [
                "country" => "HR",
                "symbol" => "kn",
                "code" => "HRK",
                "name" => "Croatian Kuna",
            ],
            [
                "country" => "CU",
                "symbol" => "$",
                "code" => "CUP",
                "name" => "Cuban Peso",
            ],
            [
                "country" => "CU",
                "symbol" => "$",
                "code" => "CUC",
                "name" => "Cuban Convertible Peso",
            ],
            [
                "country" => "CW",
                "symbol" => "ƒ",
                "code" => "ANG",
                "name" => "Netherlands Antillean Guilder",
            ],
            [
                "country" => "CZ",
                "symbol" => "Kč",
                "code" => "CZK",
                "name" => "Czech Republic Koruna",
            ],
            [
                "country" => "CD",
                "symbol" => "FC",
                "code" => "CDF",
                "name" => "Congolese Franc",
            ],
            [
                "country" => "DJ",
                "symbol" => "Fdj",
                "code" => "DJF",
                "name" => "Djiboutian Franc",
            ],
            [
                "country" => NULL,
                "symbol" => "SDR",
                "code" => "XDR",
                "name" => "Special Drawing Rights",
            ],
            [
                "country" => "DO",
                "symbol" => "$",
                "code" => "DOP",
                "name" => "Dominican Peso",
            ],
            [
                "country" => "EG",
                "symbol" => "ج.م",
                "code" => "EGP",
                "name" => "Egyptian Pound",
            ],
            [
                "country" => "SV",
                "symbol" => "₡",
                "code" => "SCV",
                "name" => "Salvadoran Colón",
            ],
            [
                "country" => "ER",
                "symbol" => "Nfk",
                "code" => "ERN",
                "name" => "Eritrean Nakfa",
            ],
            [
                "country" => "ET",
                "symbol" => "Nkf",
                "code" => "ETB",
                "name" => "Ethiopian Birr",
            ],
            [
                "country" => NULL,
                "symbol" => "Ξ",
                "code" => "ETH",
                "name" => "ethereum",
            ],
            [
                "country" => "FK",
                "symbol" => "£",
                "code" => "FKP",
                "name" => "Falkland Islands Pound",
            ],
            [
                "country" => "DK",
                "symbol" => "Kr.",
                "code" => "DKK",
                "name" => "Danish Krone",
            ],
            [
                "country" => "FJ",
                "symbol" => "FJ$",
                "code" => "FJD",
                "name" => "Fijian Dollar",
            ],
            [
                "country" => "PF",
                "symbol" => "₣",
                "code" => "XPT",
                "name" => "Platinum Ounce",
            ],
            [
                "country" => "GM",
                "symbol" => "D",
                "code" => "GMD",
                "name" => "Gambian Dalasi",
            ],
            [
                "country" => "GE",
                "symbol" => "ლ",
                "code" => "GEL",
                "name" => "Georgian Lari",
            ],
            [
                "country" => "GH",
                "symbol" => "GH₵",
                "code" => "GHS",
                "name" => "Ghanaian Cedi",
            ],
            [
                "country" => "GI",
                "symbol" => "£",
                "code" => "GIP",
                "name" => "Gibraltar Pound",
            ],
            [
                "country" => "GT",
                "symbol" => "Q",
                "code" => "GTQ",
                "name" => "Guatemalan Quetzal",
            ],
            [
                "country" => "GG",
                "symbol" => "£",
                "code" => "GGP",
                "name" => "Guernsey Pound",
            ],
            [
                "country" => "GN",
                "symbol" => "FG",
                "code" => "GNF",
                "name" => "Guinean Franc",
            ],
            [
                "country" => "ZA",
                "symbol" => "CFA",
                "code" => "XOF",
                "name" => "West African CFA Franc",
            ],
            [
                "country" => "GY",
                "symbol" => "$",
                "code" => "GYD",
                "name" => "Guyanaese Dollar",
            ],
            [
                "country" => "HT",
                "symbol" => "G",
                "code" => "HTG",
                "name" => "Haitian Gourde",
            ],
            [
                "country" => "HN",
                "symbol" => "L",
                "code" => "HNL",
                "name" => "Honduran Lempira",
            ],
            [
                "country" => "HK",
                "symbol" => "$",
                "code" => "HKD",
                "name" => "Hong Kong Dollar",
            ],
            [
                "country" => "HU",
                "symbol" => "Ft",
                "code" => "HUF",
                "name" => "Hungarian Forint",
            ],
            [
                "country" => "IS",
                "symbol" => "kr",
                "code" => "ISK",
                "name" => "Icelandic Króna",
            ],
            [
                "country" => "IN",
                "symbol" => "₹",
                "code" => "INR",
                "name" => "Indian Rupee",
            ],
            [
                "country" => "ID",
                "symbol" => "Rp",
                "code" => "IDR",
                "name" => "Indonesian Rupiah",
            ],
            [
                "country" => "IR",
                "symbol" => "﷼",
                "code" => "IRR",
                "name" => "Iranian Rial",
            ],
            [
                "country" => "IQ",
                "symbol" => "د.ع",
                "code" => "IQD",
                "name" => "Iraqi Dinar",
            ],
            [
                "country" => "IL",
                "symbol" => "₪",
                "code" => "ILS",
                "name" => "Israeli New Sheqel",
            ],
            [
                "country" => "JM",
                "symbol" => "J$",
                "code" => "JMD",
                "name" => "Jamaican Dollar",
            ],
            [
                "country" => "JP",
                "symbol" => "¥",
                "code" => "JPY",
                "name" => "Japanese Yen",
            ],
            [
                "country" => "JE",
                "symbol" => "£",
                "code" => "JEP",
                "name" => "Jersey Pound",
            ],
            [
                "country" => "JO",
                "symbol" => "ا.د",
                "code" => "JOD",
                "name" => "Jordanian Dinar",
            ],
            [
                "country" => "KZ",
                "symbol" => "лв",
                "code" => "KZT",
                "name" => "Kazakhstani Tenge",
            ],
            [
                "country" => "KE",
                "symbol" => "KSh",
                "code" => "KES",
                "name" => "Kenyan Shilling",
            ],
            [
                "country" => "KW",
                "symbol" => "ك.د",
                "code" => "KWD",
                "name" => "Kuwaiti Dinar",
            ],
            [
                "country" => "KG",
                "symbol" => "лв",
                "code" => "KGS",
                "name" => "Kyrgystani Som",
            ],
            [
                "country" => "LA",
                "symbol" => "₭",
                "code" => "LAK",
                "name" => "Laotian Kip",
            ],
            [
                "country" => "LB",
                "symbol" => "£",
                "code" => "LBP",
                "name" => "Lebanese Pound",
            ],
            [
                "country" => "LS",
                "symbol" => "L",
                "code" => "LSL",
                "name" => "Lesotho Loti",
            ],
            [
                "country" => "LR",
                "symbol" => "$",
                "code" => "LRD",
                "name" => "Liberian Dollar",
            ],
            [
                "country" => "LY",
                "symbol" => "د.ل",
                "code" => "LYD",
                "name" => "Libyan Dinar",
            ],
            [
                "country" => "CH",
                "symbol" => "CHf",
                "code" => "CHF",
                "name" => "Swiss Franc",
            ],
            [
                "country" => "MO",
                "symbol" => "$",
                "code" => "MOP",
                "name" => "Macanese Pataca",
            ],
            [
                "country" => "MK",
                "symbol" => "ден",
                "code" => "MKD",
                "name" => "Macedonian Denar",
            ],
            [
                "country" => "MG",
                "symbol" => "Ar",
                "code" => "MGA",
                "name" => "Malagasy Ariary",
            ],
            [
                "country" => "MW",
                "symbol" => "MK",
                "code" => "MWK",
                "name" => "Malawian kwacha",
            ],
            [
                "country" => "MY",
                "symbol" => "RM",
                "code" => "MYR",
                "name" => "Malaysian Ringgit",
            ],
            [
                "country" => "MV",
                "symbol" => "Rf",
                "code" => "MVR",
                "name" => "Maldivian Rufiyaa",
            ],
            [
                "country" => "IM",
                "symbol" => "£",
                "code" => "IMP",
                "name" => "Manx pound",
            ],
            [
                "country" => "MR",
                "symbol" => "MRU",
                "code" => "MRO",
                "name" => "Mauritanian Ouguiya",
            ],
            [
                "country" => "MU",
                "symbol" => "₨",
                "code" => "MUR",
                "name" => "Mauritian Rupee",
            ],
            [
                "country" => "MX",
                "symbol" => "$",
                "code" => "MXN",
                "name" => "Mexican Peso",
            ],
            [
                "country" => "MD",
                "symbol" => "L",
                "code" => "MDL",
                "name" => "Moldovan Leu",
            ],
            [
                "country" => "MN",
                "symbol" => "₮",
                "code" => "MNT",
                "name" => "Mongolian Tugrik",
            ],
            [
                "country" => "MA",
                "symbol" => "DH",
                "code" => "MAD",
                "name" => "Moroccan Dirham",
            ],
            [
                "country" => "MZ",
                "symbol" => "MT",
                "code" => "MZN",
                "name" => "Mozambican Metical",
            ],
            [
                "country" => "MM",
                "symbol" => "K",
                "code" => "MMK",
                "name" => "Myanma Kyat",
            ],
            [
                "country" => "NA",
                "symbol" => "$",
                "code" => "NAD",
                "name" => "Namibian Dollar",
            ],
            [
                "country" => "NP",
                "symbol" => "₨",
                "code" => "NPR",
                "name" => "Nepalese Rupee",
            ],
            [
                "country" => NULL,
                "symbol" => "Pd",
                "code" => "XPD",
                "name" => "Palladium Ounce",
            ],

            [
                "country" => NULL,
                "symbol" => "€",
                "code" => "EUR",
                "name" => "Euro",
            ],
            [
                "country" => "NZL",
                "symbol" => "$",
                "code" => "NZD",
                "name" => "New Zealand Dollar",
            ],
            [
                "country" => "NI",
                "symbol" => "C$",
                "code" => "NIO",
                "name" => "Nicaraguan Córdoba",
            ],
            [
                "country" => "NG",
                "symbol" => "₦",
                "code" => "NGN",
                "name" => "Nigerian NIO",
            ],
            [
                "country" => "KP",
                "symbol" => "₩",
                "code" => "KPW",
                "name" => "North Korean Won",
            ],
            [
                "country" => "NO",
                "symbol" => "kr",
                "code" => "NOK",
                "name" => "Norwegian Krone",
            ],
            [
                "country" => "OM",
                "symbol" => ".ع.ر",
                "code" => "OMR",
                "name" => "Omani Rial",
            ],
            [
                "country" => "PK",
                "symbol" => "₨",
                "code" => "PKR",
                "name" => "Pakistani Rupee",
            ],
            [
                "country" => "PA",
                "symbol" => "B/.",
                "code" => "PAB",
                "name" => "Panamanian Balboa",
            ],
            [
                "country" => "PG",
                "symbol" => "K",
                "code" => "PGK",
                "name" => "Papua New Guinean Kina",
            ],
            [
                "country" => "PY",
                "symbol" => "₲",
                "code" => "PYG",
                "name" => "Paraguayan Guarani",
            ],
            [
                "country" => "PE",
                "symbol" => "S/.",
                "code" => "PEN",
                "name" => "Peruvian Nuevo Sol",
            ],
            [
                "country" => "PH",
                "symbol" => "₱",
                "code" => "PHP",
                "name" => "Philippine Peso",
            ],
            [
                "country" => "PL",
                "symbol" => "zł",
                "code" => "PLN",
                "name" => "Polish Zloty",
            ],
            [
                "country" => "QA",
                "symbol" => "ق.ر",
                "code" => "QAR",
                "name" => "Qatari Rial",
            ],
            [
                "country" => "RO",
                "symbol" => "lei",
                "code" => "RON",
                "name" => "Romanian Leu",
            ],
            [
                "country" => "RU",
                "symbol" => "₽",
                "code" => "RUB",
                "name" => "Russian Ruble",
            ],
            [
                "country" => "RW",
                "symbol" => "FRw",
                "code" => "RWF",
                "name" => "Rwandan Franc",
            ],
            [
                "country" => "SH",
                "symbol" => "£",
                "code" => "SHP",
                "name" => "Saint Helena Pound",
            ],
            [
                "country" => NULL,
                "symbol" => "$",
                "code" => "XCD",
                "name" => "East Caribbean Dollar",
            ],
            [
                "country" => "WS",
                "symbol" => "SAT",
                "code" => "WST",
                "name" => "Samoan Tala",
            ],
            [
                "country" => "ST",
                "symbol" => "Db",
                "code" => "STD",
                "name" => "São Tomé and Príncipe Dobra (pre-2018)",
            ],
            [
                "country" => "ST",
                "symbol" => "Db",
                "code" => "STN",
                "name" => "São Tomé and Príncipe Dobra",
            ],
            [
                "country" => "SA",
                "symbol" => "﷼",
                "code" => "SAR",
                "name" => "Saudi Riyal",
            ],
            [
                "country" => "RS",
                "symbol" => "din",
                "code" => "RSD",
                "name" => "Serbian Dinar",
            ],
            [
                "country" => "SC",
                "symbol" => "SRe",
                "code" => "SCR",
                "name" => "Seychellois Rupee",
            ],
            [
                "country" => "SL",
                "symbol" => "Le",
                "code" => "SLL",
                "name" => "Sierra Leonean Leone",
            ],
            [
                "country" => "SG",
                "symbol" => "$",
                "code" => "SGD",
                "name" => "Singapore Dollar",
            ],
            [
                "country" => "SB",
                "symbol" => "Si$",
                "code" => "SBD",
                "name" => "Solomon Islands Dollar",
            ],
            [
                "country" => "SO",
                "symbol" => "Sh.so.",
                "code" => "SOS",
                "name" => "Somali Shilling",
            ],
            [
                "country" => "ZA",
                "symbol" => "R",
                "code" => "ZAR",
                "name" => "South African Rand",
            ],
            [
                "country" => "KR",
                "symbol" => "₩",
                "code" => "KRW",
                "name" => "South Korean Won",
            ],
            [
                "country" => "SS",
                "symbol" => "£",
                "code" => "SSP",
                "name" => "South Sudanese Pound",
            ],
            [
                "country" => "LK",
                "symbol" => "Rs",
                "code" => "LKR",
                "name" => "Sri Lankan Rupee",
            ],
            [
                "country" => "SD",
                "symbol" => ".س.ج",
                "code" => "SDG",
                "name" => "Sudanese Pound",
            ],
            [
                "country" => "SR",
                "symbol" => "$",
                "code" => "SRD",
                "name" => "Surinamese Dollar",
            ],
            [
                "country" => "SZ",
                "symbol" => "E",
                "code" => "SZL",
                "name" => "Swazi Lilangeni",
            ],
            [
                "country" => "SE",
                "symbol" => "kr",
                "code" => "SEK",
                "name" => "Swedish Krona",
            ],
            [
                "country" => "SY",
                "symbol" => "LS",
                "code" => "SYP",
                "name" => "Syrian Pound",
            ],
            [
                "country" => "TW",
                "symbol" => "$",
                "code" => "TWD",
                "name" => "New Taiwan Dollar",
            ],
            [
                "country" => "TJ",
                "symbol" => "SM",
                "code" => "TJS",
                "name" => "Tajikistani Somoni",
            ],
            [
                "country" => "TZ",
                "symbol" => "TSh",
                "code" => "TZS",
                "name" => "Tanzanian Shilling",
            ],
            [
                "country" => "TH",
                "symbol" => "฿",
                "code" => "THB",
                "name" => "Thai Baht",
            ],
            [
                "country" => "TO",
                "symbol" => "$",
                "code" => "TOP",
                "name" => "Tongan Pa'anga",
            ],
            [
                "country" => "TT",
                "symbol" => "$",
                "code" => "TTD",
                "name" => "Trinidad and Tobago Dollar",
            ],
            [
                "country" => "TN",
                "symbol" => "ت.د",
                "code" => "TND",
                "name" => "Tunisian Dinar",
            ],
            [
                "country" => "TR",
                "symbol" => "₺",
                "code" => "TRY",
                "name" => "Turkish Lira",
            ],
            [
                "country" => "TM",
                "symbol" => "T",
                "code" => "TMT",
                "name" => "Turkmenistani Manat",
            ],
            [
                "country" => NULL,
                "symbol" => "$",
                "code" => "AUD",
                "name" => "Australian Dollar",
            ],
            [
                "country" => "UG",
                "symbol" => "USh",
                "code" => "UGX",
                "name" => "Ugandan Shilling",
            ],
            [
                "country" => "UA",
                "symbol" => "₴",
                "code" => "UAH",
                "name" => "Ukrainian Hryvnia",
            ],
            [
                "country" => "AE",
                "symbol" => "إ.د",
                "code" => "AED",
                "name" => "United Arab Emirates Dirham",
            ],
            [
                "country" => "GB",
                "symbol" => "£",
                "code" => "GBP",
                "name" => "British Pound Sterling",
            ],
            [
                "country" => "US",
                "symbol" => "$",
                "code" => "USD",
                "name" => "Dollar",
            ],
            [
                "country" => "UY",
                "symbol" => "$",
                "code" => "UYU",
                "name" => "Uruguayan Peso",
            ],
            [
                "country" => "UZ",
                "symbol" => "лв",
                "code" => "UZS",
                "name" => "Uzbekistan Som",
            ],
            [
                "country" => "VU",
                "symbol" => "VT",
                "code" => "VUV",
                "name" => "Vanuatu Vatu",
            ],
            [
                "country" => "VE",
                "symbol" => "Bs",
                "code" => "VEF",
                "name" => "Venezuelan Bolívar Fuerte (Old)",
            ],
            [
                "country" => "VE",
                "symbol" => "Bs",
                "code" => "VES",
                "name" => "Venezuelan Bolívar Soberano",
            ],
            [
                "country" => "VN",
                "symbol" => "₫",
                "code" => "VND",
                "name" => "Vietnamese Dong",
            ],
            [
                "country" => NULL,
                "symbol" => "₣",
                "code" => "XPF",
                "name" => "CFP Franc",
            ],
            [
                "country" => "YE",
                "symbol" => "﷼",
                "code" => "YER",
                "name" => "Yemeni Rial",
            ],
            [
                "country" => "ZM",
                "symbol" => "ZK",
                "code" => "ZMW",
                "name" => "Zambian Kwacha",
            ],
            [
                "country" => "ZW",
                "symbol" => "$",
                "code" => "ZWL",
                "name" => "Zimbabwean Dollar",
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('currencies')->truncate();
        $counter = 0;
        foreach ($currencies as $currency) {

            if (env('UTILS_GEOLOC_ENABLE')) {
                if(!is_null($currency["country"])) {
                    $country = Country::where('code', $currency["country"])->first();
    
                    if (is_null($country))
                        throw new \Exception("unable to find country: {$currency["country"]}", 1);
    
                    $currency['country'] = $country->id;
                }
            }

            $currencySave = Currency::create($currency);
            if (is_string($currencySave))
                throw new \Exception($currencySave, 1);

            if ($this->command)
                $this->command->info("Inserted currency from {$currency['name']} [$counter].");
            else
                echo ("Inserted currency from  {$currency['name']} [$counter].\n");

            $counter += 1;
        }
        Schema::enableForeignKeyConstraints();
    }
}
