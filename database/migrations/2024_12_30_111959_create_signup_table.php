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
        Schema::create('signup', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('name'); // User's name
        $table->string('email')->unique(); // Unique email
        $table->string('password'); // Hashed password
        $table->unsignedBigInteger('parent_id')->nullable(); // Parent ID (referencing another user)
        $table->string('referral_code')->unique(); // Unique referral code
        $table->timestamps(); // Created and updated timestamps

        $table->foreign('parent_id')->references('id')->on('signup')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signup');
    }
};
