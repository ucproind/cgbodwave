<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiKeysTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     */
    public function run(): void
    {

        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::connection('tenant')->table('api_keys')->delete();

        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
