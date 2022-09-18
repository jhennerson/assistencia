@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @include('parts.heading', ['color' => 'peach-gradient', 'title' => 'Contato'])
    @component('components.contact-frame')

        @slot('map')
                @include('parts.map', ['description' => 'Onde estamos localizados?'])
        @endslot

    @endcomponent

    @include('parts.heading', ['color' => 'peach-gradient'])
@endsection
