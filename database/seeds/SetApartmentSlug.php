<?php

use App\Apartment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SetApartmentSlug extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::all();

        foreach ($apartments as $apartment) {
            $slug = Str::slug($apartment->title);

            // controllo se esiste un apartment con lo stesso slug
            $alreadyExists = Apartment::where("slug", $slug)->first();
            $counter = 1;
      
            // Se esiste, devo creare un nuovo slug
            while ($alreadyExists) {
              // genera un nuovo slug
              $newSlug = $slug . "-" . $counter;
      
      
              // cerca nel db se esiste già un elemento con questo nuovo slug
              $alreadyExists = Apartment::where("slug", $newSlug)->first();
      
              // incrementiamo il contatore
              $counter++;
      
              // se non è stato trovato alcun post,
              // salvo il nuovo slug dentro la variable $slug;
              if (!$alreadyExists) {
                $slug = $newSlug;
              }
            }
      
            $apartment->slug = $slug;
            $apartment->save();
        }
    }
}
