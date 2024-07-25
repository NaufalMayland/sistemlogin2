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
            $request->session()->regenerate();

            $user = Auth::user();
            
            if ($user->admin) {
                return redirect('/admin');
            } 
            elseif ($user->guru) {
                return redirect('/guru');
            } 
            elseif ($user->siswa) {
                return redirect('/siswa');
            }
        }   
        else{
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
