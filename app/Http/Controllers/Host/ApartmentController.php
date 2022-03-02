<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Apartment;
use App\Image;
use App\Language;
use App\Rule;
use App\Service;
use App\Sponsor;
use App\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ApartmentController extends Controller
{
    private function createSlug($title)
    {
        $slug = Str::slug($title);

        $alreadyExists = Apartment::where("slug", $slug)->first();
        $counter = 1;

        while ($alreadyExists) {
            $newSlug = $slug . "-" . $counter;
            $alreadyExists = Apartment::where("slug", $newSlug)->first();
            $counter++;

            if (!$alreadyExists) {
                $slug = $newSlug;
            }
        }

        return $slug;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::where('user_id', Auth::id())->get();

        $apartmentsOn = $apartments->where('visible', 1);
        $apartmentsOff = $apartments->where('visible', 0);
        return view('host.apartments.index', [
            'apartmentsOn' => $apartmentsOn,
            'apartmentsOff' => $apartmentsOff
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        $languages = Language::all();
        $rules = Rule::all();
        return view('host.apartments.create', [
            'services' => $services,
            'languages' => $languages,
            'rules' => $rules
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'string|min:5|max:60|required|unique:apartments',
            'address' => 'string|required',
            'price' => 'numeric|required|min:2|max:99999',
            'square_mt' => 'numeric|required|min:10',
            'n_rooms' => 'numeric|min:1',
            'n_beds' => 'numeric|min:1',
            'n_baths' => 'numeric|min:1',
            'cover_img' => 'file|required',
            'description' => 'string|required|min:15|max:2000',
            // 'visible' => 'boolean|required',
            'place_description' => 'string|required|min:15|max:2000'
        ]);

        // TomTom query . From address to -> lat lon 
        $ttResponse = Http::get('https://api.tomtom.com/search/2/geocode/.json', [
            'query' => $data['address'],
            'key' => 'cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj',
        ]);
        // dd($ttResponse->json());
        // dd($ttResponse->json()['results']);
        // dd($ttResponse->json()['summary']['numResults']);
        if ($ttResponse->json()['summary']['numResults'] == 0) {
            return redirect()->route('host.apartments.show')->withErrors(['msg' => 'Indirizzo non valido o incompleto']);
        }
        $lat = $ttResponse->json()['results'][0]['position']['lat'];
        $lng = $ttResponse->json()['results'][0]['position']['lon'];
        // dd('lat:' . $lat, 'lng:' . $lng);
        // -----------------------------

        $newApartment = new Apartment;
        // passo lat e lon ricavate da tomtom
        $newApartment->lat = $lat;
        $newApartment->lng = $lng;

        $newApartment->fill($data);
        $newApartment->user_id = Auth::user()->id;
        $newApartment->slug = $this->createSlug($data['title']);
        // cover img
        $newApartment->cover_img = Storage::put('apartment/apartment_cover', $data['cover_img']);
        //
        $newApartment->save();
        $newApartment->rules()->sync($data['rules']);
        $newApartment->services()->sync($data['services']);

        $images = $request->images;
        foreach ($images as $image) {
            $newImage = new Image;
            $newImage->img_path = Storage::put('apartment/apartment_img', $image);
            $newImage->apartment_id = $newApartment->id;
            $newImage->save();
        }

        return redirect()->route('host.apartments.show', $newApartment->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $apartment = Apartment::where('slug', $slug)->first();
        //dd($apartment->user_id);
        if ($apartment->user_id != Auth::id()) {
            return 'no no no non puoi!'; //view('dashboard');
        } else {
            if ($apartment->sponsors()->first()) {
                $active_sponsor = $apartment->sponsors()->first();
                $sponsor_starting_date = $active_sponsor->pivot->starting_date;
                $sponsor_expire_date = $active_sponsor->pivot->expire_date;
            } else {
                $active_sponsor = '';
                $sponsor_starting_date = '';
                $sponsor_expire_date = '';
            }

            $services = $apartment->services()->get();
            $rules = $apartment->rules()->get();
            $messages = $apartment->messages()->get();
            $images = $apartment->images()->get();

            $user_id = Auth::id();
            $host = User::where('id', $user_id)->first();

            //dd($apartment->title);
            //dd($apartment_details['active_sponsor']->name);
            //dd($apartment_details['messages'][0]->name);

            return view('host.apartments.show', [
                'active_sponsor' => $active_sponsor,
                'sponsor_starting_date' => $sponsor_starting_date,
                'sponsor_expire_date' => $sponsor_expire_date,
                'services' => $services,
                'rules' => $rules,
                'messages' => $messages,
                'images' => $images,
                'apartment' => $apartment,
                'host' => $host
            ]);  //ricordarsi di cambiare la view con  'host.apartments.show'
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $apartment = Apartment::where('slug', $slug)->first();
        $services = Service::all();
        $languages = Language::all();
        $rules = Rule::all();

        return view('host.apartments.edit', [
            'apartment' => $apartment,
            'services' => $services,
            'languages' => $languages,
            'rules' => $rules
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $apartment = Apartment::where('slug', $slug)->first();
        $data = $request->all();
        $oldTitle = $apartment->title;
        $titleChanged = $oldTitle != $data['title'];

        if ($titleChanged) {
            $apartment->slug = $this->createSlug($data['title']);
        }

        // TomTom query . From address to -> lat lon 
        $ttResponse = Http::get('https://api.tomtom.com/search/2/geocode/.json', [
            'query' => $data['address'],
            'key' => 'cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj',
        ]);
        // dd($ttResponse->json());
        // dd($ttResponse->json()['results']);
        // dd($ttResponse->json()['summary']['numResults']);
        if ($ttResponse->json()['summary']['numResults'] == 0) {
            return redirect()->route('host.apartments.show')->withErrors(['msg' => 'Indirizzo non valido o incompleto']);
        }
        $lat = $ttResponse->json()['results'][0]['position']['lat'];
        $lng = $ttResponse->json()['results'][0]['position']['lon'];
        // dd('lat:' . $lat, 'lng:' . $lng);
        // -----------------------------


        $apartment->fill($data);
        // passo lat e lon ricavate da tomtom
        $apartment->lat = $lat;
        $apartment->lng = $lng;

        // cover img
        $apartment->cover_img = Storage::put('apartment/apartment_cover', $data['cover_img']);
        //
        $apartment->save();
        $apartment->rules()->sync($data['rules']);
        $apartment->services()->sync($data['services']);

        $oldImages = $apartment->images()->get();
        //dd($request->images);
        $images = $request->images;
        foreach ($oldImages as $key => $oldImage) {
            $image = $images[$key];
            $oldImage->img_path = Storage::put('apartment/apartment_img', $image);
            $oldImage->apartment_id = $apartment->id;
            $oldImage->save();
        }

        return redirect()->route('host.apartments.show', $apartment->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $apartment = Apartment::where('slug', $slug)->first();
        $apartment->delete();
        return redirect()->route('host.apartments.index')->with(['status' => 'Appartamento eliminato correttamente']);
    }
}
