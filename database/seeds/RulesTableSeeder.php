<?php

use Illuminate\Database\Seeder;
use App\Rule;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = ['smoking', 'children', 'animals', 'party'];
        foreach ($rules as $rule) {
            $newRule =  new Rule();
            $newRule->name = $rule;
            $newRule->save();
        }
    }
}
