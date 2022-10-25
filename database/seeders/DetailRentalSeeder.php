<?php

namespace Database\Seeders;
use App\Models\detail_rental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ottaviano\Faker\Gravatar;

// use \Ottaviano\Faker\Gravatar as gravatar;

class DetailRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = fake ('id_ID');
        $faker->addProvider(new Gravatar($faker));
        for ($i=0; $i < 5; $i++) { 
            detail_rental :: create ([
                'telp_rental' =>  $faker ->numerify('+62-############'),
                'alamat' =>  $faker ->address (),
                'kota' =>  $faker ->city (),
                'provinsi' =>  $faker ->citySuffix (),
                'kode_pos' =>  $faker ->postcode (),
                // 'ktp' =>  $faker ->image (null, 360, 360, 'animals', true, true, 'cats', true, 'jpg'),
                'wajah_ktp' =>  $faker->gravatar()
                // 'koordinat' =>  $faker ->image (null, 360, 360, 'animals', true, true, 'cats', true, 'jpg'),
                // 'foto_profil' =>  $faker ->image (null, 360, 360, 'animals', true, true, 'cats', true, 'jpg'),
            ]);
        }
    }
}
