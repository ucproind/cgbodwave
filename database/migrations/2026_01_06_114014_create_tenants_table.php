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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Company / Tenant name
            $table->string('slug')->unique(); // for subdomain or url
            $table->string('domain')->nullable(); // artsign.example.com
            $table->string('app_name')->nullable();
            $table->string('logo_path')->nullable();
            $table->integer('company_size')->nullable()->comment('Number of employees');

            $table->string('email')->nullable();
            $table->boolean('is_active')->default(true);

            // Indexes
            $table->index('slug');
            $table->index('domain');
            $table->index('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
