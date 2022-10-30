<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function register() {
        $user = new UserModel();
        $user->store();

        return view('site.cadastro');
        //return redirect('/entrar');
    }
}
