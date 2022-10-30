<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function show($id) {
        $comment = Comment::findOrFail($id);

        $author = Comment::where('id', $comment->user_id)->first()->toArray();

        return view('comment.show', ['']);
    }

    public function commentList() {
        $comments = Comment::all();

        return view('site.clientes',['comments' => $comments]);
    }
}
