<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function instituicao() {
        return view('site.instituicao');
    }
}