<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function goCompany()
    {
        return view('site.empresa');
    }
}