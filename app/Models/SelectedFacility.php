<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SelectedFacility extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id', 'booking_id'];
    protected $fillable = ['is_having_gym', 'is_having_ground', 'is_having_parking'];

    public function booking(): BelongsTo {
        return $this->belongsTo(Booking::class);
    }

}
