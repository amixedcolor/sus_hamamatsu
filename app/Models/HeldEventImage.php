<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HeldEventImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id', 'held_event_id'];
    protected $fillable = ['data'];

    public function heldEvent(): BelongsTo {
        return $this->belongsTo(HeldEvent::class);
    }

    public function convertToBase64(): string {
        return 'data:image/png;base64,' . base64_encode($this->data);
    }
}
