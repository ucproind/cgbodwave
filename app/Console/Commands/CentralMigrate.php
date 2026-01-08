<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CentralMigrate extends Command
{
    protected $signature = 'central:migrate {--fresh} {--seed}';

    protected $description = 'Run central database migrations';

    public function handle()
    {
        $this->info('🔵 Running CENTRAL migrations...');

        $params = [
            '--database' => 'central',
            '--path'     => 'database/migrations/central',
            '--force'    => true,
        ];
        
        if ($this->option('seed')) {
            $this->info('🌱 Seeding CENTRAL database...');
            Artisan::call('db:seed', [
                '--database' => 'central',
                '--class' => 'Database\\Seeders\\CentralDatabaseSeeder',
                '--force' => true,
            ]);
        }


        if ($this->option('fresh')) {
            Artisan::call('migrate:fresh', $params);
        } else {
            Artisan::call('migrate', $params);
        }

        $this->info('✅ Central migrations completed.');
    }
}
