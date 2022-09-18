<section>
    <h3 class="h3 text-center mb-5 text-uppercase purple-text">{{ $title ?? 'Título'}}</h3>
    <div class="row wow fadeIn">
        <div class="col-lg-6 col-md-12 px-4">
            {{ $slot }}
        </div>
        <div class="col-lg-6 col-md-12">
            <p class="h5 text-center mb-4 indigo-text">{{ $description ?? 'Descrição'}}</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $video }}"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
