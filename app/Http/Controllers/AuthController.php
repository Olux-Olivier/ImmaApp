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
                return redirect()->intended(route('receptioniste.index'));
            }
            if(Auth::user()->role == 2){
                return redirect()->intended(route('patient.show_all'));
            }
            if (Auth::user()->role == 3){
                return redirect()->intended(route('medecin.index'));
            }
            if (Auth::user()->role == 4){
                return redirect()->intended(route('laboratain.index'));
            }
        }
    }
}
