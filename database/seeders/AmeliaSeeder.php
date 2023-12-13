<?php

namespace Database\Seeders;

use App\Models\Amelia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmeliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Amelia::Factory()->count(5)->create();
    }
}
