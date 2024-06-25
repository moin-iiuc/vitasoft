<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    //
    public function index()
    {
        if(Auth::check()){
            return redirect('/');
        }
        else{
            request()->validate([
            'name'=>['required','min:4'],
            'email'=>['required','email'],
            'password'=>['required','min:4'],
            
        ]);
        $user=User::Create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>request('password'),
        ]);
        Auth::login($user);
        return view('/',['user'=>$user]);
    }
    }
}
