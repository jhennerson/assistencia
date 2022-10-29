<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    /* public function addService() {
        if(sizeof($_POST) == 0) return;
        $data = request();
        $data->validate([
            'name' => 'required|string|min:1|max:32',
            'manufacturer' => 'required|string|min:1|max:64',
            'description' => 'required|text|min:1|max:255'
        ]);

        Service::create($result);
    }
    
    public function listAll() {
        $service = new Product();
        return $product->select('name', 'manufacturer', 'description')->get()->toArray();
    }*/
}
