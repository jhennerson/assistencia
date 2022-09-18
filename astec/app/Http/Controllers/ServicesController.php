<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function goServices()
    {
        return view('site.servicos');
    }
}
