<?php

use App\Apartment;
use App\Sponsor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ApartmentSponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartmentSponsor = [
            [
                'apartment_id' => 1,
                'sponsor_id' => 1,
                'starting_date' => Carbon::now(),
                'expire_date' => Carbon::now()->addDays(1),
            ],
            [
                'apartment_id' => 2,
                'sponsor_id' => 2,
                'starting_date' => Carbon::now(),
                'expire_date' => Carbon::now()->addDays(3),
            ],
            [
                'apartment_id' => 3,
                'sponsor_id' => 3,
                'starting_date' => Carbon::now(),
                'expire_date' => Carbon::now()->addDays(6),
            ],
        ];
        foreach ($apartmentSponsor as $sponsorship) {
            $apartment = Apartment::find($sponsorship['apartment_id']);
            $apartment->sponsors()->attach(
                $sponsorship['sponsor_id'],
                [
                    'starting_date' => $sponsorship['starting_date'],
                    'expire_date' => $sponsorship['expire_date']
                ]
            );
        }
    }
}
