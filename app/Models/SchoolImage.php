<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id', 'school_id'];
    protected $fillable = ['data'];

    public function school(): BelongsTo {
        return $this->belongsTo(School::class);
    }
}
