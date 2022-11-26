<?php

namespace App\Http\Controllers;
use App\Libraries\Components\Table;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\Product;

class ProductController extends Controller
{
    public function store() {
        $product = new ProductModel();
        $product->register();

        return view('site.cadastro-produto');
    }

    public function list() {
        $header = ['ID', 'NOME', 'FABRICANTE', 'DESCRIÇÃO'];
        $pm = new ProductModel();       

        $body = $pm->listAll();

        $table = new Table($header, $body->toArray());

        return view('site.produtos', ['table' => $table->getHTML()]);
    }

    public function cardList() {
        $products = Product::all();

        return view('site.loja',['products' => $products]);
    }

    

    public function destroy($id) {
        $product = Product::findOrFail($id);
        
        $product->delete();

        return view('site.cadastro-produto')->with('msg', 'Produto removido com sucesso!');
    }
}
