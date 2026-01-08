<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     */
    public function run(): void
    {

        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::connection('central')->table('notifications')->truncate();
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
