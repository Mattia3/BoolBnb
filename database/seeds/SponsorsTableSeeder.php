<?php

use Illuminate\Database\Seeder;
use App\Sponsor;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsors = [
            [
                'name' => 'silver',
                'price' => 2.99,
                'duration' => 24
            ],
            [
                'name' => 'gold',
                'price' => 5.99,
                'duration' => 72
            ],
            [
                'name' => 'diamond',
                'price' => 9.99,
                'duration' => 144
            ]
        ];
        foreach ($sponsors as $sponsor) {
            $newSponsor = new Sponsor();
            $newSponsor->name = $sponsor['name'];
            $newSponsor->price = $sponsor['price'];
            $newSponsor->duration = $sponsor['duration'];
            $newSponsor->save();
        }
    }
}
