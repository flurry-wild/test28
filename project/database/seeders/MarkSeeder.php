<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('marks')->insert([
            'id' => 1,
            'name' => 'TOYOTA'
        ]);

        DB::table('marks')->insert([
            'id' => 2,
            'name' => 'HYUNDAI'
        ]);

        DB::table('marks')->insert([
            'id' => 3,
            'name' => 'MAZDA'
        ]);
    }
}
