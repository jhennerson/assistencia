@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')

    @component('components.list-frame')
        @slot('table')
            @include('parts.comment-list')
        @endslot
    @endcomponent

@endsection