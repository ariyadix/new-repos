<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($x = 1; $x <= 20; $x++) {

            DB::table('dosen')->insert([
                'nip' => sprintf('dos%03d', $x),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'tgl_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'tmp_lahir' => $faker->city,
                'img_url' =>  $x . '.jpg',
                'prodi_id' =>  $faker->biasedNumberBetween($min = 1, $max = 1, $function = 'sqrt')
            ]);
        }
        for ($x = 1; $x <= 1; $x++) {

            DB::table('dosen')->insert([
                'nip' =>
                sprintf('DOSENTA%03d', $x),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'tgl_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'tmp_lahir' => $faker->city,
                'img_url' =>  $x . '.jpg',
                'prodi_id' =>  $faker->biasedNumberBetween($min = 1, $max = 1, $function = 'sqrt')
            ]);
        }
    }
}
