<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentralDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(PlansTableSeeder::class);
        $this->call(SuperadminSeeder::class);
        $this->call(ThemesTableSeeder::class);
    }
}
