<?php

namespace Caiocesar173\Utils\Database\Seeders\GeoInfo\Language;

use Caiocesar173\Utils\Entities\Language;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LanguageTableSeeder extends Seeder
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
                "code" => "ab",
                "name" => "Abkhaz",
                "native" => "аҧсуа"
            ],
            [
                "code" => "aa",
                "name" => "Afar",
                "native" => "Afaraf"
            ],
            [
                "code" => "af",
                "name" => "Afrikaans",
                "native" => "Afrikaans"
            ],
            [
                "code" => "ak",
                "name" => "Akan",
                "native" => "Akan"
            ],
            [
                "code" => "sq",
                "name" => "Albanian",
                "native" => "Shqip"
            ],
            [
                "code" => "am",
                "name" => "Amharic",
                "native" => "አማርኛ"
            ],
            [
                "code" => "ar",
                "name" => "Arabic",
                "native" => "العربية"
            ],
            [
                "code" => "an",
                "name" => "Aragonese",
                "native" => "Aragonés"
            ],
            [
                "code" => "hy",
                "name" => "Armenian",
                "native" => "Հայերեն"
            ],
            [
                "code" => "as",
                "name" => "Assamese",
                "native" => "অসমীয়া"
            ],
            [
                "code" => "av",
                "name" => "Avaric",
                "native" => "авар мацӀ, магӀарул мацӀ"
            ],
            [
                "code" => "ae",
                "name" => "Avestan",
                "native" => "avesta"
            ],
            [
                "code" => "ay",
                "name" => "Aymara",
                "native" => "aymar aru"
            ],
            [
                "code" => "az",
                "name" => "Azerbaijani",
                "native" => "azərbaycan dili"
            ],
            [
                "code" => "bm",
                "name" => "Bambara",
                "native" => "bamanankan"
            ],
            [
                "code" => "ba",
                "name" => "Bashkir",
                "native" => "башҡорт теле"
            ],
            [
                "code" => "eu",
                "name" => "Basque",
                "native" => "euskara, euskera"
            ],
            [
                "code" => "be",
                "name" => "Belarusian",
                "native" => "Беларуская"
            ],
            [
                "code" => "bn",
                "name" => "Bengali",
                "native" => "বাংলা"
            ],
            [
                "code" => "bh",
                "name" => "Bihari",
                "native" => "भोजपुरी"
            ],
            [
                "code" => "bi",
                "name" => "Bislama",
                "native" => "Bislama"
            ],
            [
                "code" => "bs",
                "name" => "Bosnian",
                "native" => "bosanski jezik"
            ],
            [
                "code" => "br",
                "name" => "Breton",
                "native" => "brezhoneg"
            ],
            [
                "code" => "bg",
                "name" => "Bulgarian",
                "native" => "български език"
            ],
            [
                "code" => "my",
                "name" => "Burmese",
                "native" => "ဗမာစာ"
            ],
            [
                "code" => "ca",
                "name" => "Catalan; Valencian",
                "native" => "Català"
            ],
            [
                "code" => "ch",
                "name" => "Chamorro",
                "native" => "Chamoru"
            ],
            [
                "code" => "ce",
                "name" => "Chechen",
                "native" => "нохчийн мотт"
            ],
            [
                "code" => "ny",
                "name" => "Chichewa; Chewa; Nyanja",
                "native" => "chiCheŵa, chinyanja"
            ],
            [
                "code" => "zh",
                "name" => "Chinese",
                "native" => "中文 (Zhōngwén), 汉语, 漢語"
            ],
            [
                "code" => "cv",
                "name" => "Chuvash",
                "native" => "чӑваш чӗлхи"
            ],
            [
                "code" => "kw",
                "name" => "Cornish",
                "native" => "Kernewek"
            ],
            [
                "code" => "co",
                "name" => "Corsican",
                "native" => "corsu, lingua corsa"
            ],
            [
                "code" => "cr",
                "name" => "Cree",
                "native" => "ᓀᐦᐃᔭᐍᐏᐣ"
            ],
            [
                "code" => "hr",
                "name" => "Croatian",
                "native" => "hrvatski"
            ],
            [
                "code" => "cs",
                "name" => "Czech",
                "native" => "česky, čeština"
            ],
            [
                "code" => "da",
                "name" => "Danish",
                "native" => "dansk"
            ],
            [
                "code" => "dv",
                "name" => "Divehi; Dhivehi; Maldivian;",
                "native" => "ދިވެހި"
            ],
            [
                "code" => "nl",
                "name" => "Dutch",
                "native" => "Nederlands, Vlaams"
            ],
            [
                "code" => "en",
                "name" => "English",
                "native" => "English"
            ],
            [
                "code" => "eo",
                "name" => "Esperanto",
                "native" => "Esperanto"
            ],
            [
                "code" => "et",
                "name" => "Estonian",
                "native" => "eesti, eesti keel"
            ],
            [
                "code" => "ee",
                "name" => "Ewe",
                "native" => "Eʋegbe"
            ],
            [
                "code" => "fo",
                "name" => "Faroese",
                "native" => "føroyskt"
            ],
            [
                "code" => "fj",
                "name" => "Fijian",
                "native" => "vosa Vakaviti"
            ],
            [
                "code" => "fi",
                "name" => "Finnish",
                "native" => "suomi, suomen kieli"
            ],
            [
                "code" => "fr",
                "name" => "French",
                "native" => "français, langue française"
            ],
            [
                "code" => "ff",
                "name" => "Fula; Fulah; Pulaar; Pular",
                "native" => "Fulfulde, Pulaar, Pular"
            ],
            [
                "code" => "gl",
                "name" => "Galician",
                "native" => "Galego"
            ],
            [
                "code" => "ka",
                "name" => "Georgian",
                "native" => "ქართული"
            ],
            [
                "code" => "de",
                "name" => "German",
                "native" => "Deutsch"
            ],
            [
                "code" => "el",
                "name" => "Greek, Modern",
                "native" => "Ελληνικά"
            ],
            [
                "code" => "gn",
                "name" => "Guaraní",
                "native" => "Avañeẽ"
            ],
            [
                "code" => "gu",
                "name" => "Gujarati",
                "native" => "ગુજરાતી"
            ],
            [
                "code" => "ht",
                "name" => "Haitian; Haitian Creole",
                "native" => "Kreyòl ayisyen"
            ],
            [
                "code" => "ha",
                "name" => "Hausa",
                "native" => "Hausa, هَوُسَ"
            ],
            [
                "code" => "he",
                "name" => "Hebrew (modern)",
                "native" => "עברית"
            ],
            [
                "code" => "hz",
                "name" => "Herero",
                "native" => "Otjiherero"
            ],
            [
                "code" => "hi",
                "name" => "Hindi",
                "native" => "हिन्दी, हिंदी"
            ],
            [
                "code" => "ho",
                "name" => "Hiri Motu",
                "native" => "Hiri Motu"
            ],
            [
                "code" => "hu",
                "name" => "Hungarian",
                "native" => "Magyar"
            ],
            [
                "code" => "ia",
                "name" => "Interlingua",
                "native" => "Interlingua"
            ],
            [
                "code" => "id",
                "name" => "Indonesian",
                "native" => "Bahasa Indonesia"
            ],
            [
                "code" => "ie",
                "name" => "Interlingue",
                "native" => "Originally called Occidental; then Interlingue after WWII"
            ],
            [
                "code" => "ga",
                "name" => "Irish",
                "native" => "Gaeilge"
            ],
            [
                "code" => "ig",
                "name" => "Igbo",
                "native" => "Asụsụ Igbo"
            ],
            [
                "code" => "ik",
                "name" => "Inupiaq",
                "native" => "Iñupiaq, Iñupiatun"
            ],
            [
                "code" => "io",
                "name" => "Ido",
                "native" => "Ido"
            ],
            [
                "code" => "is",
                "name" => "Icelandic",
                "native" => "Íslenska"
            ],
            [
                "code" => "it",
                "name" => "Italian",
                "native" => "Italiano"
            ],
            [
                "code" => "iu",
                "name" => "Inuktitut",
                "native" => "ᐃᓄᒃᑎᑐᑦ"
            ],
            [
                "code" => "ja",
                "name" => "Japanese",
                "native" => "日本語 (にほんご／にっぽんご)"
            ],
            [
                "code" => "jv",
                "name" => "Javanese",
                "native" => "basa Jawa"
            ],
            [
                "code" => "kl",
                "name" => "Kalaallisut, Greenlandic",
                "native" => "kalaallisut, kalaallit oqaasii"
            ],
            [
                "code" => "kn",
                "name" => "Kannada",
                "native" => "ಕನ್ನಡ"
            ],
            [
                "code" => "kr",
                "name" => "Kanuri",
                "native" => "Kanuri"
            ],
            [
                "code" => "ks",
                "name" => "Kashmiri",
                "native" => "कश्मीरी, كشميري‎"
            ],
            [
                "code" => "kk",
                "name" => "Kazakh",
                "native" => "Қазақ тілі"
            ],
            [
                "code" => "km",
                "name" => "Khmer",
                "native" => "ភាសាខ្មែរ"
            ],
            [
                "code" => "ki",
                "name" => "Kikuyu, Gikuyu",
                "native" => "Gĩkũyũ"
            ],
            [
                "code" => "rw",
                "name" => "Kinyarwanda",
                "native" => "Ikinyarwanda"
            ],
            [
                "code" => "ky",
                "name" => "Kirghiz, Kyrgyz",
                "native" => "кыргыз тили"
            ],
            [
                "code" => "kv",
                "name" => "Komi",
                "native" => "коми кыв"
            ],
            [
                "code" => "kg",
                "name" => "Kongo",
                "native" => "KiKongo"
            ],
            [
                "code" => "ko",
                "name" => "Korean",
                "native" => "한국어 (韓國語), 조선말 (朝鮮語)"
            ],
            [
                "code" => "ku",
                "name" => "Kurdish",
                "native" => "Kurdî, كوردی‎"
            ],
            [
                "code" => "kj",
                "name" => "Kwanyama, Kuanyama",
                "native" => "Kuanyama"
            ],
            [
                "code" => "la",
                "name" => "Latin",
                "native" => "latine, lingua latina"
            ],
            [
                "code" => "lb",
                "name" => "Luxembourgish, Letzeburgesch",
                "native" => "Lëtzebuergesch"
            ],
            [
                "code" => "lg",
                "name" => "Luganda",
                "native" => "Luganda"
            ],
            [
                "code" => "li",
                "name" => "Limburgish, Limburgan, Limburger",
                "native" => "Limburgs"
            ],
            [
                "code" => "ln",
                "name" => "Lingala",
                "native" => "Lingála"
            ],
            [
                "code" => "lo",
                "name" => "Lao",
                "native" => "ພາສາລາວ"
            ],
            [
                "code" => "lt",
                "name" => "Lithuanian",
                "native" => "lietuvių kalba"
            ],
            [
                "code" => "lu",
                "name" => "Luba-Katanga",
                "native" => ""
            ],
            [
                "code" => "lv",
                "name" => "Latvian",
                "native" => "latviešu valoda"
            ],
            [
                "code" => "gv",
                "name" => "Manx",
                "native" => "Gaelg, Gailck"
            ],
            [
                "code" => "mk",
                "name" => "Macedonian",
                "native" => "македонски јазик"
            ],
            [
                "code" => "mg",
                "name" => "Malagasy",
                "native" => "Malagasy fiteny"
            ],
            [
                "code" => "ms",
                "name" => "Malay",
                "native" => "bahasa Melayu, بهاس ملايو‎"
            ],
            [
                "code" => "ml",
                "name" => "Malayalam",
                "native" => "മലയാളം"
            ],
            [
                "code" => "mt",
                "name" => "Maltese",
                "native" => "Malti"
            ],
            [
                "code" => "mi",
                "name" => "Māori",
                "native" => "te reo Māori"
            ],
            [
                "code" => "mr",
                "name" => "Marathi (Marāṭhī)",
                "native" => "मराठी"
            ],
            [
                "code" => "mh",
                "name" => "Marshallese",
                "native" => "Kajin M̧ajeļ"
            ],
            [
                "code" => "mn",
                "name" => "Mongolian",
                "native" => "монгол"
            ],
            [
                "code" => "na",
                "name" => "Nauru",
                "native" => "Ekakairũ Naoero"
            ],
            [
                "code" => "nv",
                "name" => "Navajo, Navaho",
                "native" => "Diné bizaad, Dinékʼehǰí"
            ],
            [
                "code" => "nb",
                "name" => "Norwegian Bokmål",
                "native" => "Norsk bokmål"
            ],
            [
                "code" => "nd",
                "name" => "North Ndebele",
                "native" => "isiNdebele"
            ],
            [
                "code" => "ne",
                "name" => "Nepali",
                "native" => "नेपाली"
            ],
            [
                "code" => "ng",
                "name" => "Ndonga",
                "native" => "Owambo"
            ],
            [
                "code" => "nn",
                "name" => "Norwegian Nynorsk",
                "native" => "Norsk nynorsk"
            ],
            [
                "code" => "no",
                "name" => "Norwegian",
                "native" => "Norsk"
            ],
            [
                "code" => "ii",
                "name" => "Nuosu",
                "native" => "ꆈꌠ꒿ Nuosuhxop"
            ],
            [
                "code" => "nr",
                "name" => "South Ndebele",
                "native" => "isiNdebele"
            ],
            [
                "code" => "oc",
                "name" => "Occitan",
                "native" => "Occitan"
            ],
            [
                "code" => "oj",
                "name" => "Ojibwe, Ojibwa",
                "native" => "ᐊᓂᔑᓈᐯᒧᐎᓐ"
            ],
            [
                "code" => "cu",
                "name" => "Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic",
                "native" => "ѩзыкъ словѣньскъ"
            ],
            [
                "code" => "om",
                "name" => "Oromo",
                "native" => "Afaan Oromoo"
            ],
            [
                "code" => "or",
                "name" => "Oriya",
                "native" => "ଓଡ଼ିଆ"
            ],
            [
                "code" => "os",
                "name" => "Ossetian, Ossetic",
                "native" => "ирон æвзаг"
            ],
            [
                "code" => "pa",
                "name" => "Panjabi, Punjabi",
                "native" => "ਪੰਜਾਬੀ, پنجابی‎"
            ],
            [
                "code" => "pi",
                "name" => "Pāli",
                "native" => "पाऴि"
            ],
            [
                "code" => "fa",
                "name" => "Persian",
                "native" => "فارسی"
            ],
            [
                "code" => "pl",
                "name" => "Polish",
                "native" => "polski"
            ],
            [
                "code" => "ps",
                "name" => "Pashto, Pushto",
                "native" => "پښتو"
            ],
            [
                "code" => "pt",
                "name" => "Portuguese",
                "native" => "Português"
            ],
            [
                "code" => "qu",
                "name" => "Quechua",
                "native" => "Runa Simi, Kichwa"
            ],
            [
                "code" => "rm",
                "name" => "Romansh",
                "native" => "rumantsch grischun"
            ],
            [
                "code" => "rn",
                "name" => "Kirundi",
                "native" => "kiRundi"
            ],
            [
                "code" => "ro",
                "name" => "Romanian, Moldavian, Moldovan",
                "native" => "română"
            ],
            [
                "code" => "ru",
                "name" => "Russian",
                "native" => "русский язык"
            ],
            [
                "code" => "sa",
                "name" => "Sanskrit (Saṁskṛta)",
                "native" => "संस्कृतम्"
            ],
            [
                "code" => "sc",
                "name" => "Sardinian",
                "native" => "sardu"
            ],
            [
                "code" => "sd",
                "name" => "Sindhi",
                "native" => "सिन्धी, سنڌي، سندھی‎"
            ],
            [
                "code" => "se",
                "name" => "Northern Sami",
                "native" => "Davvisámegiella"
            ],
            [
                "code" => "sm",
                "name" => "Samoan",
                "native" => "gagana faa Samoa"
            ],
            [
                "code" => "sg",
                "name" => "Sango",
                "native" => "yângâ tî sängö"
            ],
            [
                "code" => "sr",
                "name" => "Serbian",
                "native" => "српски језик"
            ],
            [
                "code" => "gd",
                "name" => "Scottish Gaelic; Gaelic",
                "native" => "Gàidhlig"
            ],
            [
                "code" => "sn",
                "name" => "Shona",
                "native" => "chiShona"
            ],
            [
                "code" => "si",
                "name" => "Sinhala, Sinhalese",
                "native" => "සිංහල"
            ],
            [
                "code" => "sk",
                "name" => "Slovak",
                "native" => "slovenčina"
            ],
            [
                "code" => "sl",
                "name" => "Slovene",
                "native" => "slovenščina"
            ],
            [
                "code" => "so",
                "name" => "Somali",
                "native" => "Soomaaliga, af Soomaali"
            ],
            [
                "code" => "st",
                "name" => "Southern Sotho",
                "native" => "Sesotho"
            ],
            [
                "code" => "es",
                "name" => "Spanish; Castilian",
                "native" => "español, castellano"
            ],
            [
                "code" => "su",
                "name" => "Sundanese",
                "native" => "Basa Sunda"
            ],
            [
                "code" => "sw",
                "name" => "Swahili",
                "native" => "Kiswahili"
            ],
            [
                "code" => "ss",
                "name" => "Swati",
                "native" => "SiSwati"
            ],
            [
                "code" => "sv",
                "name" => "Swedish",
                "native" => "svenska"
            ],
            [
                "code" => "ta",
                "name" => "Tamil",
                "native" => "தமிழ்"
            ],
            [
                "code" => "te",
                "name" => "Telugu",
                "native" => "తెలుగు"
            ],
            [
                "code" => "tg",
                "name" => "Tajik",
                "native" => "тоҷикӣ, toğikī, تاجیکی‎"
            ],
            [
                "code" => "th",
                "name" => "Thai",
                "native" => "ไทย"
            ],
            [
                "code" => "ti",
                "name" => "Tigrinya",
                "native" => "ትግርኛ"
            ],
            [
                "code" => "bo",
                "name" => "Tibetan Standard, Tibetan, Central",
                "native" => "བོད་ཡིག"
            ],
            [
                "code" => "tk",
                "name" => "Turkmen",
                "native" => "Türkmen, Түркмен"
            ],
            [
                "code" => "tl",
                "name" => "Tagalog",
                "native" => "Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔"
            ],
            [
                "code" => "tn",
                "name" => "Tswana",
                "native" => "Setswana"
            ],
            [
                "code" => "to",
                "name" => "Tonga (Tonga Islands)",
                "native" => "faka Tonga"
            ],
            [
                "code" => "tr",
                "name" => "Turkish",
                "native" => "Türkçe"
            ],
            [
                "code" => "ts",
                "name" => "Tsonga",
                "native" => "Xitsonga"
            ],
            [
                "code" => "tt",
                "name" => "Tatar",
                "native" => "татарча, tatarça, تاتارچا‎"
            ],
            [
                "code" => "tw",
                "name" => "Twi",
                "native" => "Twi"
            ],
            [
                "code" => "ty",
                "name" => "Tahitian",
                "native" => "Reo Tahiti"
            ],
            [
                "code" => "ug",
                "name" => "Uighur, Uyghur",
                "native" => "Uyƣurqə, ئۇيغۇرچە‎"
            ],
            [
                "code" => "uk",
                "name" => "Ukrainian",
                "native" => "українська"
            ],
            [
                "code" => "ur",
                "name" => "Urdu",
                "native" => "اردو"
            ],
            [
                "code" => "uz",
                "name" => "Uzbek",
                "native" => "zbek, Ўзбек, أۇزبېك‎"
            ],
            [
                "code" => "ve",
                "name" => "Venda",
                "native" => "Tshivenḓa"
            ],
            [
                "code" => "vi",
                "name" => "Vietnamese",
                "native" => "Tiếng Việt"
            ],
            [
                "code" => "vo",
                "name" => "Volapük",
                "native" => "Volapük"
            ],
            [
                "code" => "wa",
                "name" => "Walloon",
                "native" => "Walon"
            ],
            [
                "code" => "cy",
                "name" => "Welsh",
                "native" => "Cymraeg"
            ],
            [
                "code" => "wo",
                "name" => "Wolof",
                "native" => "Wollof"
            ],
            [
                "code" => "fy",
                "name" => "Western Frisian",
                "native" => "Frysk"
            ],
            [
                "code" => "xh",
                "name" => "Xhosa",
                "native" => "isiXhosa"
            ],
            [
                "code" => "yi",
                "name" => "Yiddish",
                "native" => "ייִדיש"
            ],
            [
                "code" => "yo",
                "name" => "Yoruba",
                "native" => "Yorùbá"
            ],
            [
                "code" => "za",
                "name" => "Zhuang, Chuang",
                "native" => "Saɯ cueŋƅ, Saw cuengh"
            ]
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('languages')->truncate();
        $counter = 0;
        foreach ($languages as $language) 
        {       
            $save = Language::create($language);
            if (is_string($save))
                throw new \Exception($save, 1);
            
            if($this->command)
                $this->command->info("Inserted language {$language["name"]} from  {$language["code"]} [$counter].");
            else
                echo("Inserted language {$language["name"]} from  {$language["code"]} [$counter].\n");

            $counter += 1;
        }
        Schema::enableForeignKeyConstraints();
    }
}
