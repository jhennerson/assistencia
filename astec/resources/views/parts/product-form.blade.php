<div class="col-md-6 offset-md-3 bg-white p-5">    
    <form class="text-center border border-light p-5 bg-white" id="product-form" name="product-form" method="POST" action="/{{ $link }}" enctype="multipart/form-data">
        @csrf
        <p class="h4 mb-4">{{ $title }}</p>
        <div class="form-group">
            <input type="text" dusk="name" class="form-control mb-4" id="name" name="name" placeholder="Nome do produto" value="{{ $name ?? ''}}">
            @error('name')
                <p class='red-text'>{{ $message }}</p>
            @enderror

            <input type="text" dusk="manufacturer" class="form-control mb-4" id="manufacturer" name="manufacturer" placeholder="Fabricante" value="{{ $manufacturer ?? ''}}">
            @error('manufacturer')
                <p class='red-text'>{{ $message }}</p>
            @enderror

            <div class="form-group">
                <textarea class="form-control rounded-0 mb-4" dusk="description" id="description" rows="3" name="description" placeholder="Descrição" style="resize: none;" >{{ $description ?? ''}}</textarea>
                @error('description')
                    <p class='red-text'>{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" id="image" name="image" class="form-control-file">
                @error('image')
                    <p class='red-text'>{{ $message }}</p>
                @enderror
            </div> 

            <div class="text-center text-md-center">
                <a class="btn btn-primary" dusk="submit" onclick="document.getElementById('product-form').submit();">Salvar</a>
            </div>
        </div>
    </form>
</div>