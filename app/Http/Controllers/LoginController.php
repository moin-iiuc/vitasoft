<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Gate;
class LoginController extends Controller
{
    public function index()
    {
        $user=request()->validate([
            'email'=>['required','email'],
            'password'=>['required','min:4'],
        ]);
        if(!Auth::attempt($user))
        {
            throw ValidationException::withMessages([
                'email'=>'Email or password is incorrect',
            ]);
        };
        request()->session()->regenerate();
        return redirect('/');
    }
}
