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
        Schema::create('pco_cars_third_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('text_of_title');
            $table->string('main_image');
            $table->string('image1');
            $table->string('title1');
            $table->text('description1');
            $table->string('image2');
            $table->string('title2');
            $table->text('description2');
            $table->string('image3');
            $table->string('title3');
            $table->text('description3');
            $table->string('image4');
            $table->string('title4');
            $table->text('description4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pco_cars_third_sections');
    }
};
