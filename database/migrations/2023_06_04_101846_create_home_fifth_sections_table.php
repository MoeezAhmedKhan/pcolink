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
        Schema::create('home_fifth_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('description1');
            $table->string('description2');
            $table->string('description3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_fifth_sections');
    }
};
