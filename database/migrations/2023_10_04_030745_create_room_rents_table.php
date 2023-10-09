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
        Schema::create('room_rents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('room_id');
            $table->bigInteger('customer_id');
            $table->decimal('electric_cost',9,2)->nullable();
            $table->decimal('water_cost',9,2)->nullable();
            $table->decimal('wifi_cost',9,2)->nullable();
            $table->decimal('panking_cost',9,2)->nullable();
            $table->decimal('electric_trash_cost',9,2);
            $table->tinyInteger('status')->comment('0 is rented, 1 is stop');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_rents');
    }
};
