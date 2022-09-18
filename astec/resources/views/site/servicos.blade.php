@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @include('parts.heading', ['color' => 'purple-gradient', 'title' => 'Servicos'])

    @component('components.services-frame')
        @include('includes.services-card', [
            'image' => 'assets/image/services/manutencao.jpg',
            'title' => 'Manutenção e Reparo',
            'sub' => 'Visita técnica e serviço autorizado',
            'text' =>
                'Serviço autorizado Canon, Brother, Kyocera, Okidata, Konica Minolta e Epson. Realizamos visita técnica e também atendemos em nosso laboratório.',
        ])

        @include('includes.services-card', [
            'image' => 'assets/image/services/outsourcing.jpg',
            'title' => 'Outsourcing',
            'sub' => 'Sem preocupações com equipamento parado',
            'text' =>
                'Temos tudo o que você precisa para manter o seu negócio fluindo. Assistência técnica, suprimentos e equipamentos de ponta.',
        ])

        @include('includes.services-card', [
            'image' => 'assets/image/services/products.jpg',
            'title' => 'Manutenção e Reparo',
            'sub' => 'Portfólio vasto e um preço sem igual',
            'text' =>
                'Temos os equipamentos mais atualizados do mercado dispóniveis para você. Trabalhamos com suprimentos, multifonfionais, impressoras, scanners, plotters, dispositivos de corte e muito mais.',
        ])

        @slot('about')
            @component('components.services-bottom',
                [
                    'title' => 'O melhor serviço do mercado',
                    'description' => 'Assista nosso vídeo etire suas próprias conclusões!',
                    'video' => 'https://www.youtube.com/embed/kNrHRsfPHJw',
                ])
                @include('includes.highlights', [
                    'icon' => 'fas fa-shipping-fast',
                    'title' => 'Rápido',
                    'text' => 'Entrega e atendimento rápidos, serviço regionalizado e distribuído',
                ])

                @include('includes.highlights', [
                    'icon' => 'fas fa-screwdriver',
                    'title' => 'Eficaz',
                    'text' => 'Profissionais altamente capacitados para atender da melhor maneira possível',
                ])

                @include('includes.highlights', [
                    'icon' => 'fas fa-user-lock',
                    'title' => 'Seguro',
                    'text' => 'Serviço com qualidade garantida atendendo às normas de segurança e compliance',
                ])
            @endcomponent
        @endslot
    @endcomponent

    @include('parts.heading', ['color' => 'purple-gradient'])
@endsection
