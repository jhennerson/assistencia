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

        $table = new Table($header, $body->toArray());

        return view('site.comentarios', ['table' => $table->getHTML()]);
    }

    public function destroy($id) {
        Comment::findOrFail($id)->delete();
        
        return view('site.comentarios')->with('msg', 'Comentário removido com sucesso!');
    }
}
