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
        Schema::create('recruits', function (Blueprint $table) {
            $table->id();
            $table->text("handwriting");
            $table->text("one_word_title");
            $table->text("one_word_text");
            $table->text("krona_one_regular");
            $table->text("krona_one_regular_text");
            $table->text("krona_one_regular_image");
            $table->text("company_messeage_title");
            $table->text("company_messeage_item1");
            $table->text("company_messeage_item2");
            $table->text("company_messeage_area_image");
            $table->text("background_image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruits');
    }
};
