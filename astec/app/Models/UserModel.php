<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public function userRegister() {
        if(sizeof($_POST) == 0) return; 
        
        $req = request();

        $req->validate([
            'first_name' => 'required|string|min:2|max:19',
            'last_name' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'cpf' => 'integer|min:9999999|max:99999999999',
            'phone' => 'integer|min:9999999|max:999999999'
        ]);
    }
}
