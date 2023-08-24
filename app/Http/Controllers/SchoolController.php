<?php

namespace App\Http\Controllers;

use \App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        School::all()->first()->schoolImages();
        return view('school-list', ['schools' => School::with(['schoolImages'])->get()]);
    }
}
