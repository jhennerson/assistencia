<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
   /* public function addProduct() {
        if(sizeof($_POST) == 0) return;
        $data = request();
        $data->validate([
            'name' => 'required|string|min:1|max:32',
            'manufacturer' => 'required|string|min:1|max:64',
            'description' => 'required|text|min:1|max:255'
        ]);

        Product::create($result);
    }
    
    public function listAll() {
        $product = new Product();
        return $product->select('name', 'manufacturer', 'description')->get()->toArray();
    }*/
}
