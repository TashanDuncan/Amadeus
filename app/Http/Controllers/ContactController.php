<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
            request()->validate([
                'email' => 'required|email',
                'message' => 'required'
                ]);

            $email = request('email');
            $message = request('message');

            dd($email, $message);

    }
}
