<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission')->insert([
            'id' => '101',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('permission')->insert([
            'id' => '102',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '301',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);


        DB::table('permission')->insert([
            'id' => '401',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '402',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

       

        DB::table('permission')->insert([
            'id' => '501',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '502',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '503',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '901',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('permission')->insert([
            'id' => '902',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '903',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '904',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '905',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        DB::table('permission')->insert([
            'id' => '906',
            'access' => '"[1,2]"',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
    }
}
