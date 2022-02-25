<?php

namespace App\Http\Controllers\Host;

use App\Apartment;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        $apartments = Apartment::where('user_id', Auth::user()->id)->get();
        $host = Auth::user();
        
        $messages = null;
        foreach ($apartments as $key => $apartment) {
            $msg = $apartment->messages()->get();
            $messages += count($msg);
        }

        return view('host.dashboard', [
            'apartments' => $apartments,
            'host' => $host,
            'messages' => $messages
        ]); //da cambiare con 'host.index' in cui ci sarà la home della dashboard --> sarà quindi anche da togliere $apartments perchè non sarà più necessario passarli alla view!!!!
    }
}


