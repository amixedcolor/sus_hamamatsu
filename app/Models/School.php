<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class School extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];
    protected $fillable = ['name', 'price_per_hour', 'rentable_time_start', 'rentable_time_end', 'contact', 'terms', 'note'];

    public function heldEvents(): HasMany {
        return $this->hasMany(HeldEvent::class);
    }

    public function schoolImages(): HasMany {
        return $this->hasMany(SchoolImage::class);
    }

    public function facility(): HasOne {
        return $this->hasOne(Facility::class);
    }

    public function bookings(): HasMany {
        return $this->hasMany(Booking::class);
    }
}
