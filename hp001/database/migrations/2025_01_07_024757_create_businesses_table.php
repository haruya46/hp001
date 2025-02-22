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
            $table->text("top_image");
            $table->text("explanation_title");
            $table->text("explanation_title_p");
            $table->text("content_img_1");
            $table->text("more_text_1");
            $table->text("content_img_2");
            $table->text("more_text_2");
            $table->text("content_img_3");
            $table->text("more_text_3");
            $table->text("background_image");
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
