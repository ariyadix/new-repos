<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ReviewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($x = 1; $x <= 3; $x++) {

            DB::table('reviewer')->insert([
                'rev_id' => sprintf('rev%03d', $x),
                'nama' => 'Reviewer '. $x,
                'img_url' =>  'default.jpg',
            ]);
        }
    }
}
