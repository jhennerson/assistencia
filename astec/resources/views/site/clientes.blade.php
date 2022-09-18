@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    @include('parts.heading', ['color' => 'blue-gradient', 'title' => 'Nossos Clientes'])

    @component('components.experience')
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/ge.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/airbus.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/amazon.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/nike.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/sony.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/unity.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/deloitte.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/ikea.webp'])
        @include('includes.customers-logo', ['logo' => 'assets/image/customers/kpmg.webp'])
    @endcomponent

    @component('components.customers-frame')
        @include('includes.comments', ['person' => '1', 'author' => 'Sonia Degurechaff - Deloitte', 'text' => 'Melhor atendimento de todos!!!, estão sempre de prontidão para atender quando preciso.'])
        @include('includes.comments', ['person' => '22', 'author' => 'Violeta Evergarden - Sony', 'text' => 'O diferencial da AsTec está na competência em administrar os seus clientes, parabéns a esta organização.'])
        @include('includes.comments', ['person' => '3', 'author' => 'Helder McDowell - General Electric', 'text' => 'Gostaria muito de agradecer, pois recebo o produto nas condições certas e no prazo combinado. Empresa eficaz, será muito bem recomendada para outras pessoas. Foi minha primeira compra com vocês e com certeza não será a última.'])
        @include('includes.comments', ['person' => '9', 'author' => 'Jonathan Joestar - Unity', 'text' => 'Gostaríamos de agradecer a agilidade no atendimento e também a proatividade e disposição do técnico que nos atendeu muito bem.'])
    @endcomponent

    @include('parts.heading', ['color' => 'blue-gradient'])
@endsection
