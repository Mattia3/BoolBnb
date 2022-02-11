<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'wi-fi',
                'icon_class' => 'fa-solid fa-wifi'
            ],
            [
                'name' => 'kitchen',
                'icon_class' => 'fa-solid fa-utensils'
            ],
            [
                'name' => 'air_conditioner',
                'icon_class' => 'fa-solid fa-fan'
            ],
            [
                'name' => 'hair_dryer',
                'icon_class' => 'fa-solid fa-wind'
            ],
            [
                'name' => 'swimming_pool',
                'icon_class' => 'fa-regular fa-person-swimming'
            ],
            [
                'name' => 'garden',
                'icon_class' => 'fa-solid fa-tre'
            ],
            [
                'name' => 'parking',
                'icon_class' => 'fa-solid fa-square-parking'
            ],
            [
                'name' => 'smoking_area',
                'icon_class' => 'fa-solid fa-smoking'
            ],
            [
                'name' => 'pet_friendly',
                'icon_class' => 'fa-solid fa-dog'
            ],
            [
                'name' => 'breakfast',
                'icon_class' => 'fa-solid fa-mug-saucer'
            ],
            [
                'name' => 'balcony',
                'icon_class' => 'fa-solid fa-pallet'
            ],
            [
                'name' => 'sea_view',
                'icon_class' => 'fa-solid fa-water'
            ],
            [
                'name' => 'access_ski_slope',
                'icon_class' => 'fa-solid fa-person-skiing'
            ],
            [
                'name' => 'elevator',
                'icon_class' => 'fa-solid fa-elevator'
            ],
            [
                'name' => 'TV',
                'icon_class' => 'fa-solid fa-elevator'
            ],
            [
                'name' => 'gym',
                'icon_class' => 'fa-solid fa-dumbbell'
            ],
            [
                'name' => 'children_friendly',
                'icon_class' => 'fa-solid fa-child'
            ],
            [
                'name' => 'disabled_friendly',
                'icon_class' => 'fa-brands fa-accessible-icon'
            ]
        ];
        foreach ($services as $service) {
            $newService = new Service();
            $newService->name = $service['name'];
            $newService->icon_class = $service['icon_class'];
            $newService->save();
        }
    }
}
