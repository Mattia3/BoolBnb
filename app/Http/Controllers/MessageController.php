<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request, $slug){
        $apartment = Apartment::where('slug', $slug)->first();
        $services = $apartment->services()->get();
        $rules = $apartment->rules()->get();
        $images = $apartment->images()->get();
        $data = $request->all();

        $host = User::where('id', $apartment->user_id)->first();
        
        $message = new Message();
        $message->fill($data);
        $message->apartment_id = $apartment->id;
        $message->save();

        return view('guest.show', [
            'apartment' => $apartment,
            'services' => $services,
            'rules' => $rules,
            'host' => $host,
            'images' => $images
        ])->with(['status' => 'Messaggio inviato correttamente']);
    }
}
