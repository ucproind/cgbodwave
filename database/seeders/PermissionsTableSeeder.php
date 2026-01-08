<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     */
    public function run(): void
    {
        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::connection('tenant')->table('model_has_permissions')->truncate();
        DB::connection('tenant')->table('role_has_permissions')->truncate();
        DB::connection('tenant')->table('permissions')->truncate();

        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::connection('tenant')->table('permissions')->insert([
            [
                'name' => 'view_projects',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'manage_projects',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
