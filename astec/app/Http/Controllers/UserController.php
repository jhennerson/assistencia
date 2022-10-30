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
        $body = [];

        $table = new Table($header, $body);

        $this->header = $header;
        $this->body = $body;

        return view('site.usuarios', ['table' => $table->getHTML()]);
    }
}
