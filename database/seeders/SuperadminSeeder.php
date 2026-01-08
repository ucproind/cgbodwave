<?php
    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;

    class SuperAdminSeeder extends Seeder
    {
        public function run(): void
        {
            DB::connection('central')->table('superadmins')->truncate();

            DB::connection('central')->table('superadmins')->insert([
                'name' => 'Wave Super Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
