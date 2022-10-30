<div class="col-md-6 offset-md-3 bg-white p-5">
    <h1>Cadastrar produto</h1>
    <form class="text-center border border-light p-5 bg-white" id="product-form" name="product-form" method="POST" action="/cadastro-produto">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control mb-4" id="name" name="name" placeholder="Nome do produto">
            @error('name')
                <p class='red-text'>{{ $message }}</p>
            @enderror

            <input type="text" class="form-control mb-4" id="manufacturer" name="manufacturer" placeholder="Fabricante">
            @error('manufacturer')
                <p class='red-text'>{{ $message }}</p>
            @enderror

            <div class="form-group">
                <textarea class="form-control rounded-0 mb-4" id="description" rows="3" name="description" placeholder="Descrição" style="resize: none;"></textarea>
                @error('description')
                    <p class='red-text'>{{ $message }}</p>
                @enderror
            </div>            

            <div class="text-center text-md-center">
                <a class="btn btn-primary" onclick="document.getElementById('product-form').submit();">Cadastrar</a>
            </div>
        </div>
    </form>
</div>