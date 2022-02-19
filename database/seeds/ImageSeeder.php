<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'apartment_id' => 1,
                'img_path' => 'apartment/apartment_img/Roman-1.jpg'
            ],
            [
                'apartment_id' => 1,
                'img_path' => 'apartment/apartment_img/Roman-3.jpg'
            ],
            [
                'apartment_id' => 1,
                'img_path' => 'apartment/apartment_img/Roman-4.jpg'
            ],
            [
                'apartment_id' => 1,
                'img_path' => 'apartment/apartment_img/Roman-6.jpg'
            ],
            [
                'apartment_id' => 1,
                'img_path' => 'apartment/apartment_img/Roman-7.jpg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-1.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-4.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-5.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-6.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-7.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-8.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-9.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-10.jpeg'
            ],
            [
                'apartment_id' => 2,
                'img_path' => 'apartment/apartment_img/SantaDorotea-11.jpeg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-1.jpeg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-2.jpeg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-3.jpeg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-4.jpg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-5.jpg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-6.jpg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-7.jpg'
            ],
            [
                'apartment_id' => 3,
                'img_path' => 'apartment/apartment_img/Toscana-8.jpg'
            ],
        ];

        foreach ($images as $image) {
            $newImage = new Image();
            $newImage->apartment_id = $image['apartment_id'];
            $newImage->img_path = $image['img_path'];
            $newImage->save();
        }
    }
}
