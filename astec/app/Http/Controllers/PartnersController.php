<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function goPartners() {
        return view('site.parceiros');
    }
}
