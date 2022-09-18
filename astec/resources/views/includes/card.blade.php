<div class="col-sm mb-2">
    <div class="card h-100 overlay zoom">
        <img src="{{ asset($image) }}" class="card-img-top" alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title red-text h4">{{ $title ?? 'Produto' }}</h5>
            <p class="card-text">
                {{ $text ?? 'Descrição' }}
            </p>
        </div>
    </div>
</div>
