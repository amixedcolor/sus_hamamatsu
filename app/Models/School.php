<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'price_per_hour', 'rentable_time_start', 'rentable_time_end', 'contact', 'terms', 'note'];
}
