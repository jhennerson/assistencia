@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @include('parts.heading', ['color' => 'blue-gradient', 'title' => 'Opinião dos clientes'])
    @component('components.customers-frame')

    @endcomponent

    @include('parts.heading', ['color' => 'blue-gradient'])
@endsection