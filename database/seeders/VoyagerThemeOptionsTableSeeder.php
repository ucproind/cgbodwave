<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyagerThemeOptionsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::connection('central')->table('theme_options')->truncate();
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::connection('central')->table('theme_options')->insert([
            [
                'theme_id' => 1,
                'key' => 'logo',
                'value' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'theme_id' => 1,
                'key' => 'home_headline',
                'value' => 'Welcome to Wave',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'theme_id' => 1,
                'key' => 'home_subheadline',
                'value' => 'Start crafting your next great idea.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'theme_id' => 1,
                'key' => 'home_description',
                'value' => 'Wave will help you rapidly build a Software as a Service. Out of the box Authentication, Subscriptions, Invoices, Announcements, User Profiles, API, and so much more!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'theme_id' => 1,
                'key' => 'home_cta',
                'value' => 'Signup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'theme_id' => 1,
                'key' => 'home_cta_url',
                'value' => '/register',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'theme_id' => 1,
                'key' => 'home_promo_image',
                'value' => 'themes/default/home.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'theme_id' => 1,
                'key' => 'footer_logo',
                'value' => 'themes/default/footer.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
