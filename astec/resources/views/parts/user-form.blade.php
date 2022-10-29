<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="text-center border border-light p-5 bg-white" action="#!">
                @csrf
                <p class="h4 mb-4">Cadastrar</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" value="{{ old('first_name') }}" name="first_name" placeholder="Nome">
                    </div>
                    @error('first_name')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror
                    <div class="col">
                        <input type="text" id="defaultRegisterFormLastName" class="form-control" value="{{ old('last_name') }}" name="last_name" placeholder="Sobrenome">
                    </div>
                    @error('last_name')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror
                </div>

                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" value="{{ old('email') }}" name="email" placeholder="E-mail">
                    @error('email')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror

                <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" name="password" placeholder="Senha" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    @error('password')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror

                <input type="password" id="defaultRegisterFormPasswordConfirmation" class="form-control" name="password2"  placeholder="Confirmar" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-2">
                    Pelo menos 8 caracteres
                </small>
                    @error('password2')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror

                <input type="text" id="defaultRegisterPhonePassword" class="form-control" value="{{ old('phone') }}" name="phone" placeholder="Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                    @error('phone')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror
                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Opcional
                </small>

                <button class="btn btn-info my-4 btn-block" type="submit">Cadastrar</button>

                <hr>

                <p>Ao clicar em
                    <em>Cadastrar</em> está de acordo com os 
                    <a href="" target="_blank">termos de serviço</a>

            </form>
        </div>
    </div>
</div>