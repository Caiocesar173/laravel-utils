<?php

namespace Caiocesar173\Utils\Database\Seeds;

use Caiocesar173\Utils\Entities\Country;
use Caiocesar173\Utils\Entities\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Caiocesar173\Utils\Entities\LanguageMap;

class LanguageMaps extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::disableQueryLog();

        $languages = [
            [
                "country" => "AD",
                "language" => "ca"
            ],
            [
                "country" => "AE",
                "language" => "ar"
            ],
            [
                "country" => "AE",
                "language" => "fa"
            ],
            [
                "country" => "AE",
                "language" => "en"
            ],
            [
                "country" => "AE",
                "language" => "hi"
            ],
            [
                "country" => "AE",
                "language" => "ur"
            ],
            [
                "country" => "AF",
                "language" => "fa"
            ],
            [
                "country" => "AF",
                "language" => "ps"
            ],
            [
                "country" => "AF",
                "language" => "uz"
            ],
            [
                "country" => "AF",
                "language" => "tk"
            ],
            [
                "country" => "AG",
                "language" => "en"
            ],
            [
                "country" => "AI",
                "language" => "en"
            ],
            [
                "country" => "AL",
                "language" => "sq"
            ],
            [
                "country" => "AL",
                "language" => "el"
            ],
            [
                "country" => "AM",
                "language" => "hy"
            ],
            [
                "country" => "AO",
                "language" => "pt"
            ],
            [
                "country" => "AR",
                "language" => "es"
            ],
            [
                "country" => "AR",
                "language" => "en"
            ],
            [
                "country" => "AR",
                "language" => "it"
            ],
            [
                "country" => "AR",
                "language" => "de"
            ],
            [
                "country" => "AR",
                "language" => "fr"
            ],
            [
                "country" => "AR",
                "language" => "gn"
            ],
            [
                "country" => "AS",
                "language" => "en"
            ],
            [
                "country" => "AS",
                "language" => "sm"
            ],
            [
                "country" => "AS",
                "language" => "to"
            ],
            [
                "country" => "AT",
                "language" => "de"
            ],
            [
                "country" => "AT",
                "language" => "hr"
            ],
            [
                "country" => "AT",
                "language" => "hu"
            ],
            [
                "country" => "AT",
                "language" => "sl"
            ],
            [
                "country" => "AU",
                "language" => "en"
            ],
            [
                "country" => "AW",
                "language" => "nl"
            ],
            [
                "country" => "AW",
                "language" => "es"
            ],
            [
                "country" => "AW",
                "language" => "en"
            ],
            [
                "country" => "AX",
                "language" => "sv"
            ],
            [
                "country" => "AZ",
                "language" => "az"
            ],
            [
                "country" => "AZ",
                "language" => "ru"
            ],
            [
                "country" => "AZ",
                "language" => "hy"
            ],
            [
                "country" => "BA",
                "language" => "bs"
            ],
            [
                "country" => "BA",
                "language" => "hr"
            ],
            [
                "country" => "BA",
                "language" => "sr"
            ],
            [
                "country" => "BB",
                "language" => "en"
            ],
            [
                "country" => "BD",
                "language" => "bn"
            ],
            [
                "country" => "BD",
                "language" => "en"
            ],
            [
                "country" => "BE",
                "language" => "nl"
            ],
            [
                "country" => "BE",
                "language" => "fr"
            ],
            [
                "country" => "BE",
                "language" => "de"
            ],
            [
                "country" => "BF",
                "language" => "fr"
            ],
            [
                "country" => "BG",
                "language" => "bg"
            ],
            [
                "country" => "BG",
                "language" => "tr"
            ],
            [
                "country" => "BH",
                "language" => "ar"
            ],
            [
                "country" => "BH",
                "language" => "en"
            ],
            [
                "country" => "BH",
                "language" => "fa"
            ],
            [
                "country" => "BH",
                "language" => "ur"
            ],
            [
                "country" => "BI",
                "language" => "fr"
            ],
            [
                "country" => "BI",
                "language" => "rn"
            ],
            [
                "country" => "BJ",
                "language" => "fr"
            ],
            [
                "country" => "BL",
                "language" => "fr"
            ],
            [
                "country" => "BM",
                "language" => "en"
            ],
            [
                "country" => "BM",
                "language" => "pt"
            ],
            [
                "country" => "BN",
                "language" => "ms"
            ],
            [
                "country" => "BN",
                "language" => "en"
            ],
            [
                "country" => "BO",
                "language" => "es"
            ],
            [
                "country" => "BO",
                "language" => "qu"
            ],
            [
                "country" => "BO",
                "language" => "ay"
            ],
            [
                "country" => "BQ",
                "language" => "nl"
            ],
            [
                "country" => "BQ",
                "language" => "en"
            ],
            [
                "country" => "BR",
                "language" => "pt"
            ],
            [
                "country" => "BR",
                "language" => "es"
            ],
            [
                "country" => "BR",
                "language" => "en"
            ],
            [
                "country" => "BR",
                "language" => "fr"
            ],
            [
                "country" => "BS",
                "language" => "en"
            ],
            [
                "country" => "BW",
                "language" => "en"
            ],
            [
                "country" => "BW",
                "language" => "tn"
            ],
            [
                "country" => "BY",
                "language" => "be"
            ],
            [
                "country" => "BY",
                "language" => "ru"
            ],
            [
                "country" => "BZ",
                "language" => "en"
            ],
            [
                "country" => "BZ",
                "language" => "es"
            ],
            [
                "country" => "CA",
                "language" => "en"
            ],
            [
                "country" => "CA",
                "language" => "fr"
            ],
            [
                "country" => "CA",
                "language" => "iu"
            ],
            [
                "country" => "CC",
                "language" => "ms"
            ],
            [
                "country" => "CC",
                "language" => "en"
            ],
            [
                "country" => "CD",
                "language" => "fr"
            ],
            [
                "country" => "CD",
                "language" => "ln"
            ],
            [
                "country" => "CD",
                "language" => "kg"
            ],
            [
                "country" => "CD",
                "language" => "sw"
            ],
            [
                "country" => "CF",
                "language" => "fr"
            ],
            [
                "country" => "CF",
                "language" => "sg"
            ],
            [
                "country" => "CF",
                "language" => "ln"
            ],
            [
                "country" => "CF",
                "language" => "kg"
            ],
            [
                "country" => "CG",
                "language" => "fr"
            ],
            [
                "country" => "CG",
                "language" => "kg"
            ],
            [
                "country" => "CG",
                "language" => "ln"
            ],
            [
                "country" => "CH",
                "language" => "de"
            ],
            [
                "country" => "CH",
                "language" => "fr"
            ],
            [
                "country" => "CH",
                "language" => "it"
            ],
            [
                "country" => "CH",
                "language" => "rm"
            ],
            [
                "country" => "CI",
                "language" => "fr"
            ],
            [
                "country" => "CK",
                "language" => "en"
            ],
            [
                "country" => "CK",
                "language" => "mi"
            ],
            [
                "country" => "CL",
                "language" => "es"
            ],
            [
                "country" => "CM",
                "language" => "en"
            ],
            [
                "country" => "CM",
                "language" => "fr"
            ],
            [
                "country" => "CN",
                "language" => "zh"
            ],
            [
                "country" => "CN",
                "language" => "ug"
            ],
            [
                "country" => "CN",
                "language" => "za"
            ],
            [
                "country" => "CO",
                "language" => "es"
            ],
            [
                "country" => "CR",
                "language" => "es"
            ],
            [
                "country" => "CR",
                "language" => "en"
            ],
            [
                "country" => "CU",
                "language" => "es"
            ],
            [
                "country" => "CV",
                "language" => "pt"
            ],
            [
                "country" => "CW",
                "language" => "nl"
            ],
            [
                "country" => "CX",
                "language" => "en"
            ],
            [
                "country" => "CX",
                "language" => "zh"
            ],
            [
                "country" => "CX",
                "language" => "ms"
            ],
            [
                "country" => "CY",
                "language" => "el"
            ],
            [
                "country" => "CY",
                "language" => "tr"
            ],
            [
                "country" => "CY",
                "language" => "en"
            ],
            [
                "country" => "CZ",
                "language" => "cs"
            ],
            [
                "country" => "CZ",
                "language" => "sk"
            ],
            [
                "country" => "DE",
                "language" => "de"
            ],
            [
                "country" => "DJ",
                "language" => "fr"
            ],
            [
                "country" => "DJ",
                "language" => "ar"
            ],
            [
                "country" => "DJ",
                "language" => "so"
            ],
            [
                "country" => "DJ",
                "language" => "aa"
            ],
            [
                "country" => "DK",
                "language" => "da"
            ],
            [
                "country" => "DK",
                "language" => "en"
            ],
            [
                "country" => "DK",
                "language" => "fo"
            ],
            [
                "country" => "DK",
                "language" => "de"
            ],
            [
                "country" => "DM",
                "language" => "en"
            ],
            [
                "country" => "DO",
                "language" => "es"
            ],
            [
                "country" => "DZ",
                "language" => "ar"
            ],
            [
                "country" => "EC",
                "language" => "es"
            ],
            [
                "country" => "EE",
                "language" => "et"
            ],
            [
                "country" => "EE",
                "language" => "ru"
            ],
            [
                "country" => "EG",
                "language" => "ar"
            ],
            [
                "country" => "EG",
                "language" => "en"
            ],
            [
                "country" => "EG",
                "language" => "fr"
            ],
            [
                "country" => "EH",
                "language" => "ar"
            ],
            [
                "country" => "ER",
                "language" => "aa"
            ],
            [
                "country" => "ER",
                "language" => "ar"
            ],
            [
                "country" => "ER",
                "language" => "ti"
            ],
            [
                "country" => "ES",
                "language" => "es"
            ],
            [
                "country" => "ES",
                "language" => "ca"
            ],
            [
                "country" => "ES",
                "language" => "gl"
            ],
            [
                "country" => "ES",
                "language" => "eu"
            ],
            [
                "country" => "ES",
                "language" => "oc"
            ],
            [
                "country" => "ET",
                "language" => "am"
            ],
            [
                "country" => "ET",
                "language" => "en"
            ],
            [
                "country" => "ET",
                "language" => "om"
            ],
            [
                "country" => "ET",
                "language" => "ti"
            ],
            [
                "country" => "ET",
                "language" => "so"
            ],
            [
                "country" => "FI",
                "language" => "fi"
            ],
            [
                "country" => "FI",
                "language" => "sv"
            ],
            [
                "country" => "FJ",
                "language" => "en"
            ],
            [
                "country" => "FJ",
                "language" => "fj"
            ],
            [
                "country" => "FK",
                "language" => "en"
            ],
            [
                "country" => "FM",
                "language" => "en"
            ],
            [
                "country" => "FO",
                "language" => "fo"
            ],
            [
                "country" => "FO",
                "language" => "da"
            ],
            [
                "country" => "FR",
                "language" => "fr"
            ],
            [
                "country" => "FR",
                "language" => "br"
            ],
            [
                "country" => "FR",
                "language" => "co"
            ],
            [
                "country" => "FR",
                "language" => "ca"
            ],
            [
                "country" => "FR",
                "language" => "eu"
            ],
            [
                "country" => "FR",
                "language" => "oc"
            ],
            [
                "country" => "GA",
                "language" => "fr"
            ],
            [
                "country" => "GB",
                "language" => "en"
            ],
            [
                "country" => "GB",
                "language" => "cy"
            ],
            [
                "country" => "GB",
                "language" => "gd"
            ],
            [
                "country" => "GD",
                "language" => "en"
            ],
            [
                "country" => "GE",
                "language" => "ka"
            ],
            [
                "country" => "GE",
                "language" => "ru"
            ],
            [
                "country" => "GE",
                "language" => "hy"
            ],
            [
                "country" => "GE",
                "language" => "az"
            ],
            [
                "country" => "GF",
                "language" => "fr"
            ],
            [
                "country" => "GG",
                "language" => "en"
            ],
            [
                "country" => "GH",
                "language" => "en"
            ],
            [
                "country" => "GH",
                "language" => "ak"
            ],
            [
                "country" => "GH",
                "language" => "ee"
            ],
            [
                "country" => "GH",
                "language" => "tw"
            ],
            [
                "country" => "GI",
                "language" => "en"
            ],
            [
                "country" => "GI",
                "language" => "es"
            ],
            [
                "country" => "GI",
                "language" => "it"
            ],
            [
                "country" => "GI",
                "language" => "pt"
            ],
            [
                "country" => "GL",
                "language" => "kl"
            ],
            [
                "country" => "GL",
                "language" => "da"
            ],
            [
                "country" => "GL",
                "language" => "en"
            ],
            [
                "country" => "GM",
                "language" => "en"
            ],
            [
                "country" => "GM",
                "language" => "wo"
            ],
            [
                "country" => "GM",
                "language" => "ff"
            ],
            [
                "country" => "GN",
                "language" => "fr"
            ],
            [
                "country" => "GP",
                "language" => "fr"
            ],
            [
                "country" => "GQ",
                "language" => "es"
            ],
            [
                "country" => "GQ",
                "language" => "fr"
            ],
            [
                "country" => "GR",
                "language" => "el"
            ],
            [
                "country" => "GR",
                "language" => "en"
            ],
            [
                "country" => "GR",
                "language" => "fr"
            ],
            [
                "country" => "GS",
                "language" => "en"
            ],
            [
                "country" => "GT",
                "language" => "es"
            ],
            [
                "country" => "GU",
                "language" => "en"
            ],
            [
                "country" => "GU",
                "language" => "ch"
            ],
            [
                "country" => "GW",
                "language" => "pt"
            ],
            [
                "country" => "GY",
                "language" => "en"
            ],
            [
                "country" => "HK",
                "language" => "zh"
            ],
            [
                "country" => "HK",
                "language" => "zh"
            ],
            [
                "country" => "HK",
                "language" => "en"
            ],
            [
                "country" => "HN",
                "language" => "es"
            ],
            [
                "country" => "HR",
                "language" => "hr"
            ],
            [
                "country" => "HR",
                "language" => "sr"
            ],
            [
                "country" => "HT",
                "language" => "ht"
            ],
            [
                "country" => "HT",
                "language" => "fr"
            ],
            [
                "country" => "HU",
                "language" => "hu"
            ],
            [
                "country" => "ID",
                "language" => "id"
            ],
            [
                "country" => "ID",
                "language" => "en"
            ],
            [
                "country" => "ID",
                "language" => "nl"
            ],
            [
                "country" => "ID",
                "language" => "jv"
            ],
            [
                "country" => "IE",
                "language" => "en"
            ],
            [
                "country" => "IE",
                "language" => "ga"
            ],
            [
                "country" => "IL",
                "language" => "he"
            ],
            [
                "country" => "IL",
                "language" => "ar"
            ],
            [
                "country" => "IL",
                "language" => "en"
            ],
            [
                "country" => "IM",
                "language" => "en"
            ],
            [
                "country" => "IM",
                "language" => "gv"
            ],
            [
                "country" => "IN",
                "language" => "en"
            ],
            [
                "country" => "IN",
                "language" => "hi"
            ],
            [
                "country" => "IN",
                "language" => "bn"
            ],
            [
                "country" => "IN",
                "language" => "te"
            ],
            [
                "country" => "IN",
                "language" => "mr"
            ],
            [
                "country" => "IN",
                "language" => "ta"
            ],
            [
                "country" => "IN",
                "language" => "ur"
            ],
            [
                "country" => "IN",
                "language" => "gu"
            ],
            [
                "country" => "IN",
                "language" => "kn"
            ],
            [
                "country" => "IN",
                "language" => "ml"
            ],
            [
                "country" => "IN",
                "language" => "or"
            ],
            [
                "country" => "IN",
                "language" => "pa"
            ],
            [
                "country" => "IN",
                "language" => "as"
            ],
            [
                "country" => "IN",
                "language" => "bh"
            ],
            [
                "country" => "IN",
                "language" => "ks"
            ],
            [
                "country" => "IN",
                "language" => "ne"
            ],
            [
                "country" => "IN",
                "language" => "sd"
            ],
            [
                "country" => "IN",
                "language" => "sa"
            ],
            [
                "country" => "IN",
                "language" => "fr"
            ],
            [
                "country" => "IO",
                "language" => "en"
            ],
            [
                "country" => "IQ",
                "language" => "ar"
            ],
            [
                "country" => "IQ",
                "language" => "ku"
            ],
            [
                "country" => "IQ",
                "language" => "hy"
            ],
            [
                "country" => "IR",
                "language" => "fa"
            ],
            [
                "country" => "IR",
                "language" => "ku"
            ],
            [
                "country" => "IS",
                "language" => "is"
            ],
            [
                "country" => "IS",
                "language" => "en"
            ],
            [
                "country" => "IS",
                "language" => "de"
            ],
            [
                "country" => "IS",
                "language" => "da"
            ],
            [
                "country" => "IS",
                "language" => "sv"
            ],
            [
                "country" => "IS",
                "language" => "no"
            ],
            [
                "country" => "IT",
                "language" => "it"
            ],
            [
                "country" => "IT",
                "language" => "de"
            ],
            [
                "country" => "IT",
                "language" => "fr"
            ],
            [
                "country" => "IT",
                "language" => "sc"
            ],
            [
                "country" => "IT",
                "language" => "ca"
            ],
            [
                "country" => "IT",
                "language" => "co"
            ],
            [
                "country" => "IT",
                "language" => "sl"
            ],
            [
                "country" => "JE",
                "language" => "en"
            ],
            [
                "country" => "JE",
                "language" => "fr"
            ],
            [
                "country" => "JM",
                "language" => "en"
            ],
            [
                "country" => "JO",
                "language" => "ar"
            ],
            [
                "country" => "JO",
                "language" => "en"
            ],
            [
                "country" => "JP",
                "language" => "ja"
            ],
            [
                "country" => "KE",
                "language" => "en"
            ],
            [
                "country" => "KE",
                "language" => "sw"
            ],
            [
                "country" => "KG",
                "language" => "ky"
            ],
            [
                "country" => "KG",
                "language" => "uz"
            ],
            [
                "country" => "KG",
                "language" => "ru"
            ],
            [
                "country" => "KH",
                "language" => "km"
            ],
            [
                "country" => "KH",
                "language" => "fr"
            ],
            [
                "country" => "KH",
                "language" => "en"
            ],
            [
                "country" => "KI",
                "language" => "en"
            ],
            [
                "country" => "KM",
                "language" => "ar"
            ],
            [
                "country" => "KM",
                "language" => "fr"
            ],
            [
                "country" => "KN",
                "language" => "en"
            ],
            [
                "country" => "KP",
                "language" => "ko"
            ],
            [
                "country" => "KR",
                "language" => "ko"
            ],
            [
                "country" => "KR",
                "language" => "en"
            ],
            [
                "country" => "KW",
                "language" => "ar"
            ],
            [
                "country" => "KW",
                "language" => "en"
            ],
            [
                "country" => "KY",
                "language" => "en"
            ],
            [
                "country" => "KZ",
                "language" => "kk"
            ],
            [
                "country" => "KZ",
                "language" => "ru"
            ],
            [
                "country" => "LA",
                "language" => "lo"
            ],
            [
                "country" => "LA",
                "language" => "fr"
            ],
            [
                "country" => "LA",
                "language" => "en"
            ],
            [
                "country" => "LB",
                "language" => "ar"
            ],
            [
                "country" => "LB",
                "language" => "fr"
            ],
            [
                "country" => "LB",
                "language" => "en"
            ],
            [
                "country" => "LB",
                "language" => "hy"
            ],
            [
                "country" => "LC",
                "language" => "en"
            ],
            [
                "country" => "LI",
                "language" => "de"
            ],
            [
                "country" => "LK",
                "language" => "si"
            ],
            [
                "country" => "LK",
                "language" => "ta"
            ],
            [
                "country" => "LK",
                "language" => "en"
            ],
            [
                "country" => "LR",
                "language" => "en"
            ],
            [
                "country" => "LS",
                "language" => "en"
            ],
            [
                "country" => "LS",
                "language" => "st"
            ],
            [
                "country" => "LS",
                "language" => "xh"
            ],
            [
                "country" => "LT",
                "language" => "lt"
            ],
            [
                "country" => "LT",
                "language" => "ru"
            ],
            [
                "country" => "LT",
                "language" => "pl"
            ],
            [
                "country" => "LU",
                "language" => "lb"
            ],
            [
                "country" => "LU",
                "language" => "de"
            ],
            [
                "country" => "LU",
                "language" => "fr"
            ],
            [
                "country" => "LV",
                "language" => "lv"
            ],
            [
                "country" => "LV",
                "language" => "ru"
            ],
            [
                "country" => "LV",
                "language" => "lt"
            ],
            [
                "country" => "LY",
                "language" => "ar"
            ],
            [
                "country" => "LY",
                "language" => "it"
            ],
            [
                "country" => "LY",
                "language" => "en"
            ],
            [
                "country" => "MA",
                "language" => "ar"
            ],
            [
                "country" => "MA",
                "language" => "fr"
            ],
            [
                "country" => "MC",
                "language" => "fr"
            ],
            [
                "country" => "MC",
                "language" => "en"
            ],
            [
                "country" => "MC",
                "language" => "it"
            ],
            [
                "country" => "MD",
                "language" => "ro"
            ],
            [
                "country" => "MD",
                "language" => "ru"
            ],
            [
                "country" => "MD",
                "language" => "tr"
            ],
            [
                "country" => "ME",
                "language" => "sr"
            ],
            [
                "country" => "ME",
                "language" => "hu"
            ],
            [
                "country" => "ME",
                "language" => "bs"
            ],
            [
                "country" => "ME",
                "language" => "sq"
            ],
            [
                "country" => "ME",
                "language" => "hr"
            ],
            [
                "country" => "MF",
                "language" => "fr"
            ],
            [
                "country" => "MG",
                "language" => "fr"
            ],
            [
                "country" => "MG",
                "language" => "mg"
            ],
            [
                "country" => "MH",
                "language" => "mh"
            ],
            [
                "country" => "MH",
                "language" => "en"
            ],
            [
                "country" => "MK",
                "language" => "mk"
            ],
            [
                "country" => "MK",
                "language" => "sq"
            ],
            [
                "country" => "MK",
                "language" => "tr"
            ],
            [
                "country" => "MK",
                "language" => "sr"
            ],
            [
                "country" => "ML",
                "language" => "fr"
            ],
            [
                "country" => "ML",
                "language" => "bm"
            ],
            [
                "country" => "MM",
                "language" => "my"
            ],
            [
                "country" => "MN",
                "language" => "mn"
            ],
            [
                "country" => "MN",
                "language" => "ru"
            ],
            [
                "country" => "MO",
                "language" => "zh"
            ],
            [
                "country" => "MO",
                "language" => "zh"
            ],
            [
                "country" => "MO",
                "language" => "pt"
            ],
            [
                "country" => "MP",
                "language" => "tl"
            ],
            [
                "country" => "MP",
                "language" => "zh"
            ],
            [
                "country" => "MP",
                "language" => "ch"
            ],
            [
                "country" => "MP",
                "language" => "en"
            ],
            [
                "country" => "MQ",
                "language" => "fr"
            ],
            [
                "country" => "MR",
                "language" => "ar"
            ],
            [
                "country" => "MR",
                "language" => "fr"
            ],
            [
                "country" => "MR",
                "language" => "wo"
            ],
            [
                "country" => "MS",
                "language" => "en"
            ],
            [
                "country" => "MT",
                "language" => "mt"
            ],
            [
                "country" => "MT",
                "language" => "en"
            ],
            [
                "country" => "MU",
                "language" => "en"
            ],
            [
                "country" => "MU",
                "language" => "fr"
            ],
            [
                "country" => "MV",
                "language" => "dv"
            ],
            [
                "country" => "MV",
                "language" => "en"
            ],
            [
                "country" => "MW",
                "language" => "ny"
            ],
            [
                "country" => "MX",
                "language" => "es"
            ],
            [
                "country" => "MY",
                "language" => "ms"
            ],
            [
                "country" => "MY",
                "language" => "en"
            ],
            [
                "country" => "MY",
                "language" => "zh"
            ],
            [
                "country" => "MY",
                "language" => "ta"
            ],
            [
                "country" => "MY",
                "language" => "te"
            ],
            [
                "country" => "MY",
                "language" => "ml"
            ],
            [
                "country" => "MY",
                "language" => "pa"
            ],
            [
                "country" => "MY",
                "language" => "th"
            ],
            [
                "country" => "MZ",
                "language" => "pt"
            ],
            [
                "country" => "NA",
                "language" => "en"
            ],
            [
                "country" => "NA",
                "language" => "af"
            ],
            [
                "country" => "NA",
                "language" => "de"
            ],
            [
                "country" => "NA",
                "language" => "hz"
            ],
            [
                "country" => "NC",
                "language" => "fr"
            ],
            [
                "country" => "NE",
                "language" => "fr"
            ],
            [
                "country" => "NE",
                "language" => "ha"
            ],
            [
                "country" => "NE",
                "language" => "kr"
            ],
            [
                "country" => "NF",
                "language" => "en"
            ],
            [
                "country" => "NG",
                "language" => "en"
            ],
            [
                "country" => "NG",
                "language" => "ha"
            ],
            [
                "country" => "NG",
                "language" => "yo"
            ],
            [
                "country" => "NG",
                "language" => "ig"
            ],
            [
                "country" => "NG",
                "language" => "ff"
            ],
            [
                "country" => "NI",
                "language" => "es"
            ],
            [
                "country" => "NI",
                "language" => "en"
            ],
            [
                "country" => "NL",
                "language" => "nl"
            ],
            [
                "country" => "NL",
                "language" => "fy"
            ],
            [
                "country" => "NO",
                "language" => "no"
            ],
            [
                "country" => "NO",
                "language" => "nb"
            ],
            [
                "country" => "NO",
                "language" => "nn"
            ],
            [
                "country" => "NO",
                "language" => "se"
            ],
            [
                "country" => "NO",
                "language" => "fi"
            ],
            [
                "country" => "NP",
                "language" => "ne"
            ],
            [
                "country" => "NP",
                "language" => "en"
            ],
            [
                "country" => "NR",
                "language" => "na"
            ],
            [
                "country" => "NR",
                "language" => "en"
            ],
            [
                "country" => "NU",
                "language" => "en"
            ],
            [
                "country" => "NZ",
                "language" => "en"
            ],
            [
                "country" => "NZ",
                "language" => "mi"
            ],
            [
                "country" => "OM",
                "language" => "ar"
            ],
            [
                "country" => "OM",
                "language" => "en"
            ],
            [
                "country" => "OM",
                "language" => "ur"
            ],
            [
                "country" => "PA",
                "language" => "es"
            ],
            [
                "country" => "PA",
                "language" => "en"
            ],
            [
                "country" => "PE",
                "language" => "es"
            ],
            [
                "country" => "PE",
                "language" => "qu"
            ],
            [
                "country" => "PE",
                "language" => "ay"
            ],
            [
                "country" => "PF",
                "language" => "fr"
            ],
            [
                "country" => "PF",
                "language" => "ty"
            ],
            [
                "country" => "PG",
                "language" => "en"
            ],
            [
                "country" => "PG",
                "language" => "ho"
            ],
            [
                "country" => "PH",
                "language" => "tl"
            ],
            [
                "country" => "PH",
                "language" => "en"
            ],
            [
                "country" => "PK",
                "language" => "ur"
            ],
            [
                "country" => "PK",
                "language" => "en"
            ],
            [
                "country" => "PK",
                "language" => "pa"
            ],
            [
                "country" => "PK",
                "language" => "sd"
            ],
            [
                "country" => "PK",
                "language" => "ps"
            ],
            [
                "country" => "PL",
                "language" => "pl"
            ],
            [
                "country" => "PM",
                "language" => "fr"
            ],
            [
                "country" => "PN",
                "language" => "en"
            ],
            [
                "country" => "PR",
                "language" => "en"
            ],
            [
                "country" => "PR",
                "language" => "es"
            ],
            [
                "country" => "PS",
                "language" => "ar"
            ],
            [
                "country" => "PT",
                "language" => "pt"
            ],
            [
                "country" => "PW",
                "language" => "en"
            ],
            [
                "country" => "PW",
                "language" => "ja"
            ],
            [
                "country" => "PW",
                "language" => "zh"
            ],
            [
                "country" => "PY",
                "language" => "es"
            ],
            [
                "country" => "PY",
                "language" => "gn"
            ],
            [
                "country" => "QA",
                "language" => "ar"
            ],
            [
                "country" => "QA",
                "language" => "es"
            ],
            [
                "country" => "RE",
                "language" => "fr"
            ],
            [
                "country" => "RO",
                "language" => "ro"
            ],
            [
                "country" => "RO",
                "language" => "hu"
            ],
            [
                "country" => "RS",
                "language" => "sr"
            ],
            [
                "country" => "RS",
                "language" => "hu"
            ],
            [
                "country" => "RS",
                "language" => "bs"
            ],
            [
                "country" => "RU",
                "language" => "ru"
            ],
            [
                "country" => "RU",
                "language" => "tt"
            ],
            [
                "country" => "RU",
                "language" => "kv"
            ],
            [
                "country" => "RU",
                "language" => "ce"
            ],
            [
                "country" => "RU",
                "language" => "cv"
            ],
            [
                "country" => "RU",
                "language" => "ba"
            ],
            [
                "country" => "RW",
                "language" => "rw"
            ],
            [
                "country" => "RW",
                "language" => "en"
            ],
            [
                "country" => "RW",
                "language" => "fr"
            ],
            [
                "country" => "RW",
                "language" => "sw"
            ],
            [
                "country" => "SA",
                "language" => "ar"
            ],
            [
                "country" => "SB",
                "language" => "en"
            ],
            [
                "country" => "SC",
                "language" => "en"
            ],
            [
                "country" => "SC",
                "language" => "fr"
            ],
            [
                "country" => "SD",
                "language" => "ar"
            ],
            [
                "country" => "SD",
                "language" => "en"
            ],
            [
                "country" => "SE",
                "language" => "sv"
            ],
            [
                "country" => "SE",
                "language" => "se"
            ],
            [
                "country" => "SE",
                "language" => "fi"
            ],
            [
                "country" => "SG",
                "language" => "en"
            ],
            [
                "country" => "SG",
                "language" => "ms"
            ],
            [
                "country" => "SG",
                "language" => "ta"
            ],
            [
                "country" => "SG",
                "language" => "zh"
            ],
            [
                "country" => "SH",
                "language" => "en"
            ],
            [
                "country" => "SI",
                "language" => "sl"
            ],
            [
                "country" => "SJ",
                "language" => "no"
            ],
            [
                "country" => "SJ",
                "language" => "ru"
            ],
            [
                "country" => "SK",
                "language" => "sk"
            ],
            [
                "country" => "SK",
                "language" => "hu"
            ],
            [
                "country" => "SL",
                "language" => "en"
            ],
            [
                "country" => "SM",
                "language" => "it"
            ],
            [
                "country" => "SN",
                "language" => "fr"
            ],
            [
                "country" => "SN",
                "language" => "wo"
            ],
            [
                "country" => "SO",
                "language" => "so"
            ],
            [
                "country" => "SO",
                "language" => "ar"
            ],
            [
                "country" => "SO",
                "language" => "it"
            ],
            [
                "country" => "SO",
                "language" => "en"
            ],
            [
                "country" => "SR",
                "language" => "nl"
            ],
            [
                "country" => "SR",
                "language" => "en"
            ],
            [
                "country" => "SR",
                "language" => "jv"
            ],
            [
                "country" => "SS",
                "language" => "en"
            ],
            [
                "country" => "ST",
                "language" => "pt"
            ],
            [
                "country" => "SV",
                "language" => "es"
            ],
            [
                "country" => "SX",
                "language" => "nl"
            ],
            [
                "country" => "SX",
                "language" => "en"
            ],
            [
                "country" => "SY",
                "language" => "ar"
            ],
            [
                "country" => "SY",
                "language" => "ku"
            ],
            [
                "country" => "SY",
                "language" => "hy"
            ],
            [
                "country" => "SY",
                "language" => "fr"
            ],
            [
                "country" => "SY",
                "language" => "en"
            ],
            [
                "country" => "SZ",
                "language" => "en"
            ],
            [
                "country" => "SZ",
                "language" => "ss"
            ],
            [
                "country" => "TC",
                "language" => "en"
            ],
            [
                "country" => "TD",
                "language" => "fr"
            ],
            [
                "country" => "TD",
                "language" => "ar"
            ],
            [
                "country" => "TF",
                "language" => "fr"
            ],
            [
                "country" => "TG",
                "language" => "fr"
            ],
            [
                "country" => "TG",
                "language" => "ee"
            ],
            [
                "country" => "TG",
                "language" => "ha"
            ],
            [
                "country" => "TH",
                "language" => "th"
            ],
            [
                "country" => "TH",
                "language" => "en"
            ],
            [
                "country" => "TJ",
                "language" => "tg"
            ],
            [
                "country" => "TJ",
                "language" => "ru"
            ],
            [
                "country" => "TK",
                "language" => "en"
            ],
            [
                "country" => "TL",
                "language" => "pt"
            ],
            [
                "country" => "TL",
                "language" => "id"
            ],
            [
                "country" => "TL",
                "language" => "en"
            ],
            [
                "country" => "TM",
                "language" => "tk"
            ],
            [
                "country" => "TM",
                "language" => "ru"
            ],
            [
                "country" => "TM",
                "language" => "uz"
            ],
            [
                "country" => "TN",
                "language" => "ar"
            ],
            [
                "country" => "TN",
                "language" => "fr"
            ],
            [
                "country" => "TO",
                "language" => "to"
            ],
            [
                "country" => "TO",
                "language" => "en"
            ],
            [
                "country" => "TR",
                "language" => "tr"
            ],
            [
                "country" => "TR",
                "language" => "ku"
            ],
            [
                "country" => "TR",
                "language" => "az"
            ],
            [
                "country" => "TR",
                "language" => "av"
            ],
            [
                "country" => "TT",
                "language" => "en"
            ],
            [
                "country" => "TT",
                "language" => "fr"
            ],
            [
                "country" => "TT",
                "language" => "es"
            ],
            [
                "country" => "TT",
                "language" => "zh"
            ],
            [
                "country" => "TV",
                "language" => "en"
            ],
            [
                "country" => "TV",
                "language" => "sm"
            ],
            [
                "country" => "TW",
                "language" => "zh"
            ],
            [
                "country" => "TW",
                "language" => "zh"
            ],
            [
                "country" => "TZ",
                "language" => "sw"
            ],
            [
                "country" => "TZ",
                "language" => "en"
            ],
            [
                "country" => "TZ",
                "language" => "ar"
            ],
            [
                "country" => "UA",
                "language" => "uk"
            ],
            [
                "country" => "UA",
                "language" => "ru"
            ],
            [
                "country" => "UA",
                "language" => "pl"
            ],
            [
                "country" => "UA",
                "language" => "hu"
            ],
            [
                "country" => "UG",
                "language" => "en"
            ],
            [
                "country" => "UG",
                "language" => "lg"
            ],
            [
                "country" => "UG",
                "language" => "sw"
            ],
            [
                "country" => "UG",
                "language" => "ar"
            ],
            [
                "country" => "UM",
                "language" => "en"
            ],
            [
                "country" => "US",
                "language" => "en"
            ],
            [
                "country" => "US",
                "language" => "es"
            ],
            [
                "country" => "US",
                "language" => "fr"
            ],
            [
                "country" => "UY",
                "language" => "es"
            ],
            [
                "country" => "UZ",
                "language" => "uz"
            ],
            [
                "country" => "UZ",
                "language" => "ru"
            ],
            [
                "country" => "UZ",
                "language" => "tg"
            ],
            [
                "country" => "VA",
                "language" => "la"
            ],
            [
                "country" => "VA",
                "language" => "it"
            ],
            [
                "country" => "VA",
                "language" => "fr"
            ],
            [
                "country" => "VC",
                "language" => "en"
            ],
            [
                "country" => "VC",
                "language" => "fr"
            ],
            [
                "country" => "VE",
                "language" => "es"
            ],
            [
                "country" => "VG",
                "language" => "en"
            ],
            [
                "country" => "VI",
                "language" => "en"
            ],
            [
                "country" => "VN",
                "language" => "vi"
            ],
            [
                "country" => "VN",
                "language" => "en"
            ],
            [
                "country" => "VN",
                "language" => "fr"
            ],
            [
                "country" => "VN",
                "language" => "zh"
            ],
            [
                "country" => "VN",
                "language" => "km"
            ],
            [
                "country" => "VU",
                "language" => "bi"
            ],
            [
                "country" => "VU",
                "language" => "en"
            ],
            [
                "country" => "VU",
                "language" => "fr"
            ],
            [
                "country" => "WF",
                "language" => "fr"
            ],
            [
                "country" => "WS",
                "language" => "sm"
            ],
            [
                "country" => "WS",
                "language" => "en"
            ],
            [
                "country" => "XK",
                "language" => "sq"
            ],
            [
                "country" => "XK",
                "language" => "sr"
            ],
            [
                "country" => "YE",
                "language" => "ar"
            ],
            [
                "country" => "YT",
                "language" => "fr"
            ],
            [
                "country" => "ZA",
                "language" => "xh"
            ],
            [
                "country" => "ZA",
                "language" => "af"
            ],
            [
                "country" => "ZA",
                "language" => "en"
            ],
            [
                "country" => "ZA",
                "language" => "tn"
            ],
            [
                "country" => "ZA",
                "language" => "st"
            ],
            [
                "country" => "ZA",
                "language" => "ts"
            ],
            [
                "country" => "ZA",
                "language" => "ss"
            ],
            [
                "country" => "ZA",
                "language" => "ve"
            ],
            [
                "country" => "ZA",
                "language" => "nr"
            ],
            [
                "country" => "ZM",
                "language" => "en"
            ],
            [
                "country" => "ZM",
                "language" => "ny"
            ],
            [
                "country" => "ZW",
                "language" => "en"
            ],
            [
                "country" => "ZW",
                "language" => "sn"
            ],
            [
                "country" => "ZW",
                "language" => "nr"
            ],
            [
                "country" => "ZW",
                "language" => "nd"
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('language_map')->truncate();
        foreach ($languages as $languageMap) 
        {
            $countryName = $languageMap["country"];
            $country = Country::where('code', $countryName)->first();

            if(is_null($country))
                throw new \Exception("unable to find country: $countryName", 1);

            $languageMap['country'] = $country->id; 

            $languageName = $languageMap["language"];
            $language = Language::where('code', $languageName)->first();

            if(is_null($language))
                throw new \Exception("unable to find language: $languageName", 1);

            $languageMap['language'] = $language->id; 

            
            LanguageMap::create($languageMap);
            $this->command->info('Inserted language from' . $language['name'] . ' [' . count($languageMap) . ']..');
        }
        Schema::enableForeignKeyConstraints();
    }
}
