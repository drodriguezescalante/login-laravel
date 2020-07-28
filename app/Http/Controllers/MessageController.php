<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendEmail;

class MessageController extends Controller
{
    public function store(Request $request){

        $message = request()->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ]);
        Mail::to('drodriguezescalante97@gmail.com')->queue(new SendEmail($message));
        return 'Mensaje enviado correctamente';
    }
}
