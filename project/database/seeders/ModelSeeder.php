<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('models')->insert([
            'id' => 1,
            'name' => 'CRESTA',
            'mark_id' => 1
        ]);

        DB::table('models')->insert([
            'id' => 2,
            'name' => 'SOLARIS',
            'mark_id' => 2
        ]);

        DB::table('models')->insert([
            'id' => 3,
            'name' => 'RX-7',
            'mark_id' => 3
        ]);
    }
}
