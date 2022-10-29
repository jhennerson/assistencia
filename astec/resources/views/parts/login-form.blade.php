<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="text-center border border-light p-5 bg-white" action="#!">
                @csrf
                <p class="h4 mb-4">Entrar</p>

                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Senha">

                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                <p>Não possui cadastro?
                    <a href="cadastro">Registrar</a>
                </p>

            </form>
        </div>
    </div>    
</div>