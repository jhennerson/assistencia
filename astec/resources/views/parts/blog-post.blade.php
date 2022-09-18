<div class="container my-3 py-3 z-depth-1">
    <div class="row mt-3">
        <div class="col-lg-5 mb-5">
            <div class="view overlay ">
                <img src=" {{ asset($image) }}" class="img-fluid rounded-circle" alt="Second sample image">
                <a></a>
            </div>
        </div>

        <div class="col-lg-7 mb-4">
            <a href="" class="{{ $color ?? 'cyan-text' }}">
                <h2 class="pb-1 text-center"><i class="fas fa-check-double"></i><strong>  {{ $title ?? 'Título' }}</strong></h2>
            </a>
            <p class="mt-5">{{ $text ?? 'Conteúdo' }}</p>
        </div>
    </div>
</div>
