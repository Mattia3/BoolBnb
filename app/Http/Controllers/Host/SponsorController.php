<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;


class SponsorController extends Controller
{
  public function process(Request $request)
  {
    $gateway = new Gateway([
      'environment' => 'sandbox',
      'merchantId' => '7n7b9ny2h4fhpnt7',
      'publicKey' => 'mmskm2x7drzdgqvc',
      'privateKey' => 'ebf8ff855af46aa8b5830055f5a25019'
  ]);
      $selectSponsor = $request->query();
      $priceSponsor = $selectSponsor['sponsorship_select'];
      // $payment_method_nonce = $selectSponsor['payment_method_nonce'];
      // $result = $gateway->paymentMethodNonce()->create('A_PAYMENT_METHOD_TOKEN');
      // $nonce = $result->paymentMethodNonce->nonce;
      // dd($selectSponsor);
      // dd($payment_method_nonce);
  
      $payload = $request->input('payload', false);
      // $nonce = $payload['nonce'];

    $status = \Braintree\Transaction::sale([
	  'amount' => $priceSponsor,
	  'paymentMethodNonce' => 'fake-valid-nonce',
	  'options' => [
	    'submitForSettlement' => True
	  ]
    ]);
      return redirect()->route('host.apartments.index');
  }
}
