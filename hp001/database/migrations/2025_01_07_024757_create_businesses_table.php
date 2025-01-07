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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->text("top-image");
            $table->text("explanation-title");
            $table->text("explanation-title-p");
            $table->text("content-img-1");
            $table->text("more-text-1");
            $table->text("content-img-2");
            $table->text("more-text-2");
            $table->text("content-img-3");
            $table->text("more-text-3");
            $table->text("background-image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
