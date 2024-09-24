<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'id_number' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'password' => 'Your provided credentials could not be verified.'
            ]);
        }
        return redirect('/customers');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }    
}
