<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     */
    public function run(): void
    {

        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::connection('central')->table('settings')->truncate();
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::connection('central')->table('settings')->insert([
            0 => [
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Wave',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ],
            1 => [
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'The Software as a Service Starter Kit built with Laravel',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ],
            2 => [
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => null,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ],
        ]);

    }
}
