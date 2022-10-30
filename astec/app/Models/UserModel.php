<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public function store() {
        if(sizeof($_POST) == 0) return; 
        
        $data = request();

        $result = $data->validate([
            'first_name' => 'required|string|min:2|max:19',
            'last_name' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'cpf' => 'required|integer|min:9999999|max:99999999999',
            'phone' => 'integer|min:9999999|max:999999999',
            //'password' => 'required'
        ]);

        User::create($result);
    }
}
