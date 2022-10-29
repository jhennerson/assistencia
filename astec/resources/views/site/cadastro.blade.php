@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')

    @component('components.login-frame')
        @slot('form')
            @include('parts.user-form')
        @endslot
    @endcomponent

@endsection