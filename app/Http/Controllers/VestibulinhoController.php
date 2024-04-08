<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VestibulinhoController extends Controller
{
    public function vestibulinho() {
        return view('site.vestibulinho');
    }
}