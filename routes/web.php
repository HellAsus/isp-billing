<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use App\Models\{Customer, CustomerPhone, PhoneOperatorCode};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */



/* $posts = App\Post::whereDoesntHave('comments', function (Builder $query) {
    $query->where('content', 'like', 'foo%');
})->get(); */



Route::get('/', function () {
    return Customer::where('id', 10)->first()->phones()->first()->operator()->first()->country()->first();
});

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout');
/* Route::post('register', 'Auth\RegisterController@register');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update'); */

/* Route::post('/login', function(Request $request ){
    $user = $request->user;
    $password = $request->password;


    if (Auth::attempt([
        'user' => $user,
        'password' => $password
    ])) {
        return response()->json('', 204 );
    }else{
        return response()->json([
            'error' => 'invalid_credentials'
        ], 403);
    }
}); */
