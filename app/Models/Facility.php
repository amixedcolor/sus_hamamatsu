<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['is_having_gym', 'is_having_ground', 'is_having_parking'];
}
