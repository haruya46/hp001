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
        Schema::create('tops', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->text('business-image');
            $table->text('business-text');
            $table->text('recruit-image');
            $table->text('recruit-text');
            $table->text('company-hand-text');
            $table->text('company-image');
            $table->text('company-text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tops');
    }
};
