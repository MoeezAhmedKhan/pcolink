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
        Schema::create('home_sixth_sections', function (Blueprint $table) {
            $table->id();
            $table->string('left_text');
            $table->string('left_button_text');
            $table->string('left_image');
            $table->string('right_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sixth_sections');
    }
};
