<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'id_number' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => ['required', Password::min(1),'confirmed'] /// password_confirmation
        ]);
        $user = User::create($attributes);
        
        Auth::login($user);

        return redirect('/customers');
    }
}
