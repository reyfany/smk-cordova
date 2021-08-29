<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelasanController extends Controller
{
    public function index()
    {
        return view('front.pengelasan');
    }
}
