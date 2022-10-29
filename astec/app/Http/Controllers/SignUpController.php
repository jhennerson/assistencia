<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function goSignUp() {
        return view('site.cadastro');
    }
}
