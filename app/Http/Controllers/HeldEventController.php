<?php

namespace App\Http\Controllers;

use App\Models\HeldEvent;
use Illuminate\Http\Request;

class HeldEventController extends Controller
{
    public function index()
    {
        return view('held-event-list', ['heldEvents' => HeldEvent::with(['school', 'bookings', 'heldEventImages'])->get()]);
    }
}
