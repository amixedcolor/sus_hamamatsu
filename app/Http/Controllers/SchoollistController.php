<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoollistController extends Controller
{
    public function index()
    {
        //表示させたいviewを指定させる
        return view('school-details');
    }
}
