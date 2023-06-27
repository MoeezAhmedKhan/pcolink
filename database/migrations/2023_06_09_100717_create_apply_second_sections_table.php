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
        Schema::create('apply_second_sections', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("city");
            $table->string("postal_code");
            $table->string("phone");
            $table->text("address");
            $table->text("message");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_second_sections');
    }
};
