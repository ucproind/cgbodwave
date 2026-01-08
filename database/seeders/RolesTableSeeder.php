<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::connection('tenant')->table('roles')->truncate();

        DB::connection('tenant')->table('roles')->insert([
            [
                'name' => 'admin',
                'guard_name' => 'web',
                'description' => 'Tenant administrator with full access.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'user',
                'guard_name' => 'web',
                'description' => 'Regular tenant user.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
