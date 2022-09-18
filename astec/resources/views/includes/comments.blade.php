<section class="my-5">
    <div class="media mt-4 px-1 my-3 py-3 z-depth-1 p-3">
        <img class="card-img-100 d-flex z-depth-1 mr-3"
            src="https://mdbootstrap.com/img/Photos/Avatars/img%20({{ $person }}).webp"
            alt="Generic placeholder image">
        <div class="media-body">
            <h5 class="font-weight-bold mt-0">
                <a href="">{{ $author ?? "Autor"}}</a>
            </h5>{{ $text ?? 'Texto'}}
        </div>
    </div>
</section>
