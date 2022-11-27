@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')

    @component('components.form-frame')
        @slot('form')
            @include('parts.user-form',['title' => 'Cadastrar Usuário',
                                        'link' => 'cadastro-usuario'])
        @endslot
    @endcomponent

@endsection