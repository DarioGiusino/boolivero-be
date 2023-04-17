<?php

namespace App\Http\Controllers\api;

use App\Mail\ContactMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $data,
            [
                'email' => 'bail|required|email',
                'subject' => 'bail|required|string',
                'text' => 'bail|required|string',
            ],
            [
                'email.required' => 'La email è obbligatoria',
                'email.email' => 'La email non è valida',
                'text.required' => 'Non è stata inserito il messaggio in modo corretto',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $mail = new ContactMessage(
            $data['email'],
            $data['subject'],
            $data['text']
        );
        Mail::to(env('MAIL_FROM_ADDRESS'))->send($mail);
        return response(null, 204);
    }
}
