<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OportunidadesController extends Controller
{
    public function oportunidades() {
        return view('site.oportunidades');
    }
}