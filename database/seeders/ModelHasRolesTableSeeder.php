<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ModelHasRolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::connection('tenant')->table('model_has_roles')->truncate();

        DB::connection('tenant')->table('model_has_roles')->insert([
            [
                'role_id' => 1, // admin role
                'model_type' => User::class,
                'model_id' => 1, // first tenant admin
            ],
        ]);

        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
