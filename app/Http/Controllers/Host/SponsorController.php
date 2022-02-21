<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SponsorController extends Controller
{
  public function process(Request $request)
  {
      $payload = $request->input('payload', false);
      $nonce = $payload['nonce'];
  
      $status = \Braintree\Transaction::sale([
    'amount' => '2.99',
    'paymentMethodNonce' => $nonce,
    'options' => [
        'submitForSettlement' => True
    ]
      ]);
  
      return response()->json($status);
  }
}
