@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @component('components.products-navbar')
        @include('includes.dropdown', [
            'title' => 'Multifuncionais',
            'category1' => 'Monocromáticas',
            'category2' => 'Coloridas',
        ])
        @include('includes.dropdown', [
            'title' => 'Impressoras',
            'category1' => 'Monocromáticas',
            'category2' => 'Coloridas',
        ])
        @include('includes.dropdown', [
            'title' => 'Scanners',
            'category1' => 'De mesa',
            'category2' => 'Portátil',
        ])
        @include('includes.dropdown', [
            'title' => 'Suprimentos',
            'category1' => 'Toner',
            'category2' => 'Tinta',
        ])
    @endcomponent

    @component('components.block-frame', ['columns' => '4'])        
        @foreach ($products as $product)
            @include('includes.product-card', [
                'image' => $product->image,
                'name' =>  $product->name,
                'manufacturer' =>  $product->manufacturer,
                'description' =>  $product->description
            ])
        @endforeach
    @endcomponent

    @include('parts.heading', ['color' => '#ffc400 amber accent-3'])
@endsection
