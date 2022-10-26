<?php

namespace Database\Seeders;

use App\Models\rental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = fake ('id_ID');
        for ($i=0; $i < 100; $i++) { 
            rental::create ([
                'nama_rental' =>  $faker ->name (),
                'email' =>  $faker ->email (),
                'username' =>  $faker ->userName (),
                'password' =>  $faker ->password (2, 6),
            ]);
        }
    }
}
