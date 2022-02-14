<?php

use App\Apartment;
use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = [
            [
                'user_id' => 1,
                'title' => 'Roman Penthouse',
                'address' => 'Budapest, Fő u. 8, 1011 Ungheria',
                'price' => 740,
                'lat' => 47.499500,
                'lng' => 19.0399956,
                'square_mt' => 180,
                'n_rooms' => 5,
                'n_beds' => 8,
                'n_baths' => 5,
                'cover_img' => 'storage/apartment/apartment_cover/cover-1.jpg',
                'description' => 'Attico meraviglio al centro si Budapest. L’appartamento è composto da 5 camere da letto , ognuna con il suo bagno. I bagni sono completamente in marmo, 2 provvisti di doccia e 3 di vasca. C’è un bellissimo salone con degli affreschi antichi e delle colonne di marmo rarissimo di provenienza Afghana. Lungo il corridoio potrete ammirare delle stampe originali del Piranesi. Salendo la scala si arriva sulla terrazza e la cucina. La terrazza è vivibile anche d’inverno , visto che è provvista di 2 sistemi di riscaldamento. La vista è mozzafiato',
                'visible' => true,
                'place_description' => 'Essendo al centro di Budapest tutte le comodita sono a portata di mano. Basta attraversare la strada per trovarsi sul Danubio ed esattamente dopo 100 metri a sinistra si puà prendere il battello. A 500 metri dopo la piazza puoi trovare il Budavari Palota, la galleria nazionale ungherese. Seguendo la strada principlae ci sono moltissimi ristoranti, supermercati e anche la funicolare.',
            ],
            [
                'user_id' => 5,
                'title' => 'Palazzina Santa Dorotea, Dimora con giardino privato nel Cuore di Roma, Trastevere',
                'address' => 'Piazza di S. Calisto, 3, 00153 Roma RM',
                'price' => 500,
                'lat' => 41.889250,
                'lng' => 12.4708593,
                'square_mt' => 140,
                'n_rooms' => 2,
                'n_beds' => 2,
                'n_baths' => 2,
                'cover_img' => 'storage/apartment/apartment_cover/cover-2.jpeg',
                'description' => 'Vorresti affittare una piccola palazzina a Trastevere adatta ai VIP di Hollywood per il vostro soggiorno a Roma? Questa "Palazzina" con due camere da letto offre due camere da letto e bagni super lussuosi, un soggiorno adatto per una galleria Art Deco, una sala da pranzo e persino una terrazza per mangiare',
                'visible' => true,
                'place_description' => ''
            ],
        ];

        foreach ($apartments as $apartment) {
            $newApartment = new Apartment();
        }
    }
}
