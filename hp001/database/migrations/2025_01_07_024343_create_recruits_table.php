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
            $table->text("one-word-title");
            $table->text("one-word-text");
            $table->text("krona-one-regular");
            $table->text("krona-one-regular-text");
            $table->text("krona-one-regular-image");
            $table->text("company-messeage-title");
            $table->text("company-messeage-item1");
            $table->text("company-messeage-item2");
            $table->text("company-messeage-area-image");
            $table->text("background-image");
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
