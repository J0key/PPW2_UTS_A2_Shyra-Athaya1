<?php

namespace Database\Seeders;

use App\Models\Pemain;
use Database\Factories\PemainFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemain::Factory(5)->create();
    }
}
