<?php

use App\Apartment;
use App\Rule;
use Illuminate\Database\Seeder;

class ApartmentRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::all();
        $rules = Rule::pluck('id');
        foreach ($apartments as $apartment) {
            $randomNumb = rand(1, count($rules));
            $randomRules = $rules->shuffle();
            $apartmentRule = $randomRules->slice(0, $randomNumb);
            $apartment->rules()->attach($apartmentRule);
        }
    }
}
