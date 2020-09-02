<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use App\Tariff;

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
    return Tariff::whereLike('name', 'Бизнес')
                ->where('name', '!=', 'Бизнес-S')
                ->select('id', 'name')
                ->get();
});

Route::post('/login', function(Request $request ){
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
});
