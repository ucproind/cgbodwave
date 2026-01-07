<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();

            $table->string('avatar')->default('demo/default.png');

            $table->longText('notification_preferences')->nullable();
            $table->longText('privacy_settings')->nullable();
            $table->longText('social_links')->nullable();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('password')->nullable();

            // Two Factor Authentication
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->timestamp('two_factor_confirmed_at')->nullable();

            $table->rememberToken();

            $table->timestamp('deletion_scheduled_at')->nullable();
            $table->dateTime('trial_ends_at')->nullable();

            $table->string('verification_code')->nullable();
            $table->boolean('verified')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
