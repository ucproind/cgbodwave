<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class TenantMigrate extends Command
{
    protected $signature = 'tenant:migrate {database} {--fresh} {--seed}';

    protected $description = 'Run tenant database migrations';

    public function handle()
    {
        $database = $this->argument('database');

        $this->info("🟢 Migrating tenant database: {$database}");

        // Dynamically set tenant DB
        config([
            'database.connections.tenant.database' => $database,
        ]);

        DB::purge('tenant');

        $params = [
            '--database' => 'tenant',
            '--path'     => 'database/migrations/tenant',
            '--force'    => true,
        ];

        if ($this->option('seed')) {
            $this->info('🌱 Seeding TENANT database...');
            Artisan::call('db:seed', [
                '--database' => 'tenant',
                '--class' => 'Database\\Seeders\\TenantDatabaseSeeder',
                '--force' => true,
            ]);
        }


        if ($this->option('fresh')) {
            Artisan::call('migrate:fresh', $params);
        } else {
            Artisan::call('migrate', $params);
        }

        $this->info('✅ Tenant migrations completed.');
    }
}
