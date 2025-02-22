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
        Schema::create('toppages', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('business_image');
            $table->text('business_text');
            $table->text('recruit_image');
            $table->text('recruit_text');
            $table->text('company_hand_text');
            $table->text('company_image');
            $table->text('company_text');
            $table->text('backgrand_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toppages');
    }
};
