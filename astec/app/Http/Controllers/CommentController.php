<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Libraries\Components\Table;
use App\Models\CommentModel;
use App\Models\Comment;

class CommentController extends Controller
{
    public function list() {
        $header = ['AUTOR', 'CONTEÚDO'];
        $pm = new CommentModel();

        $body = $pm->listAll();

        $table = new Table($header, $body->toArray(), 'comentarios');

        return view('site.comentarios', ['table' => $table->getHTML()]);
    }

    public function edit($id) {
        $comment = Comment::findOrFail($id);

        return view('site.editar-comentario', compact('comment'));
    }

    public function update(Request $request) {
        Comment::findOrFail($request->id)->update($request->all()); 

        return redirect('comentarios')->with('msg', 'Cometário editado com sucesso!');
    }

    public function destroy($id) {
        Comment::findOrFail($id)->delete();

        return redirect('comentarios')->with('msg', 'Cometário removido com sucesso!');
    }
}
