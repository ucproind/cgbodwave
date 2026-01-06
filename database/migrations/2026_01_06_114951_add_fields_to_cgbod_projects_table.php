<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cgbod_projects', function (Blueprint $table) {
            $table->unsignedBigInteger('tenant_id')->after('id')->default(0);
            $table->text('description')->after('name')->nullable();
            $table->enum('status', ['active', 'archived'])->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cgbod_projects', function (Blueprint $table) {
            $table->dropColumn('tenant_id');
            $table->dropColumn('description');
            $table->dropColumn('status');
        });
    }
};
