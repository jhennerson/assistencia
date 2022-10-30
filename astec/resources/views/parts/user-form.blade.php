<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="text-center border border-light p-5 bg-white" id="contact-form" name="contact-form" method="POST" action="/cadastro">
                @csrf
                <p class="h4 mb-4">Cadastrar</p>

                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" value="{{ old('email') }}" name="email" placeholder="E-mail">
                @error('email')
                    <p class='red-text'>{{ $message }}</p>
                @enderror

                <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Senha (mín. 8 caracteres)" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                @error('password')
                    <p class='red-text'>{{ $message }}</p>
                @enderror

                <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Confirmar senha" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                @error('password')
                    <p class='red-text'>{{ $message }}</p>
                @enderror
                    
                <input type="text" id="defaultRegisterFormFirstName" class="form-control mb-4" value="{{ old('first_name') }}" name="first_name" placeholder="Nome">
                @error('first_name')
                    <p class='red-text'>{{ $message }}</p>
                @enderror
                    
                <input type="text" id="defaultRegisterFormLastName" class="form-control mb-4" value="{{ old('last_name') }}" name="last_name" placeholder="Sobrenome">   
                @error('last_name')
                    <p class='red-text'>{{ $message }}</p>
                @enderror

                <input type="text" id="defaultRegisterFormNumber" class="form-control mb-4" value="{{ old('cpf') }}" name="cpf" placeholder="CPF">
                @error('cpf')
                    <p class='red-text'>{{ $message }}</p>
                @enderror                

                <input type="text" id="defaultRegisterPhoneNumber" class="form-control" value="{{ old('phone') }}" name="phone" placeholder="Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                    @error('phone')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror
                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Opcional
                </small>

                <div class="text-center text-md-center">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Cadastrar</a>
                </div>

                <hr>

                <p>Ao clicar em
                    <em>Cadastrar</em> está de acordo com os 
                    <a href="" target="_blank">termos de serviço</a>

            </form>
        </div>
    </div>
</div>