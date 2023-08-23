<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingHeldEvent extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id', 'booking_id', 'held_event_id'];
    protected $fillable = [];

    public function booking(): BelongsTo {
        return $this->belongsTo(Booking::class);
    }

    public function heldEvent(): BelongsTo {
        return $this->belongsTo(HeldEvent::class);
    }
}
