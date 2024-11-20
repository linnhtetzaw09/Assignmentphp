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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // User's name
            $table->string('email')->unique(); // Unique email
            $table->timestamp('email_verified_at')->nullable(); // For email verification (optional)
            $table->string('password'); // Hashed password
            $table->string('preferred_sport')->nullable(); // Nullable field for sport preference
            $table->string('skill_level')->nullable(); // Nullable field for skill level
            $table->rememberToken(); // Token for "Remember Me" functionality
            $table->timestamps(); // Created at & Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
