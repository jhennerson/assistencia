@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @component('components.carousel')
        @include('includes.carousel-item', [
            'image' => 'assets/image/carousel/documents.jpg',
            'title' => 'Gerenciamento de documentos',
            'text' => 'Facilite o seu trabalho com nossas soluções em documentos digitais',
        ])
        @include('includes.carousel-item', [
            'image' => 'assets/image/carousel/mini.jpg',
            'title' => 'Todas as demandas',
            'text' => 'Equipamentos que cabem no seu bolso e lar',
        ])
    @endcomponent

    @component('components.block-frame', ['columns' => '3'])
        @include('includes.card', [
            'image' => 'assets/image/card/card_reader.jpg',
            'title' => 'Impressão segura',
            'text' => 'Controle total de acesso ao dispositivo',
        ])
        @include('includes.card', [
            'image' => 'assets/image/card/pannel.jpg',
            'title' => 'Experiência do usuário',
            'text' => 'Sistema smart para uma melhor experiência do usuário',
        ])
        @include('includes.card', [
            'image' => 'assets/image/card/plotter.jpg',
            'title' => 'Segmento de projetos',
            'text' => 'Equipamentos de plotagem para o mercado de projetos',
        ])
    @endcomponent

    @component('components.block-frame', ['columns' => '4'])
        @include('includes.fabricante', ['image' => 'assets/image/partners/canon.jpg'])
        @include('includes.fabricante', ['image' => 'assets/image/partners/brother.jpg'])
        @include('includes.fabricante', ['image' => 'assets/image/partners/kyocera.jpg'])
        @include('includes.fabricante', ['image' => 'assets/image/partners/epson.jpg'])
        @include('includes.fabricante', ['image' => 'assets/image/partners/oki.jpg'])
        @include('includes.fabricante', ['image' => 'assets/image/partners/konica.jpg'])
    @endcomponent
@endsection
