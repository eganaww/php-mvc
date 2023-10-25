<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jenis;
use App\Models\Level;
use App\Models\petugas;
use App\Models\Ruang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        petugas::factory(3)->create();
        Level::factory(3)->create();
        Jenis::factory(3)->create();
        Ruang::factory(3)->create();
    }
}
