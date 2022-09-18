<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function goCustomers()
    {
        return view('site.clientes');
    }
}
