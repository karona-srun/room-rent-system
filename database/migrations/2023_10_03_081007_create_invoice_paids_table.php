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
            $table->string('invoice_no')->nullable();
            $table->bigInteger('room_id')->nullable();
            $table->string('invoice_date');
            $table->decimal('room_cost',9,2);
            $table->boolean('room_cost_status')->nullable()->comment('0 in not pay, 1 is paid');
            $table->decimal('electric_cost',9,2);
            $table->boolean('electric_cost_status')->nullable()->comment('0 in not pay, 1 is paid');
            $table->decimal('water_cost',9,2)->nullable();
            $table->boolean('water_cost_status')->nullable()->comment('0 in not pay, 1 is paid');
            $table->bigInteger('water_old')->nullable();
            $table->bigInteger('water_new')->nullable();
            $table->decimal('wifi_cost',9,2)->nullable();
            $table->boolean('wifi_cost_status')->nullable()->comment('0 in not pay, 1 is paid');
            $table->decimal('panking_cost',9,2)->nullable();
            $table->boolean('panking_cost_status')->nullable()->comment('0 in not pay, 1 is paid');
            $table->decimal('electric_trash_cost',9,2);
            $table->boolean('electric_trash_cost_status')->nullable()->comment('0 in not pay, 1 is paid');
            $table->string('total_amount');
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
