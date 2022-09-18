<div class="container">
    <section class="my-5">

        <div class="navbar-brand h1-responsive font-weight-bold"><h1 class="light-blue-text">Comentários</h1></div>

        {{ $slot }}

        <nav class="d-flex justify-content-center mt-5">
            <ul class="pagination pg-blue mb-0">

                <li class="page-item disabled">
                    <a class="page-link">Primeiro</a>
                </li>

                <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Anterior</span>
                    </a>
                </li>

                <li class="page-item active">
                    <a class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link">3</a>
                <li class="page-item">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </li>

                <li class="page-item">
                    <a class="page-link">Último</a>
                </li>

            </ul>
        </nav>

    </section>
</div>
