<?php

use App\Language;
use App\User;
use Illuminate\Database\Seeder;

class UserLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $languages = Language::pluck('id');
        foreach ($users as $user) {
            $randomNumb = rand(1, 4);
            $randomLanguages = $languages->shuffle();
            $userLanguage = $randomLanguages->slice(0, $randomNumb);
            $user->languages()->attach($userLanguage);
        }
    }
}
