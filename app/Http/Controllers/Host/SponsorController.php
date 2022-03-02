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
  public function index($slug)
  {
    $apartment = Apartment::where('slug', $slug)->first();
    $sponsors = Sponsor::all();

    // $sponsor = Sponsor::all();
    // $starting_date = Carbon::now()->toDateTimeString();


    return view('host.apartments.sponsor', compact('apartment', 'sponsors'));
  }


  public function process(Request $request, $slug)
  {
    $payload = $request->payload;
    //$nonce = $payload['nonce'];


    // $payload = $request->input('payload', true);
    // $nonce = $request->payment_method_nonce;

    // $request->validate([
    //   'payment_method_nonce' => 'required'
    // ]);

    // $success = false;

    $apartment = Apartment::where('slug', $slug)->first();
    $apartment_id = $apartment->id;
    $sponsor = Sponsor::where('price', $request->sponsor_id)->first();
    $starting_date = Carbon::now()->toDateTimeString();

    $gateway = new \Braintree\Gateway([
      'environment' => 'sandbox',
      'merchantId' => '7n7b9ny2h4fhpnt7',
      'publicKey' => 'mmskm2x7drzdgqvc',
      'privateKey' => 'ebf8ff855af46aa8b5830055f5a25019'
    ]);



    //   $status = $gateway->paymentMethod()->create([
    //     'customerId' => '12345',
    //     'paymentMethodNonce' => 'nonceFromTheClient'
    // ]);

    // dd($status);
    // dd($status->success);

    if ($sponsor->id == 1) {
      $expire_date = Carbon::now()->addDay(1)->toDateTimeString();
    } elseif ($sponsor->id == 2) {
      $expire_date = Carbon::now()->addDay(3)->toDateTimeString();
    } else {
      $expire_date = Carbon::now()->addDay(6)->toDateTimeString();
    }



    $status = \Braintree\Transaction::sale([
      'amount' => $sponsor->price,
      // 'paymentMethodNonce' => 'fake-luhn-invalid-nonce',
      'paymentMethodNonce' => 'fake-valid-nonce',
      //'paymentMethodNonce' => $nonce,
      'options' => [
        'submitForSettlement' => True
      ]
    ]);

    $apartment->sponsors()->attach($sponsor, [
      'starting_date' => $starting_date,
      'expire_date' => $expire_date
    ]);

    return redirect()->route('host.dashboard');
    //return response()->json($status);
  }
}
