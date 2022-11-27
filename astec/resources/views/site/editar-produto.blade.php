@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')

    @component('components.form-frame')
        @slot('form')
            @include('parts.product-form', ['title' => 'Editar Produto',
                                            'link' => 'produtos/'.$product->id.'/update',
                                            'name' => $product->name,
                                            'description' => $product->description,
                                            'manufacturer' => $product->manufacturer,
                                            'image' => $product->image])
        @endslot
    @endcomponent

@endsection