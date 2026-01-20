<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function register(array $data){

      $user =  User::create([
            'name' => $data['name'],
            'user' => $data['user'],
            'password' => Hash::make($data['password']->validate),
        ]);


        Auth::login($user);

        return redirect()->intended('/dashboard');
    }


    public function login(array $credentials): bool{
        
        if(!Auth::attempt($credentials)){
            throw ValidationException::withMessages([
                'email' => 'Las credenciales son incorrectas',
            ]);
        }

        request()->session_regenerate();

        return true;
    }


    public function logout(){

        Auth::logout();

        request()->invalidate();

        request()->regenerateToken();
    }
}
