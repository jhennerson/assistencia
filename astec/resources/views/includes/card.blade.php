<div class="col-sm mb-4">
    <div class="card h-100 overlay zoom">
        <img src="{{ asset($image) }}" class="card-img-top p-2" alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title cyan-text h4 text-uppercase">{{ $title ?? 'Produto' }}</h5>
            <p class="card-text">
                {{ $text ?? 'Descrição' }}
            </p>
        </div>
    </div>
</div>
