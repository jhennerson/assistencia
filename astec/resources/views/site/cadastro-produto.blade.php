@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')

    @component('components.form-frame')
        @slot('form')
            @include('parts.product-form', ['title' => 'Cadastrar Produto',
                                            'link' => 'cadastro-produto'])
        @endslot
    @endcomponent

@endsection