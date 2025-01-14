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
        Schema::table('recruits', function (Blueprint $table) {
            $table->text("top_image");
            $table->text("full_time_image");
            $table->text("part_time_image");
            $table->text("self_time_image");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recruits', function (Blueprint $table) {
           //
        });
    }
};
