<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RhController extends Controller
{
    public function rh() {
        return view('site.rh');
    }
}