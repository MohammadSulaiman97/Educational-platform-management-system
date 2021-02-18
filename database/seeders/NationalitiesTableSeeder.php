<?php

namespace Database\Seeders;

use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Nationalities')->delete();

        $nationals = [

            [
                'en'=> 'Syrian',
                'ar'=> 'سوري'
            ],
            [

                'en'=> 'Palestinian',
                'ar'=> 'فلسطيني'
            ],

            [

                'en'=> 'Egyptian',
                'ar'=> 'مصري'
            ],

            [

                'en'=> 'Iranian',
                'ar'=> 'إيراني'
            ],
            [

                'en'=> 'Emirati',
                'ar'=> 'إماراتي'
            ],
            [

                'en'=> 'Qatari',
                'ar'=> 'قطري'
            ],
            [

                'en'=> 'Russian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Saudi Arabian',
                'ar'=> 'سعودي'
            ],
            [

                'en'=> 'Lebanese',
                'ar'=> 'لبناني'
            ],
            [

                'en'=> 'Libyan',
                'ar'=> 'ليبي'
            ],
            [

                'en'=> 'Algerian',
                'ar'=> 'جزائري'
            ],
            [

                'en'=> 'Argentinian',
                'ar'=> 'أرجنتيني'
            ],
            [

                'en'=> 'Australian',
                'ar'=> 'أسترالي'
            ],
            [

                'en'=> 'Bahraini',
                'ar'=> 'بحريني'
            ],
            [

                'en'=> 'Belarusian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'Belgian',
                'ar'=> 'بلجيكي'
            ],
            [

                'en'=> 'Brazilian',
                'ar'=> 'برازيلي'
            ],
            [

                'en'=> 'Bulgarian',
                'ar'=> 'بلغاري'
            ],
            [

                'en'=> 'Canadian',
                'ar'=> 'كندي'
            ],
            [

                'en'=> 'Central African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'Chinese',
                'ar'=> 'صيني'
            ],
            [

                'en'=> 'Colombian',
                'ar'=> 'كولومبي'
            ],
            [

                'en'=> 'Cypriot',
                'ar'=> 'قبرصي'
            ],
            [

                'en'=> 'Estonian',
                'ar'=> 'استوني'
            ],
            [

                'en'=> 'Ethiopian',
                'ar'=> 'أثيوبي'
            ],
            [

                'en'=> 'French',
                'ar'=> 'فرنسي'
            ],
            [

                'en'=> 'French Guianese',
                'ar'=> 'غويانا الفرنسية'
            ],
            [

                'en'=> 'German',
                'ar'=> 'ألماني'
            ],
            [

                'en'=> 'Hongkongese',
                'ar'=> 'هونغ كونغي'
            ],
            [

                'en'=> 'Indian',
                'ar'=> 'هندي'
            ],
            [

                'en'=> 'Indonesian',
                'ar'=> 'أندونيسيي'
            ],
            [

                'en'=> 'Iraqi',
                'ar'=> 'عراقي'
            ],
            [

                'en'=> 'Irish',
                'ar'=> 'إيرلندي'
            ],
            [

                'en'=> 'Italian',
                'ar'=> 'إيطالي'
            ],
            [

                'en'=> 'Japanese',
                'ar'=> 'ياباني'
            ],
            [

                'en'=> 'Jordanian',
                'ar'=> 'أردني'
            ],
            [

                'en'=> 'Kazakh',
                'ar'=> 'كازاخستاني'
            ],
            [

                'en'=> 'North Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'South Korean',
                'ar'=> 'كوري'
            ],
            [

                'en'=> 'Kuwaiti',
                'ar'=> 'كويتي'
            ],
            [

                'en'=> 'Macedonian',
                'ar'=> 'مقدوني'
            ],
            [

                'en'=> 'Malaysian',
                'ar'=> 'ماليزي'
            ],
            [

                'en'=> 'Mauritanian',
                'ar'=> 'موريتانيي'
            ],
            [

                'en'=> 'Mexican',
                'ar'=> 'مكسيكي'
            ],
            [

                'en'=> 'Moroccan',
                'ar'=> 'مغربي'
            ],
            [

                'en'=> 'Mozambican',
                'ar'=> 'موزمبيقي'
            ],
            [

                'en'=> 'Dutch',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'Dutch Antilier',
                'ar'=> 'هولندي'
            ],
            [

                'en'=> 'New Zealander',
                'ar'=> 'نيوزيلندي'
            ],
            [

                'en'=> 'Nigerien',
                'ar'=> 'نيجيري'
            ],
            [

                'en'=> 'Norwegian',
                'ar'=> 'نرويجي'
            ],
            [

                'en'=> 'Omani',
                'ar'=> 'عماني'
            ],
            [

                'en'=> 'Pakistani',
                'ar'=> 'باكستاني'
            ],

            [

                'en'=> 'Filipino',
                'ar'=> 'فلبيني'
            ],
            [

                'en'=> 'Portuguese',
                'ar'=> 'برتغالي'
            ],
            [

                'en'=> 'Puerto Rican',
                'ar'=> 'بورتي'
            ],
            [

                'en'=> 'Romanian',
                'ar'=> 'روماني'
            ],
            [

                'en'=> 'Singaporean',
                'ar'=> 'سنغافوري'
            ],
            [

                'en'=> 'Solomon Island',
                'ar'=> 'جزر سليمان'
            ],
            [

                'en'=> 'Somali',
                'ar'=> 'صومالي'
            ],
            [

                'en'=> 'South African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'Spanish',
                'ar'=> 'إسباني'
            ],
            [

                'en'=> 'Sudanese',
                'ar'=> 'سوداني'
            ],
            [

                'en'=> 'Swedish',
                'ar'=> 'سويدي'
            ],
            [

                'en'=> 'Swiss',
                'ar'=> 'سويسري'
            ],
            [

                'en'=> 'Tunisian',
                'ar'=> 'تونسي'
            ],
            [

                'en'=> 'Turkish',
                'ar'=> 'تركي'
            ],

            [

                'en'=> 'Ukrainian',
                'ar'=> 'أوكراني'
            ],
            [

                'en'=> 'British',
                'ar'=> 'بريطاني'
            ],
            [

                'en'=> 'American',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Uruguayan',
                'ar'=> 'أورغواي'
            ],
            [

                'en'=> 'Uzbek',
                'ar'=> 'أوزباكستاني'
            ],
            [

                'en'=> 'Vietnamese',
                'ar'=> 'فيتنامي'
            ],
            [

                'en'=> 'Yemeni',
                'ar'=> 'يمني'
            ]
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }
    }
}
