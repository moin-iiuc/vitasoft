<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return view('Home');
});
Route::get('/products', function () {
    $products=Products::all();
    return view('Components.products',['products' => $products]);
});
Route::view('/about','about');
Route::view('/contact','contact');
Route::view('/pricing','pricing');
Route::view('/login','login');
Route::post('/login',[LoginController::class, 'index']);
Route::post('/logout',[SessionController::class,'destroy']);
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [SignupController::class,'index']); 

//google log in 
Route::get('/auth/callback', function () {
    $google_user = Socialite::driver('google')->stateless()->user();
    $user = User::updateOrCreate([
        'google_id'=>$google_user->id,
    ],[
       'google_Id' => $google_user->getId(),
        'name' => $google_user->getName(),
        'email' => $google_user->getEmail(),
    ]);
    //dd($user->google_Id);
    Auth::login($user);
    return redirect('products/');
    // $user->token
});

//google login 

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

