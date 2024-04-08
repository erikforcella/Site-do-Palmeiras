<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContabilidadeController extends Controller
{
    public function contabilidade() {
        return view('site.contabilidade');
    }
}