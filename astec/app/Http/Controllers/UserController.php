<?php

namespace App\Http\Controllers;
use App\Libraries\Components\Table;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\User;

class UserController extends Controller
{
    public function store() {
        $user = new UserModel();
        $user->register();

        return view('site.cadastro');
    }

    public function list() {
        $header = ['NOME', 'SOBRENOME', 'EMAIL', 'CPF', 'TELEFONE'];
        $um = new UserModel();

        $body = $um->listAll();

        $table = new Table($header, $body->toArray());

        return view('site.usuarios', ['table' => $table->getHTML()]);
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        
        return view('site.usuarios')->with('msg', 'Usuário removido com sucesso!');
    }
}
