<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $faker = fake ('id_ID');
        for ($i=0; $i < 5; $i++) { 
            # code...
            User :: create ([
                'nama_user' =>  $faker ->name (),
                'username' =>  $faker ->userName (),
                'email' =>  $faker ->email (),
                'password' =>  $faker ->password (2, 6),
            ]);
        }
    }
}
