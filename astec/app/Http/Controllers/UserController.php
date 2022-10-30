<?php

namespace App\Http\Controllers;
use App\Libraries\Components\Table;
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

    public function list() {
        $header = ['first_name', 'last_name', 'email', 'cpf', 'phone'];
        $um = new UserModel();        

        $body = $um->list();

        $table = new Table($header, $body->toArray());

        return view('site.usuarios', ['table' => $table->getHTML()]);
    }
}
