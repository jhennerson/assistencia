<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function goContact()
    {
        return view('site.contato');
    }
}
