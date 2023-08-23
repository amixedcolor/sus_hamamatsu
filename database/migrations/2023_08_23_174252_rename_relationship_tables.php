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
        Schema::rename('held_events_bookings', 'held_event_booking');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('held_event_booking', 'held_events_bookings');
    }
};
