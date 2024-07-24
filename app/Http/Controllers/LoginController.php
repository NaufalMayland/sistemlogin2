<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function LoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // $user = Auth::user();
            if (Auth::user()->admin) {
                return redirect('/admin');
            } elseif (Auth::user()->guru) {
                return redirect('/guru');
            } elseif (Auth::user()->siswa) {
                return redirect('/siswa');
            }
        }   
        else{
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }    
}
