<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->role == 1){
                return redirect()->intended(route('receptioniste.dashboard'));
            }
            if(Auth::user()->role == 2){
                return redirect()->intended(route('infirmier.dashboard'));
            }
            if (Auth::user()->role == 3){
                return redirect()->intended(route('medecin.dashboard'));
            }
            if (Auth::user()->role == 4){
                return redirect()->intended(route('laboratain.dashboard'));
            }
        }
        return back()->withErrors([
            'not_found' => 'utilisateur non trouver'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
