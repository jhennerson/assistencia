@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')

    @component('components.form-frame')
        @slot('form')
            @include('parts.user-form', ['title' => 'Editar Usuário',
                                         'link' => 'usuarios/'.$user->id.'/update',
                                         'email' => $user->email,
                                         'first_name' => $user->first_name,
                                         'last_name' => $user->last_name,
                                         'cpf' => $user->cpf,
                                         'phone' => $user->phone])
        @endslot
    @endcomponent

@endsection