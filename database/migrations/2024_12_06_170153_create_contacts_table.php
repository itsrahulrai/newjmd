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
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('fname')->nullable(); 
        $table->string('lname')->nullable();
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->string('state')->nullable();
        $table->string('district')->nullable();
        $table->string('city')->nullable();
        $table->string('pincode')->nullable();
        $table->string('option')->nullable();
        $table->text('message')->nullable(); 
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
