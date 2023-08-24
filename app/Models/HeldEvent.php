<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeldEvent extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id', 'school_id'];
    protected $fillable = ['title', 'detail'];

    public function school(): BelongsTo {
        return $this->belongsTo(School::class);
    }

    public function bookings(): BelongsToMany {
        return $this->belongsToMany(Booking::class);
    }

    public function heldEventImages(): HasMany {
        return $this->hasMany(HeldEventImage::class);
    }
}
