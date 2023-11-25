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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->boolean('default')->default(false);
            $table->string('full_name')->nullable();
            $table->bigInteger('mobile_number')->nullable();
            $table->string('email_id')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('address')->nullable();
            $table->string('city/town')->nullable();
            $table->string('state')->nullable();
            $table->string('landmark')->nullable();
            $table->string('alternative_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
