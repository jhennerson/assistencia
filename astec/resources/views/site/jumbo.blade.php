@extends('common.mdb-fullpage')

@section('content')

<div class="container mt-5">
    <div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient12.webp);">
    <div class="text-white text-center py-5 px-4">
        <div>
        <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>A maior Assistência Técnica do Brasil!</strong></h2>
        <p class="mx-5 mb-5">Traga-nos seu aparelho e solucionamos o seu problema...
        </p>
        <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i> View project</a>
        </div>
    </div>
    </div>
</div>

@include('parts.carousel')

@include('parts.blog-post', ['title' => 'Canon', 'author' => 'Dominus Ascendant'])
@include('parts.blog-post', ['title' => 'Brother', 'author' => 'Daresso King'])
@include('parts.blog-post', ['title' => 'Kyocera', 'author' => 'Feirgraves Ghost'])
@include('parts.blog-post', ['title' => 'Epson', 'author' => 'Merveil Siren'])

@include('parts.card')

@endsection

<div class="carousel-item active h-100" style="width: 100%; background: url('{{ asset('assets/carousel/canon_imagepress.jpg') }}') center/contain no-repeat;"
alt="First slide">