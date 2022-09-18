<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function goShop() {
        return view('site.loja');
    }
}
