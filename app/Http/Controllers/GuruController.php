<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index(){
        $user = Auth::user();

        $isGuruKelas = $user->guru->kelas !== null;
        $isGuruMapel = $user->guru->mapel !== null;

        return view('guru.index', compact('isGuruKelas', 'isGuruMapel'));
    }
}
