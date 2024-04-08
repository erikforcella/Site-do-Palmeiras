<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuridicoController extends Controller
{
    public function juridico() {
        return view('site.juridico');
    }
}