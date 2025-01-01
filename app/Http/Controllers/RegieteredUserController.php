<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegieteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $validatedAttributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);
        $user = User::create($validatedAttributes);
        Auth::login($user);
        return redirect('/');
    }
}
