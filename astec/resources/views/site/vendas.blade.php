@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
    <div class="container">
        @component('components.title', ['title' => "Relatório de vendas - $mes / $ano"])
        
        @component('components.breadcrumb')
        @include('components.breadcrumb', ['links' => 
            ['nome' =>'Home',        'valor' => 'http://site/secao/pgina.php'],
            ['nome' =>'Vendas',      'valor' => 'http://site/secao/pgina.php'],
            ['nome' =>'Eletrônicos', 'valor' => 'http://site/secao/pgina.php'],
            ['nome' =>'Informática', 'valor' => 'http://site/secao/pgina.php'],
            ['nome' =>'Notebooks',   'valor' => 'http://site/secao/pgina.php'],
        ])
        @endcomponent

        @endcomponent

        @include('components.table')
    </div>
@endsection