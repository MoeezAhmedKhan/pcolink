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
        Schema::create('pco_cars_images', function (Blueprint $table) {
            $table->id();
            $table->string("car_image");
            $table->unsignedBigInteger("pco_cars_id");
            $table->foreign("pco_cars_id")->references("id")->on("pco_cars_second_sections");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pco_cars_images');
    }
};
