<?php

namespace App\Http\Controllers;

use App\Mail\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request) {

        // validare i dati ricevuti

        $data = $request->all();

        Mail::to(env("MAIL_CONTACT_DESTINATION"))->send(new SendContactMail($data));

    }
}
