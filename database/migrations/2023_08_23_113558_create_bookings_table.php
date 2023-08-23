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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->string('customer_name', 64);
            $table->string('phone_number', 16);
            $table->string('e_mail', 64);
            $table->date('date');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('purpose_of_use', 128);
            $table->string('details', 1024);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
