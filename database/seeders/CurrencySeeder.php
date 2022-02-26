<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->delete();
        $currencies = array(
            array("id" => 1, "name" => "Afghan Afghani", "code" => "AFA", "symbol" => "؋"),
            array("id" => 2, "name" => "Albanian Lek", "code" => "ALL", "symbol" => "Lek"),
            array("id" => 3, "name" => "Algerian Dinar", "code" => "DZD", "symbol" => "دج"),
            array("id" => 4, "name" => "Angolan Kwanza", "code" => "AOA", "symbol" => "Kz"),
            array("id" => 5, "name" => "Argentine Peso", "code" => "ARS", "symbol" => "$"),
            array("id" => 6, "name" => "Armenian Dram", "code" => "AMD", "symbol" => "֏"),
            array("id" => 7, "name" => "Aruban Florin", "code" => "AWG", "symbol" => "ƒ"),
            array("id" => 8, "name" => "Australian Dollar", "code" => "AUD", "symbol" => "$"),
            array("id" => 9, "name" => "Azerbaijani Manat", "code" => "AZN", "symbol" => "m"),
            array("id" => 10, "name" => "Bahamian Dollar", "code" => "BSD", "symbol" => "B$"),
            array("id" => 11, "name" => "Bahraini Dinar", "code" => "BHD", "symbol" => ".د.ب"),
            array("id" => 12, "name" => "Bangladeshi Taka", "code" => "BDT", "symbol" => "৳"),
            array("id" => 13, "name" => "Barbadian Dollar", "code" => "BBD", "symbol" => "Bds$"),
            array("id" => 14, "name" => "Belarusian Ruble", "code" => "BYR", "symbol" => "Br"),
            array("id" => 15, "name" => "Belgian Franc", "code" => "BEF", "symbol" => "fr"),
            array("id" => 16, "name" => "Belize Dollar", "code" => "BZD", "symbol" => "$"),
            array("id" => 17, "name" => "Bermudan Dollar", "code" => "BMD", "symbol" => "$"),
            array("id" => 18, "name" => "Bhutanese Ngultrum", "code" => "BTN", "symbol" => "Nu."),
            array("id" => 19, "name" => "Bitcoin", "code" => "BTC", "symbol" => "฿"),
            array("id" => 20, "name" => "Bolivian Boliviano", "code" => "BOB", "symbol" => "Bs."),
            array("id" => 21, "name" => "Bosnia", "code" => "BAM", "symbol" => "KM"),
            array("id" => 22, "name" => "Botswanan Pula", "code" => "BWP", "symbol" => "P"),
            array("id" => 23, "name" => "Brazilian Real", "code" => "BRL", "symbol" => "R$"),
            array("id" => 24, "name" => "British Pound Sterling", "code" => "GBP", "symbol" => "£"),
            array("id" => 25, "name" => "Brunei Dollar", "code" => "BND", "symbol" => "B$"),
            array("id" => 26, "name" => "Bulgarian Lev", "code" => "BGN", "symbol" => "Лв."),
            array("id" => 27, "name" => "Burundian Franc", "code" => "BIF", "symbol" => "FBu"),
            array("id" => 28, "name" => "Cambodian Riel", "code" => "KHR", "symbol" => "KHR"),
            array("id" => 29, "name" => "Canadian Dollar", "code" => "CAD", "symbol" => "$"),
            array("id" => 30, "name" => "Cape Verdean Escudo", "code" => "CVE", "symbol" => "$"),
            array("id" => 31, "name" => "Cayman Islands Dollar", "code" => "KYD", "symbol" => "$"),
            array("id" => 32, "name" => "CFA Franc BCEAO", "code" => "XOF", "symbol" => "CFA"),
            array("id" => 33, "name" => "CFA Franc BEAC", "code" => "XAF", "symbol" => "FCFA"),
            array("id" => 34, "name" => "CFP Franc", "code" => "XPF", "symbol" => "₣"),
            array("id" => 35, "name" => "Chilean Peso", "code" => "CLP", "symbol" => "$"),
            array("id" => 36, "name" => "Chinese Yuan", "code" => "CNY", "symbol" => "¥"),
            array("id" => 37, "name" => "Colombian Peso", "code" => "COP", "symbol" => "$"),
            array("id" => 38, "name" => "Comorian Franc", "code" => "KMF", "symbol" => "CF"),
            array("id" => 39, "name" => "Congolese Franc", "code" => "CDF", "symbol" => "FC"),
            array("id" => 40, "name" => "Costa Rican ColÃ³n", "code" => "CRC", "symbol" => "₡"),
            array("id" => 41, "name" => "Croatian Kuna", "code" => "HRK", "symbol" => "kn"),
            array("id" => 42, "name" => "Cuban Convertible Peso", "code" => "CUC", "symbol" => "$, CUC"),
            array("id" => 43, "name" => "Czech Republic Koruna", "code" => "CZK", "symbol" => "Kč"),
            array("id" => 44, "name" => "Danish Krone", "code" => "DKK", "symbol" => "Kr."),
            array("id" => 45, "name" => "Djiboutian Franc", "code" => "DJF", "symbol" => "Fdj"),
            array("id" => 46, "name" => "Dominican Peso", "code" => "DOP", "symbol" => "$"),
            array("id" => 47, "name" => "East Caribbean Dollar", "code" => "XCD", "symbol" => "$"),
            array("id" => 48, "name" => "Egyptian Pound", "code" => "EGP", "symbol" => "ج.م"),
            array("id" => 49, "name" => "Eritrean Nakfa", "code" => "ERN", "symbol" => "Nfk"),
            array("id" => 50, "name" => "Estonian Kroon", "code" => "EEK", "symbol" => "kr"),
            array("id" => 51, "name" => "Ethiopian Birr", "code" => "ETB", "symbol" => "Nkf"),
            array("id" => 52, "name" => "Euro", "code" => "EUR", "symbol" => "€"),
            array("id" => 53, "name" => "Falkland Islands Pound", "code" => "FKP", "symbol" => "£"),
            array("id" => 54, "name" => "Fijian Dollar", "code" => "FJD", "symbol" => "FJ$"),
            array("id" => 55, "name" => "Gambian Dalasi", "code" => "GMD", "symbol" => "D"),
            array("id" => 56, "name" => "Georgian Lari", "code" => "GEL", "symbol" => "ლ"),
            array("id" => 57, "name" => "German Mark", "code" => "DEM", "symbol" => "DM"),
            array("id" => 58, "name" => "Ghanaian Cedi", "code" => "GHS", "symbol" => "GH₵"),
            array("id" => 59, "name" => "Gibraltar Pound", "code" => "GIP", "symbol" => "£"),
            array("id" => 60, "name" => "Greek Drachma", "code" => "GRD", "symbol" => "₯, Δρχ, Δρ"),
            array("id" => 61, "name" => "Guatemalan Quetzal", "code" => "GTQ", "symbol" => "Q"),
            array("id" => 62, "name" => "Guinean Franc", "code" => "GNF", "symbol" => "FG"),
            array("id" => 63, "name" => "Guyanaese Dollar", "code" => "GYD", "symbol" => "$"),
            array("id" => 64, "name" => "Haitian Gourde", "code" => "HTG", "symbol" => "G"),
            array("id" => 65, "name" => "Honduran Lempira", "code" => "HNL", "symbol" => "L"),
            array("id" => 66, "name" => "Hong Kong Dollar", "code" => "HKD", "symbol" => "$"),
            array("id" => 67, "name" => "Hungarian Forint", "code" => "HUF", "symbol" => "Ft"),
            array("id" => 68, "name" => "Icelandic KrÃ³na", "code" => "ISK", "symbol" => "kr"),
            array("id" => 69, "name" => "Indian Rupee", "code" => "INR", "symbol" => "₹"),
            array("id" => 70, "name" => "Indonesian Rupiah", "code" => "IDR", "symbol" => "Rp"),
            array("id" => 71, "name" => "Iranian Rial", "code" => "IRR", "symbol" => "﷼"),
            array("id" => 72, "name" => "Iraqi Dinar", "code" => "IQD", "symbol" => "د.ع"),
            array("id" => 73, "name" => "Israeli New Sheqel", "code" => "ILS", "symbol" => "₪"),
            array("id" => 74, "name" => "Italian Lira", "code" => "ITL", "symbol" => "L,£"),
            array("id" => 75, "name" => "Jamaican Dollar", "code" => "JMD", "symbol" => "J$"),
            array("id" => 76, "name" => "Japanese Yen", "code" => "JPY", "symbol" => "¥"),
            array("id" => 77, "name" => "Jordanian Dinar", "code" => "JOD", "symbol" => "ا.د"),
            array("id" => 78, "name" => "Kazakhstani Tenge", "code" => "KZT", "symbol" => "лв"),
            array("id" => 79, "name" => "Kenyan Shilling", "code" => "KES", "symbol" => "KSh"),
            array("id" => 80, "name" => "Kuwaiti Dinar", "code" => "KWD", "symbol" => "ك.د"),
            array("id" => 81, "name" => "Kyrgystani Som", "code" => "KGS", "symbol" => "лв"),
            array("id" => 82, "name" => "Laotian Kip", "code" => "LAK", "symbol" => "₭"),
            array("id" => 83, "name" => "Latvian Lats", "code" => "LVL", "symbol" => "Ls"),
            array("id" => 84, "name" => "Lebanese Pound", "code" => "LBP", "symbol" => "£"),
            array("id" => 85, "name" => "Lesotho Loti", "code" => "LSL", "symbol" => "L"),
            array("id" => 86, "name" => "Liberian Dollar", "code" => "LRD", "symbol" => "$"),
            array("id" => 87, "name" => "Libyan Dinar", "code" => "LYD", "symbol" => "د.ل"),
            array("id" => 88, "name" => "Lithuanian Litas", "code" => "LTL", "symbol" => "Lt"),
            array("id" => 89, "name" => "Macanese Pataca", "code" => "MOP", "symbol" => "$"),
            array("id" => 90, "name" => "Macedonian Denar", "code" => "MKD", "symbol" => "ден"),
            array("id" => 91, "name" => "Malagasy Ariary", "code" => "MGA", "symbol" => "Ar"),
            array("id" => 92, "name" => "Malawian Kwacha", "code" => "MWK", "symbol" => "MK"),
            array("id" => 93, "name" => "Malaysian Ringgit", "code" => "MYR", "symbol" => "RM"),
            array("id" => 94, "name" => "Maldivian Rufiyaa", "code" => "MVR", "symbol" => "Rf"),
            array("id" => 95, "name" => "Mauritanian Ouguiya", "code" => "MRO", "symbol" => "MRU"),
            array("id" => 96, "name" => "Mauritian Rupee", "code" => "MUR", "symbol" => "₨"),
            array("id" => 97, "name" => "Mexican Peso", "code" => "MXN", "symbol" => "$"),
            array("id" => 98, "name" => "Moldovan Leu", "code" => "MDL", "symbol" => "L"),
            array("id" => 99, "name" => "Mongolian Tugrik", "code" => "MNT", "symbol" => "₮"),
            array("id" => 100, "name" => "Moroccan Dirham", "code" => "MAD", "symbol" => "MAD"),
            array("id" => 101, "name" => "Mozambican Metical", "code" => "MZM", "symbol" => "MT"),
            array("id" => 102, "name" => "Myanmar Kyat", "code" => "MMK", "symbol" => "K"),
            array("id" => 103, "name" => "Namibian Dollar", "code" => "NAD", "symbol" => "$"),
            array("id" => 104, "name" => "Nepalese Rupee", "code" => "NPR", "symbol" => "₨"),
            array("id" => 105, "name" => "Netherlands Antillean Guilder", "code" => "ANG", "symbol" => "ƒ"),
            array("id" => 106, "name" => "New Taiwan Dollar", "code" => "TWD", "symbol" => "$"),
            array("id" => 107, "name" => "New Zealand Dollar", "code" => "NZD", "symbol" => "$"),
            array("id" => 108, "name" => "Nicaraguan CÃ³rdoba", "code" => "NIO", "symbol" => "C$"),
            array("id" => 109, "name" => "Nigerian Naira", "code" => "NGN", "symbol" => "₦"),
            array("id" => 110, "name" => "North Korean Won", "code" => "KPW", "symbol" => "₩"),
            array("id" => 111, "name" => "Norwegian Krone", "code" => "NOK", "symbol" => "kr"),
            array("id" => 112, "name" => "Omani Rial", "code" => "OMR", "symbol" => ".ع.ر"),
            array("id" => 113, "name" => "Pakistani Rupee", "code" => "PKR", "symbol" => "₨"),
            array("id" => 114, "name" => "Panamanian Balboa", "code" => "PAB", "symbol" => "B/."),
            array("id" => 115, "name" => "Papua New Guinean Kina", "code" => "PGK", "symbol" => "K"),
            array("id" => 116, "name" => "Paraguayan Guarani", "code" => "PYG", "symbol" => "₲"),
            array("id" => 117, "name" => "Peruvian Nuevo Sol", "code" => "PEN", "symbol" => "S/."),
            array("id" => 118, "name" => "Philippine Peso", "code" => "PHP", "symbol" => "₱"),
            array("id" => 119, "name" => "Polish Zloty", "code" => "PLN", "symbol" => "zł"),
            array("id" => 120, "name" => "Qatari Rial", "code" => "QAR", "symbol" => "ق.ر"),
            array("id" => 121, "name" => "Romanian Leu", "code" => "RON", "symbol" => "lei"),
            array("id" => 122, "name" => "Russian Ruble", "code" => "RUB", "symbol" => "₽"),
            array("id" => 123, "name" => "Rwandan Franc", "code" => "RWF", "symbol" => "FRw"),
            array("id" => 124, "name" => "Salvadoran ColÃ³n", "code" => "SVC", "symbol" => "₡"),
            array("id" => 125, "name" => "Samoan Tala", "code" => "WST", "symbol" => "SAT"),
            array("id" => 126, "name" => "Saudi Riyal", "code" => "SAR", "symbol" => "﷼"),
            array("id" => 127, "name" => "Serbian Dinar", "code" => "RSD", "symbol" => "din"),
            array("id" => 128, "name" => "Seychellois Rupee", "code" => "SCR", "symbol" => "SRe"),
            array("id" => 129, "name" => "Sierra Leonean Leone", "code" => "SLL", "symbol" => "Le"),
            array("id" => 130, "name" => "Singapore Dollar", "code" => "SGD", "symbol" => "$"),
            array("id" => 131, "name" => "Slovak Koruna", "code" => "SKK", "symbol" => "Sk"),
            array("id" => 132, "name" => "Solomon Islands Dollar", "code" => "SBD", "symbol" => "Si$"),
            array("id" => 133, "name" => "Somali Shilling", "code" => "SOS", "symbol" => "Sh.so."),
            array("id" => 134, "name" => "South African Rand", "code" => "ZAR", "symbol" => "R"),
            array("id" => 135, "name" => "South Korean Won", "code" => "KRW", "symbol" => "₩"),
            array("id" => 136, "name" => "Special Drawing Rights", "code" => "XDR", "symbol" => "SDR"),
            array("id" => 137, "name" => "Sri Lankan Rupee", "code" => "LKR", "symbol" => "Rs"),
            array("id" => 138, "name" => "St. Helena Pound", "code" => "SHP", "symbol" => "£"),
            array("id" => 139, "name" => "Sudanese Pound", "code" => "SDG", "symbol" => ".س.ج"),
            array("id" => 140, "name" => "Surinamese Dollar", "code" => "SRD", "symbol" => "$"),
            array("id" => 141, "name" => "Swazi Lilangeni", "code" => "SZL", "symbol" => "E"),
            array("id" => 142, "name" => "Swedish Krona", "code" => "SEK", "symbol" => "kr"),
            array("id" => 143, "name" => "Swiss Franc", "code" => "CHF", "symbol" => "CHf"),
            array("id" => 144, "name" => "Syrian Pound", "code" => "SYP", "symbol" => "LS"),
            array("id" => 145, "name" => "São Tomé and Príncipe Dobra", "code" => "STD", "symbol" => "Db"),
            array("id" => 146, "name" => "Tajikistani Somoni", "code" => "TJS", "symbol" => "SM"),
            array("id" => 147, "name" => "Tanzanian Shilling", "code" => "TZS", "symbol" => "TSh"),
            array("id" => 148, "name" => "Thai Baht", "code" => "THB", "symbol" => "฿"),
            array("id" => 149, "name" => "Tongan pa'anga", "code" => "TOP", "symbol" => "$"),
            array("id" => 150, "name" => "Trinidad & Tobago Dollar", "code" => "TTD", "symbol" => "$"),
            array("id" => 151, "name" => "Tunisian Dinar", "code" => "TND", "symbol" => "ت.د"),
            array("id" => 152, "name" => "Turkish Lira", "code" => "TRY", "symbol" => "₺"),
            array("id" => 153, "name" => "Turkmenistani Manat", "code" => "TMT", "symbol" => "T"),
            array("id" => 154, "name" => "Ugandan Shilling", "code" => "UGX", "symbol" => "USh"),
            array("id" => 155, "name" => "Ukrainian Hryvnia", "code" => "UAH", "symbol" => "₴"),
            array("id" => 156, "name" => "United Arab Emirates Dirham", "code" => "AED", "symbol" => "إ.د"),
            array("id" => 157, "name" => "Uruguayan Peso", "code" => "UYU", "symbol" => "$"),
            array("id" => 158, "name" => "US Dollar", "code" => "USD", "symbol" => "$"),
            array("id" => 159, "name" => "Uzbekistan Som", "code" => "UZS", "symbol" => "лв"),
            array("id" => 160, "name" => "Vanuatu Vatu", "code" => "VUV", "symbol" => "VT"),
            array("id" => 161, "name" => "Venezuelan BolÃvar", "code" => "VEF", "symbol" => "Bs"),
            array("id" => 162, "name" => "Vietnamese Dong", "code" => "VND", "symbol" => "₫"),
            array("id" => 163, "name" => "Yemeni Rial", "code" => "YER", "symbol" => "﷼"),
            array("id" => 164, "name" => "Zambian Kwacha", "code" => "ZMK", "symbol" => "ZK")
        );
        DB::table("currencies")->insert($currencies);
    }
}
