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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text("background_image_vision");
            $table->text("image_in_text");
            $table->text("vision_text");
            $table->text("krona_one_regular_1");
            $table->text("krona_one_regular_text_1");
            $table->text("krona_one_regular_2");
            $table->text("krona_one_regular_text_2");
            $table->text("ceo_image");
            $table->text("text1");
            $table->text("text2");
            $table->text("text3");
            $table->text("ceo_text");
            $table->text("company_category_1");
            $table->text("company_category_text_1");
            $table->text("company_category_2");
            $table->text("company_category_text_2");
            $table->text("company_category_3");
            $table->text("company_category_text_3");
            $table->text("company_category_4");
            $table->text("company_category_text_4");
            $table->text("company_category_5");
            $table->text("company_category_text_5");
            $table->text("background_image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
