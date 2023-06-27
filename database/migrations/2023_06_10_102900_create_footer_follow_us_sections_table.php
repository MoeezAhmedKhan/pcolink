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
        Schema::create('footer_follow_us_sections', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("text");
            $table->string("facebook");
            $table->string("instagram");
            $table->string("whatsapp");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_follow_us_sections');
    }
};
