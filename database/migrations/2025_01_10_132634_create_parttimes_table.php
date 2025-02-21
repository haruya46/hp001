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
        Schema::create('parttimes', function (Blueprint $table) {
            $table->id();
            $table->text("company_goal");
            $table->text("recruitment_img");
            $table->text("content_title_1");
            $table->text("content_p_1");
            $table->text("content_title_2");
            $table->text("content_p_2");
            $table->text("content_title_3");
            $table->text("content_p_3");
            $table->text("content_title_4");
            $table->text("content_p_4");
            $table->text("content_title_5");
            $table->text("content_p_5");
            $table->text("content_title_6");
            $table->text("content_p_6");
            $table->text("content_title_7");
            $table->text("content_p_7");
            $table->text("content_title_8");
            $table->text("content_p_8");
            $table->text("location_title");
            $table->text("location_img_1");
            $table->text("location_img_2");
            $table->text("location_img_3");
            $table->text("location_text_area_1");
            $table->text("location_text_area_2");
            $table->text("application_img");
            $table->text("background_image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parttimes');
    }
};
