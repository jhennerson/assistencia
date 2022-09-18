@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @include('parts.heading', ['color' => 'peach-gradient', 'title' => 'Contato'])
    @component('components.contact-frame')
    @endcomponent

    @include('parts.heading', ['color' => 'peach-gradient'])
@endsection
