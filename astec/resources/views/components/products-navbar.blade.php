<div class="container mt-2">
    <nav class="navbar navbar-expand-lg navbar-dark orange lighten-1">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav mr-auto">
                {{ $slot }}
            </ul>
            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Procurar" aria-label="Search">
                </div>
            </form>
    </nav>
</div>
