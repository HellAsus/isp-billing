<?php

namespace App\GraphQL\Mutations\Auth;
use App\User;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {   
        /* $request->validate([
            'username' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password'); */

        #return $args['password'];
    
        if (Auth::attempt(['username' => $args['username'], 'password' => $args['password']])){
            $user = User::where('username', $args['username'])->first();
    
            $token = $user->createToken($args['username'])->plainTextToken;

            return [
                'user' => $user,
                'token' => $token
            ];
            
        } else {
            return [
                'user' => null,
                'token' => 'unauthenticated'
            ];
        }
    }

    public function login(){
        return 'ok';
    }
}
