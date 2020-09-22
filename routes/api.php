<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function (Request $request) {
    
    $request->validate([
        'email' => 'required',
        'password' => 'required',
        //'device_name' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = User::where('email', $request->email)->first();

        return $user->createToken($request->email)->plainTextToken;
        
    } else {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    /* $user = User::where('email', $request->email)->first();

    return $user->createToken($request->email)->plainTextToken; */
    
});

/* Route::get( '/some_url', function () {
    return "Token is wrong";
}
)->name('login') */;

/* Route::post('/login', function (Request $request) {
    $users = DB::table('users')->select('password')->where('username', 'gorynich1')->get();
});
 */