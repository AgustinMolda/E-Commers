<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function __construct(AuthenticationService $service){

    }
    
    public function showRegister(){

        return view('auth.register');
    }

    public function register(AuthRequest $request){
        
        $this->service->register($request);


    }


    public function showLogin(){
        return view('auth.login');
    }

    public function login(AuthRequest $request){
        $this->service->login($request);
    }

    public function logout(){
        $this->service->logout();
    }
}
