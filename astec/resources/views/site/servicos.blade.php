@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @include('parts.heading', ['color' => 'purple-gradient', 'title' => 'Servicos'])

    @component('components.service-list')

    @endcomponent

    @include('parts.heading', ['color' => 'purple-gradient'])
@endsection