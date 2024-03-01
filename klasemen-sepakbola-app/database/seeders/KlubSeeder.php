<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('klub')->insert([
            [
                'name' => 'Persib',
                'city' => 'Bandung',
                'ma' => 2,
                'me' => 2,
                's' => 0,
                'k' => 0,
                'gm' => 4,
                'gk' => 0,
                'point' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arema',
                'city' => 'Malang',
                'ma' => 2,
                'me' => 1,
                's' => 0,
                'k' => 1,
                'gm' => 2,
                'gk' => 2,
                'point' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Persija',
                'city' => 'Jakarta',
                'ma' => 2,
                'me' => 0,
                's' => 0,
                'k' => 2,
                'gm' => 0,
                'gk' => 4,
                'point' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
