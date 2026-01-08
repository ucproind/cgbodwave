<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::connection('central')->table('themes')->truncate();
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::connection('central')->table('themes')->insert([
            [
                'name' => 'Anchor Theme',
                'folder' => 'anchor',
                'active' => true,
                'version' => '1.0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
