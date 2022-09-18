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
        @include('includes.product-card', [
            'image' => 'assets/image/products/product1.jpg',
            'title' => 'Multifuncional Laser Mono DCP-L5652DN - Brother',
            'text' => 'Multifuncional Laser Mono DCP-L5652DN - Brother',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product2.jpg',
            'title' => 'Multifuncional Laser Color ECOSYS M8124cidn - Kyocera',
            'text' => 'Multifuncional Laser Color ECOSYS M8124cidn - Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product3.jpg',
            'title' => 'Plotter imagePROGRAF TX-3000 - Canon',
            'text' => 'Plotter imagePROGRAF TX-3000 - Canon',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product4.jpg',
            'title' => 'Multifuncional A3 Colorida AccurioPrint C3070L Konica Minolta',
            'text' => 'Multifuncional A3 Colorida AccurioPrint C3070L Konica Minolta',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product5.jpg',
            'title' => 'Toner Amarelo TK-5222Y - Kyocera',
            'text' => 'Toner Amarelo TK-5222Y - Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product6.jpg',
            'title' => 'Multifuncional Tanque de Tinta Pixma Mega Tank G3100 - Canon',
            'text' => 'Multifuncional Tanque de Tinta Pixma Mega Tank G3100 - Canon',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product8.jpg',
            'title' => 'Multifuncional imageRUNNER IR1643iF - Canon',
            'text' => 'Multifuncional imageRUNNER IR1643iF - Canon',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product9.jpg',
            'title' => 'Scanner P-215II - Canon',
            'text' => 'Scanner P-215II - Canon',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product12.jpg',
            'title' => 'Multifuncional FS-6525FMP - Kyocera',
            'text' => 'Multifuncional FS-6525FMP - Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product13.jpg',
            'title' => 'Multifuncional Mono ECOSYS M3145idn - Kyocera',
            'text' => 'Multifuncional Mono ECOSYS M3145idn - Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product14.jpg',
            'title' => 'Multifuncional Mono FS-1020MFP - Kyocera',
            'text' => 'Multifuncional Mono FS-1020MFP - Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product15.jpg',
            'title' => 'Multifuncional Laser Mono Ecosys M2640IDW - Kyocera',
            'text' => 'Multifuncional Laser Mono Ecosys M2640IDW - Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product16.jpg',
            'title' => 'Multifuncional Mono ECOSYS M3655idn - Kyocera',
            'text' => 'Multifuncional Mono ECOSYS M3655idn - Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product17.jpg',
            'title' => 'Multifuncional Laser DCP-1602 - Brother',
            'text' => 'Multifuncional Com scanner colorido Laser DCP-1602 - Brother',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product19.jpg',
            'title' => 'Multifuncional Colorida ACP C83hc – Konica Minolta',
            'text' => 'Multifuncional Colorida C83hc – Konica Minolta',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product20.jpg',
            'title' => 'Multifuncional A3 Colorida bizhub C300i - Konica Minolta',
            'text' => 'Multifuncional A3 Colorida bizhub C300i - Konica Minolta',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product21.jpg',
            'title' => 'Multifuncional Laser Mono A3 TASKalfa 4012i- Kyocera',
            'text' => 'Multifuncional Laser Mono A3 TASKalfa 4012i- Kyocera',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product22.jpg',
            'title' => 'Multifuncional Colorida A3 WorkForce WF-C21000 - Epson',
            'text' => 'Multifuncional Colorida A3 WorkForce WF-C21000 - Epson',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product23.jpg',
            'title' => 'Multifuncional Mono EcoTank M3180 - Epson - Recarregável',
            'text' => 'Multifuncional Mono EcoTank M3180 - Epson',
        ])
        @include('includes.product-card', [
            'image' => 'assets/image/products/product11.jpg',
            'title' => 'Multifuncional Laser Color MFC-L8610CDW - Brother',
            'text' => 'Multifuncional Laser title MFC-L8610CDW - Brother',
        ])
    @endcomponent

    @include('parts.heading', ['color' => '#ffc400 amber accent-3'])
@endsection
