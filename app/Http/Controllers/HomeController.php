<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Service;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // dd($request->search);
        $place = $request->search;
        $services = Service::all();
        $apartments = Apartment::with(['services', 'rules', 'sponsors'])->get();
        return view('guest.filter', [
            'services' => $services,
            'apartments' => $apartments,
            'place' => $place
        ]);
    }

    public function show($slug)
    {

        //dd($slug);
        $apartment = Apartment::where('slug', $slug)->first();
        $services = $apartment->services()->get();
        $rules = $apartment->rules()->get();
        $images = $apartment->images()->get();

        $host = User::where('id', $apartment->user_id)->first();

        //dd($apartment);
        return view('guest.show', [
            'apartment' => $apartment,
            'services' => $services,
            'rules' => $rules,
            'images' => $images,
            'host' => $host
        ]);
    }
}
