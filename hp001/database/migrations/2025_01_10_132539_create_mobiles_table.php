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
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id();
            $table->text("top_image");
            $table->text("top_bottom_text");
            $table->text("content_text");
            $table->text("content_text_image");
            $table->text("business_title");
            $table->text("business_sab_title_1");
            $table->text("business_item_text_1");
            $table->text("business_item_image_1");
            $table->text("business_sab_title_2");
            $table->text("business_item_text_2");
            $table->text("business_item_image_2");
            $table->text("business_sab_title_3");
            $table->text("business_item_text_3");
            $table->text("business_item_image_3");
            $table->text("background_image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobiles');
    }
};
