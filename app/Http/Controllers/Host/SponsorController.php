<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sponsor;
use App\Apartment;
use Illuminate\Support\Str;
use Carbon\Carbon;
 

class SponsorController extends Controller
{
  public function index($slug) {
    
    $apartment = Apartment::where('slug', $slug)->first();
    

    // $sponsors = Sponsor::all();
    // $apartment = Apartment::all();



    // $now = Carbon::now(); 

    // $expiration = false;
    // $end_date = false;

    // if (count((array)$apartments->sponsors) != 0) {
    //     foreach ($apartments->sponsors as $sponsor) {
    //       $end_date = $sponsors->pivot->end_date;
    //       if ($end_date < $now) {
    //         $apartments->sponsors()->detach($sponsor);
    //       }
    //     }
    //   $carbon_end_date = new Carbon($end_date);
    //   $expiration = $carbon_end_date;
    // }


    return view('host.apartments.sponsor', compact('apartment'));
  }


  public function process(Request $request, $slug)
  {
    $success = false;
    // dd($request->all());
    $apartment = Apartment::where('slug', $slug)->first();
    $apartment_id = $apartment->id;

    //dd($apartment_id);

    $sponsor = Sponsor::where('price', $request->sponsor_id)->first();
    //dd($sponsor->id);

    $gateway = new Gateway([
      'environment' => 'sandbox',
      'merchantId' => '7n7b9ny2h4fhpnt7',
      'publicKey' => 'mmskm2x7drzdgqvc',
      'privateKey' => 'ebf8ff855af46aa8b5830055f5a25019'
    ]);

    //$payload = $request->input('payload', true);

    $status = \Braintree\Transaction::sale([
    'amount' => $sponsor->price,
    'paymentMethodNonce' => 'nonce',
    'options' => [
      'submitForSettlement' => True
    ]]);

    
    $starting_date = Carbon::now()->toDateTimeString();
    if ($sponsor->id == 1) {
      $expire_date = Carbon::now()->addDay(1)->toDateTimeString();
    } elseif ($sponsor->id == 2) {
      $expire_date = Carbon::now()->addDay(3)->toDateTimeString();
    } else {
      $expire_date = Carbon::now()->addDay(6)->toDateTimeString();
    }
    //dd($starting_date, $expire_date);
    $apartment->sponsors()->attach($sponsor,[
      'starting_date' => $starting_date,
      'expire_date' => $expire_date
    ]);

    return redirect()->route('host.apartments.index');
  }
}
