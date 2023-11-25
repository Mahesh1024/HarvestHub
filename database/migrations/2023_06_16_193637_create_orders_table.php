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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('order_id')->primary();

            $table->string('email_id');

            $table->foreign('email_id')
                ->references('email_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->dateTime('order_date');
            $table->decimal('total_amount', 8, 2);

            $table->unsignedBigInteger('shipping_address');

            $table->foreign('shipping_address')
                ->references('id')
                ->on('user_addresses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
