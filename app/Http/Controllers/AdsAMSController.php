<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsAMSController extends Controller
{
    public function adsams() {
        return view('site.adsams');
    }
}