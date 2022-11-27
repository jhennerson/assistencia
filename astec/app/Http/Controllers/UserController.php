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

        return view('site.cadastro-usuario');
    }

    public function list() {
        $header = ['ID', 'NOME', 'SOBRENOME', 'EMAIL', 'CPF', 'TELEFONE'];
        $um = new UserModel();

        $body = $um->listAll();

        $table = new Table($header, $body->toArray(), 'usuarios');

        return view('site.usuarios', ['table' => $table->getHTML()]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);

        return view('site.editar-usuario', compact('user'));
    }

    public function update(Request $request) {
        User::findOrFail($request->id)->update($request->all()); 

        return redirect('usuarios')->with('msg', 'Usuário editado com sucesso!');
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();

        return redirect('usuarios')->with('msg', 'Usuário removido com sucesso!');
    }
}
