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
        Schema::rename('held_events_bookings', 'booking_held_event');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('booking_held_event', 'held_events_bookings');
    }
};
