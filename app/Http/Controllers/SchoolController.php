<?php

namespace App\Http\Controllers;

use \App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        return view('school-list', ['schools' => School::with(['schoolImages'])->get()]);
    }
    
    public function show($id)
    {
        $school_d = School::with(['schoolImages'])->Find($id);
        return view('school-details', ['school' => $school_d]);
    }
}
