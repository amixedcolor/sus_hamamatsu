<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id', 'school_id'];
    protected $fillable = ['customer_name', 'phone_number', 'email', 'date', 'time_start', 'time_end', 'purpose_of_use', 'details'];

    public function school(): BelongsTo {
        return $this->belongsTo(School::class);
    }

    public function heldEvents(): BelongsToMany {
        return $this->belongsToMany(HeldEvent::class);
    }

    public function selectedFacility(): HasOne {
        return $this->hasOne(SelectedFacility::class);
    }
}
