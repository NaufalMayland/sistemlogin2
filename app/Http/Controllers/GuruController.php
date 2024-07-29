<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class GuruController extends Controller
{
    public function getnavitem(){
        $user = Auth::user();

        $guru['isKelas'] = !is_null($user->guru->kelas);
        $guru['isMapel'] = !is_null($user->guru->mapel) ;

        $navitem = [
            [
                'name' => 'Dashboard', 
                'url' => '/guru'
            ],

            [
                'name' => 'Tujuan Kompetensi',
                'url' => '/guru/tkompetensi'
            ],

            [
                'name' => 'Nilai Akademik', 
                'url' => '/guru/nakademik',
                'subItems' => [
                    [
                        'name' => 'Nilai Sumatif',
                        'url' => '#'
                    ],
                    [
                        'name' => 'Nilai Akhir',
                        'url' => '#'
                    ]
                ]
            ],
                
            [
                'name' => 'Raport Siswa', 
                'url' => '/guru/raport'
            ],
        ];
        
        if ($guru['isKelas'] && !$guru['isMapel']) {
            $navitem = array_filter($navitem, function ($item) {
                return $item['name'] !== 'Tujuan Kompetensi';
            });
        }

        return $navitem;
    }
    
    public function index(){
        $user = Auth::user();
        $guru['isKelas'] = !is_null($user->guru->kelas);
        $guru['isMapel'] = !is_null($user->guru->mapel) ;
        $navitem = $this->getnavitem($guru['isKelas'] && !$guru['isMapel']);
        
        return view('guru.index', compact('guru','navitem'),
        [
            'title' => 'Dashboard'
        ]);
    }

    public function tkompetensi(){
        $user = Auth::user();
        $guru['isKelas'] = !is_null($user->guru->kelas);
        $guru['isMapel'] = !is_null($user->guru->mapel) ;
        $navitem = $this->getnavitem($guru['isKelas'] && !$guru['isMapel']);
        
        return view('guru.tkompetensi', compact('guru','navitem'),
    [
        'title' => 'Tujuan Pembelajaran'
    ]);
    }
}
