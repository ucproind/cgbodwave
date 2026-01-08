<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionRoleTableSeeder extends Seeder
{
    public function run(): void
    {
        // Clear cached permissions
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::connection('tenant')->table('role_has_permissions')->truncate();
        DB::connection('tenant')->statement('SET FOREIGN_KEY_CHECKS=1;');

        $adminRole = Role::on('tenant')->where('name', 'admin')->first();
        $userRole  = Role::on('tenant')->where('name', 'user')->first();

        $adminPermissions = Permission::on('tenant')->pluck('name')->toArray();
        $userPermissions = [
            'view_projects',
        ];

        $adminRole?->syncPermissions($adminPermissions);
        $userRole?->syncPermissions($userPermissions);
    }
}
