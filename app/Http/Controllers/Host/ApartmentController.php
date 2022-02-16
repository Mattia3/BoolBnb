<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Apartment;
use App\Language;
use App\Rule;
use App\Service;
use App\Sponsor;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::where('user_id', Auth::id())->get();
        return view('host.apartments.index', compact('apartments'));
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
            'visible' => 'boolean|required',
            'place_description' => 'string|required|min:15|max:2000'
        ]);

        $newApartment = new Apartment;
        $newApartment->fill($data);
        $newApartment->save();
        $newApartment->rules()->sync($data['rules']);
        $newApartment->services()->sync($data['services']);

        return redirect()->route('host.apartments.index', $newApartment->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        // $data = [
        //     'apartment' => $apartment,
        //     'activeSponsor' => [
        //         'name'
        //     ],
        //     'activeDate' => $activeDate,
        // ];
        return view('host.apartments.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
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
    public function update(Request $request, Apartment $apartment)
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
            'visible' => 'boolean|required',
            'place_description' => 'string|required|min:15|max:2000'
        ]);

        $newApartment = new Apartment;
        $newApartment->fill($data);
        $newApartment->save();
        $newApartment->rules()->sync($data['rules']);
        $newApartment->services()->sync($data['services']);

        return redirect()->route('host.apartment.show', $apartment->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->services()->detach();
        $apartment->rules()->detach();
        $apartment->delete();
        return redirect()->route('host.apartment.index')->with(['status' => 'Appartamento eliminato correttamente']);
    }
}
