<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $guarded = [];

    public function register() {
        if(sizeof($_POST) == 0) return; 
        
        $data = request();

        $result = $data->validate([
            //id já vem como padrão
            'first_name' => 'required|string|min:2|max:19',
            'last_name' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'cpf' => 'required|digits_between:11,11|numeric',
            'phone' => 'digits_between:10,11',
            //'password' => 'required'
        ]);

        User::create($result);
    }

    public function listAll() {
        $user = new User();
        return $user->select('id', 'first_name', 'last_name', 'email', 'cpf', 'phone')->get();
    }
}
