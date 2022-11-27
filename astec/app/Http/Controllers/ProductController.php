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
        $header = ['ID', 'NOME', 'FABRICANTE', 'DESCRIÇÃO', 'IMÁGEM'];
        $pm = new ProductModel();       

        $body = $pm->listAll();

        $table = new Table($header, $body->toArray(), 'produtos');

        return view('site.produtos', ['table' => $table->getHTML()]);
    }

    public function cardList() {
        $products = Product::all();

        return view('site.loja',['products' => $products]);
    }

    public function edit($id) {
        $product = Product::findOrFail($id);

        return view('site.editar-produto', compact('product'));
    }

    public function update(Request $request) {
        Product::findOrFail($request->id)->update($request->all());

        return redirect('produtos')->with('msg', 'Produto editado com sucesso!');
    }

    public function destroy($id) {
        Product::findOrFail($id)->delete();

        return redirect('produtos')->with('msg', 'Produto removido com sucesso!');
    }
}
