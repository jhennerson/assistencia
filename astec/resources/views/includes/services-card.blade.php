<section class="mt-5 wow fadeIn my-3 py-3 z-depth-1 p-2">
    <div class="row">
        <div class="col-md-6 mb-4 overlay zoom">
            <img src="{{ asset($image) }}" class="img-fluid z-depth-1-half" alt="">
        </div>
        <div class="col-md-6 mb-4">
            <h3 class="h3 mb-3 purple-text">{{ $title ?? 'Título ' }}</h3>
            <p class="indigo-text"><strong>{{ $sub ?? 'Subtítulo ' }}</strong></p>
            <hr>
            <p class="text-muted">
                {{ $text ?? 'Texto' }}
            </p>
        </div>
    </div>
</section>
