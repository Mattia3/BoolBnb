<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'italiano' => 'images/languages_flag/italy.png',
            'inglese' => 'images/languages_flag/united-kingdom.png',
            'spagnolo' => 'images/languages_flag/spain.png',
            'francese' => 'images/languages_flag/france.png',
            'tedesco' => 'images/languages_flag/germany.png',
            'russo' => 'images/languages_flag/russia.png',
            'turco' => 'images/languages_flag/turkey.png',
            'ucraino' => 'images/languages_flag/ukraine.png',
            'portoghese' => 'images/languages_flag/portugal.png',
            'cinese' => 'images/languages_flag/china.png',
        ];

        foreach ($languages as $name => $icon) {

            $new_language = new Language();
            $new_language->name = $name;
            $new_language->icon_path = $icon;
            $new_language->save();
        }
    }
}
