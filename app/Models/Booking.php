<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['customer_name', 'phone_number', 'email', 'date', 'time_start', 'time_end', 'purpose_of_use', 'details'];
}
