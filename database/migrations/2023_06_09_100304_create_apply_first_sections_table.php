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
        Schema::create('apply_first_sections', function (Blueprint $table) {
            $table->id();
            $table->string("home_town");
            $table->text("complete_address");
            $table->string("phone");
            $table->string("timing");
            $table->string("email");
            $table->text("email_text");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_first_sections');
    }
};
