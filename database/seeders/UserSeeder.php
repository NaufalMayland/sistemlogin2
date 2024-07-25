<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata = [
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123')
            ],
            [
                'email' => 'guru@gmail.com',
                'password' => bcrypt('guru123')
            ],
            [
                'email' => 'siswa@gmail.com',
                'password' => bcrypt('siswa123')
            ]
            
        ];
        User::insert($userdata);
    }
}
