<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="text-center border border-light p-5 bg-white" id="contact-form" name="contact-form" method="POST" action="/{{ $link }}">
                @csrf
                <p class="h4 mb-4">{{ $title }}</p>

                <input type="email" dusk="email" id="defaultRegisterFormEmail" class="form-control mb-4" value="{{ old('email') ?? $email ?? '' }}" name="email" placeholder="E-mail">
                @error('email')
                    <p class='red-text'>{{ $message }}</p>
                @enderror

                <input type="password" dusk="password_1" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Senha (mín. 8 caracteres)" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                @error('password')
                    <p class='red-text'>{{ $message }}</p>
                @enderror

                <input type="password" dusk="password_2" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Confirmar senha" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                @error('password')
                    <p class='red-text'>{{ $message }}</p>
                @enderror
                    
                <input type="text" dusk="first_name" id="defaultRegisterFormFirstName" class="form-control mb-4" value="{{ old('first_name') ?? $first_name ?? '' }}" name="first_name" placeholder="Nome">
                @error('first_name')
                    <p class='red-text'>{{ $message }}</p>
                @enderror
                    
                <input type="text" dusk="last_name" id="defaultRegisterFormLastName" class="form-control mb-4" value="{{ old('last_name') ?? $last_name ?? '' }}" name="last_name" placeholder="Sobrenome">   
                @error('last_name')
                    <p class='red-text'>{{ $message }}</p>
                @enderror

                <input type="text" dusk="cpf" id="defaultRegisterFormNumber" class="form-control mb-4" value="{{ old('cpf') ?? $cpf ?? '' }}" name="cpf" placeholder="CPF">
                @error('cpf')
                    <p class='red-text'>{{ $message }}</p>
                @enderror                

                <input type="text" dusk="phone" id="defaultRegisterPhoneNumber" class="form-control" value="{{ old('phone') ?? $phone ?? '' }}" name="phone" placeholder="Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                    @error('phone')
                        <p class='red-text'>{{ $message }}</p>
                    @enderror
                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Opcional
                </small>

                <div class="text-center text-md-center">
                    <a class="btn btn-primary" dusk="submit" onclick="document.getElementById('contact-form').submit();">Salvar</a>
                </div>

                <hr>

                <p>Ao clicar em
                    <em>Cadastrar</em> está de acordo com os 
                    <a href="" target="_blank">termos de serviço</a>

            </form>
        </div>
    </div>
</div>