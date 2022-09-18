@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @include('parts.heading', ['title' => 'Empresa'])

    @include('parts.blog-post', [
        'color' => 'light-blue-text',
        'image' => 'assets/image/about/missao.webp',
        'title' => 'Missão',
        'text' =>
            'Satisfazer as necessidades de nossos clientes, oferecendo soluções completas que desenvolvam continuamente o seu alto grau de satisfação e respeitando o meio ambiente com responsabilidade social corporativa.',
    ])
    @include('parts.blog-post', [
        'color' => 'green-text',
        'image' => 'assets/image/about/visao.webp',
        'title' => 'Visão',
        'text' =>
            'Ser uma empresa atuante, que opere com foco no cliente e com o máximo de qualidade, eficiência e confiabilidade, mantendo sempre a ética, o respeito ao meio ambiente e a constância de propósitos',
    ])
    @include('parts.blog-post', [
        'color' => 'lime-text',
        'image' => 'assets/image/about/valores.webp',
        'title' => 'Valores',
        'text' =>
            ' Promover a satisfação de nossos clientes prezando qualidade em tudo o que fazemos, pregando por um empreendedorismo responsável, íntegro e com comprometimento, buscando sempre o crescimento e rentabilidade com o investimento contínuo em tecnologias e soluções diferenciadas, obedecendo os requisitos legais e regulamentares respeitando o ser humano e o meio ambiente atuando de forma sustentável.',
    ])

    @include('parts.heading', ['title' => ''])
@endsection
