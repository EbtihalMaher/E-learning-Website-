<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function create(){
        return view('contact-messages/create');
    }
    public function store(){
        request()->validate([
            'name' => ['required','string','max:255','min:3'],
            'email' => ['required','email'],
            'message' => ['required','string','min:3'],
        ]);
        ContactMessage::create([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message')
        ]);
        return redirect('/contact-messages/create');
    }
}
