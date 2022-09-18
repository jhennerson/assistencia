<div class="carousel-item {{ $active ?? '' }}">
    <div class="view">
        <img class="d-block w-100" src="{{ asset($image) }}" alt="Second slide">
    </div>
    <div class="carousel-caption mask rgba-black-light">
        <h3 class="h3-responsive text-uppercase">{{ $title ?? 'Título' }}</h3>
        <p>{{ $text ?? 'Texto' }}</p>
    </div>
</div>
