<?php

namespace App\Http\Controllers\Host;

use App\Apartment;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(){
        $apartments = Apartment::where('user_id', Auth::user()->id)->get();

        foreach ($apartments as $key => $apartment) {
            $messages[$key] = $apartment->messages()->get();
        }
        //dd($messages);
        /* $messages = $apartments->messages()->get();
        dd($messages); */
        return view('host.apartments.messages', [
            'apartments' => $apartments,
            'messages' => $messages
        ]);
    }
}
