<?php

namespace Database\Seeders;

use App\Models\detail_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run()
    {
        

        $faker = fake ('id_ID');
        
        for ($i=0; $i < 2; $i++) { 
            # code...
            detail_user :: create ([
                'user_id' => $faker ->numberBetween (1, 50),
                'telp_user' => $faker->phoneNumber() ,
                'alamat' => $faker ->address() ,
                'kota' => $faker ->city() ,
                'provinsi' => $faker ->state(),
                'kode_pos' => $faker->postcode(),
                'ktp' => $faker->imageUrl('jpg'),
                'wajah_ktp' => $faker->imageUrl('jpg'),
                'foto_profil' =>  $faker->imageUrl('jpg'),

            ]);
        }
    }
    
}
