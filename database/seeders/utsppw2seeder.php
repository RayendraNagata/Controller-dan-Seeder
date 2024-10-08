<?php

namespace Database\Seeders;

use App\Models\utsppw2;
use Illuminate\Database\Seeder;

class utsppw2seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            utsppw2::create([
                'namapemain' => fake()->name(),
                'nomorpunggung' => fake()->numberBetween(int1: 1, int2: 99),
                'posisi' => fake()->sentence(nbWords: 2),
            ]);
        }
        
    }
}
