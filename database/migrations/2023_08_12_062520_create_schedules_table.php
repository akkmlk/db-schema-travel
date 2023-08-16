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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_type_id')->constrained('cars_type')->cascadeOnDelete();
            // $table->foreignId('departure_route_id')->constrained('routes')->cascadeOnDelete();
            // $table->foreignId('arrival_route_id')->constrained('routes')->cascadeOnDelete();
            $table->time('departure_time');
            $table->time('duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');  
    }
};
