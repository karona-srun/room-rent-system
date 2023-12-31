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
        Schema::create('system_infos', function (Blueprint $table) {
            $table->id();
            $table->string('web_app');
            $table->decimal('exchange_riel',8);
            $table->decimal('water_cost',8);
            $table->decimal('trash_cost',8);
            $table->decimal('wifi_cost',8)->nullable();
            $table->decimal('parking_cost',8)->nullable();
            $table->boolean('option_wifi')->nullable()->comment('0 is enable');
            $table->boolean('option_parking')->nullable()->comment('0 is enable');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_infos');
    }
};
