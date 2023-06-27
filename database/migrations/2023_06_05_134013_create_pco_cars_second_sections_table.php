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
        Schema::create('pco_cars_second_sections', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('condition');
            $table->string('price');
            $table->string('days_limit');
            $table->string('car_type');
            $table->string('year');
            $table->string('mileage');
            $table->string('fuel_type');
            $table->string('gear_box');
            $table->string('doors');
            $table->string('seats');
            $table->string('engine_size');
            $table->string('body_type');
            $table->string('colour');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pco_cars_second_sections');
    }
};
