<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public function register() {
        if(sizeof($_POST) == 0) return;

        $data = request();

        $result = $data->validate([
            'name' => 'required|string|min:1|max:32',
            'manufacturer' => 'required|string|min:1|max:64',
            'description' => 'required|min:1|max:255',
            'image' => 'file|mimes:jpg,bmp,png',
        ]);

        if($data->hasFile('image')) {
            $requestImage = $data->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/products'), $imageName);

            $result['image'] = $imageName;
        }

        Product::create($result);
    }
    
    public function listAll() {
        $product = new Product();
        return $product->select('name', 'manufacturer', 'description', 'image')->get();
    }
}
