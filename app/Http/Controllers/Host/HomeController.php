<?php

namespace App\Http\Controllers\Host;

use App\Apartment;
use App\Http\Controllers\Controller;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        $apartments = Apartment::where('user_id', Auth::user()->id)->get();
        $host = Auth::user();

        $highlitedApartments = [];
        foreach ($apartments as $apartment) {
            $sponsorsOnApartment = $apartment->sponsors()->get();
            
            if(count($sponsorsOnApartment) != 0) {
                foreach ($sponsorsOnApartment as $sponsor) {
                    
                    if (Carbon::now()->gte($sponsor->pivot->starting_date) && Carbon::now()->lt($sponsor->pivot->expire_date )) {
                        $highlitedApartments[] = $apartment;
                    } 
                }
            }
            
        }     
        

        $messages = null;
        foreach ($apartments as $key => $apartment) {
            $msg = $apartment->messages()->get();
            $messages += count($msg);
        }

        $messagesDate=[];
        foreach ($apartments as $apartment) {
            $messages = $apartment->messages()->get();
            if (count($messages) == 1){
                $message = $apartment->messages()->first();
                //dd($message->created_at->format('m/d/Y'));
                $messagesDate[] = $message->created_at->format('m/d/Y');
            } elseif (count($messages) > 1) {
                foreach ($messages as $message) {
                    $messagesDate[] = $message->created_at->format('m/d/Y');
                }
            } 
        }
        dd($messagesDate);
        



        return view('host.dashboard', [
            'apartments' => $apartments,
            'host' => $host,
            'messages' => $messages,
            'highlitedApartments' => $highlitedApartments, 
            'messagesDate' => $messagesDate
        ]); 
    }
}


