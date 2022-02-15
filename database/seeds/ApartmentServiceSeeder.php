<?php

use App\Apartment;
use App\Service;
use Illuminate\Database\Seeder;

class ApartmentServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::all();
        $services = Service::pluck('id');
        foreach ($apartments as $apartment) {
            $randomNumb = rand(1, count($services));
            $randomServices = $services->shuffle();
            $apartmentService = $randomServices->slice(0, $randomNumb);
            $apartment->services()->attach($apartmentService);
        }
    }
}
