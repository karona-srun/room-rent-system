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
        Schema::create('invoice_paids', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->date('invoice_date');
            $table->decimal('room_cost',9,2);
            $table->decimal('electric_cost',9,2);
            $table->decimal('water_cost',9,2);
            $table->bigInteger('water_old');
            $table->bigInteger('water_new');
            $table->decimal('wifi_cost',9,2)->nullable();
            $table->decimal('panking_cost',9,2)->nullable();
            $table->decimal('electric_trash_cost',9,2);
            $table->tinyInteger('status')->comment('0 is free, 1 is close, and 2 is rented');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_paids');
    }
};
