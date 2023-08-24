<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Facility extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id', 'school_id'];
    protected $fillable = ['is_having_gym', 'is_having_ground', 'is_having_parking'];

    public function school(): BelongsTo {
        return $this->belongsTo(School::class);
    }
}
