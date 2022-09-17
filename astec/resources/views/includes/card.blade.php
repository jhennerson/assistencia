<div class="col-sm">
    <div class="card h-100">
        <img src="{{ asset($image) }}" class="card-img-top" alt="Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title red-text h4">{{ $title ?? 'Produto' }}</h5>
            <p class="card-text text-truncate">
                {{ $text ?? 'Descrição' }}
            </p>
        </div>
    </div>
</div>
