<div class="col-sm mb-4">
    <div class="card h-100 overlay zoom">
        <img src="{{ asset($image) }}" class="card-img-top p-2" alt="Skyscrapers" />
        <div class="card-body d-flex flex-column">
            <h5 class="card-title cyan-text h4">{{ $title ?? 'Produto' }}</h5>
            <p class="card-text">
                {{ $text ?? 'Descrição' }}
            </p>
            <a href="#" class="btn btn-lg btn-block btn-primary mt-auto #ffc400 amber accent-3 accent-4">Solicitar orçamento</a>
        </div>
    </div>
</div>
