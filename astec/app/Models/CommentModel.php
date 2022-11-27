<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    public function register() {
        if(sizeof($_POST) == 0) return;

        $data = request();

        $result = $data->validate([
            //id já vem como padrão
            'author' => 'required|string|min:2|max:50',
            'content' => 'required|min:1|max:255'
        ]);

        Comment::create($result);
    }
    
    public function listAll() {
        $product = new Comment();
        return $product->select('author', 'content')->get();
    }
}
