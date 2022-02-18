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
                'cover_img' => 'apartment/apartment_cover/cover-1.jpg',
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
                'cover_img' => 'apartment/apartment_cover/cover-2.jpeg',
                'description' => 'Vorresti affittare una piccola palazzina a Trastevere adatta ai VIP di Hollywood per il vostro soggiorno a Roma? Questa "Palazzina" con due camere da letto offre due camere da letto e bagni super lussuosi, un soggiorno adatto per una galleria Art Deco, una sala da pranzo e persino una terrazza per mangiare',
                'visible' => true,
                'place_description' => 'Esattamente al centro di trastevere, a due passi dalla Basilica di Santa Maria. Tanti locali e osterie nei paraggi. La zona è sempre piena di vita, sia di giorno che di notte, con tanti posti da vedere nelle vicinanze per vivere a pieno uno dei quartieri più belli di Roma'
            ],
            [
                'user_id' => 5,
                'title' => 'Villa incantevole in Toscana con piscina',
                'address' => 'Castel del piano, Grosseto, Toscana',
                'price' => 10000,
                'lat' => 42.889647,
                'lng' => 11.5396756,
                'square_mt' => 1200,
                'n_rooms' => 12,
                'n_beds' => 10,
                'n_baths' => 8,
                'cover_img' => 'apartment/apartment_cover/cover-3.jpg',
                'description' => 'Una vera reggia nel cuore sella campagna Toscana. Villa incantevole con 12 stanze e un giardino di 800 metri quadrati, che comprende piscina e area relax. Ideale per feste o grandi cerimonie per accogliere i propri invitati in una dimora da favola.',
                'visible' => true,
                'place_description' => 'A pochi chilometri troviamo il paesino di Castel del piano, molto tranquillo e caratteristico, con locali e negozi che vendono prodotti tipici della zona. Tutta la zona circostante è immersa nel verde, ideale per rilassarsi e immergersi nella natura.'
            ],
        ];

        foreach ($apartments as $apartment) {
            $newApartment = new Apartment();
            $newApartment->user_id = $apartment['user_id'];
            $newApartment->title = $apartment['title'];
            $newApartment->address = $apartment['address'];
            $newApartment->price = $apartment['price'];
            $newApartment->lat = $apartment['lat'];
            $newApartment->lng = $apartment['lng'];
            $newApartment->square_mt = $apartment['square_mt'];
            $newApartment->n_rooms = $apartment['n_rooms'];
            $newApartment->n_beds = $apartment['n_beds'];
            $newApartment->n_baths = $apartment['n_baths'];
            $newApartment->cover_img = $apartment['cover_img'];
            $newApartment->description = $apartment['description'];
            $newApartment->visible = $apartment['visible'];
            $newApartment->place_description = $apartment['place_description'];
            $newApartment->save();
        }
    }
}
