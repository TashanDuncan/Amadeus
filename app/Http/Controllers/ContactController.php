<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store()
    {
            request()->validate([
                'email' => 'required|email',
                'message' => 'required'
                ]);

            Mail::raw(request('message'), function ($email){
                $email->to(request('email'))
                    ->subject('Email from Amadeus App');
            });

            return redirect('/')
                ->with('message', 'Email Sent!');

    }
}
