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
        Schema::create('selected_facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->boolean('is_having_gym');
            $table->boolean('is_having_ground');
            $table->boolean('is_having_parking');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selected_facilities');
    }
};
