@extends('common.mdb-fullpage')

@section('title', 'LPII Login')

@section('content')

<div class="container">
    <div class="row"><p class="text-center border col">{{ "Guarulhos, $dia/$mes/$ano" }}</p></div>
        <div class="col-md-6 offset-md-3">
            <form class="text-center border border-light p-5" action="#!">

            <p class="h4 mb-4">Fazer Login</p>

            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

            <button class="btn btn-info btn-block my-4" type="submit">Entrar</button>

            </form>
        </div>    
</div>

@endsection