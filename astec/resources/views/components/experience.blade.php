<div class="container view">
    <div class="mask flex-center unique-color-dark gradient overlay">
    </div>
    <div class="gradient-theme text-white rounded-6 pt-2 pb-3 ">
        <div class="row justify-content-center text-center mt-5 px-5">
            <div class="col-md-3 mb-5">
                <h2 class="fs-1 mb-3" style="font-weight: 900">Mais de 3.000 Clientes</h2>
                <h5 class="opacity-80">
                    Espalhados por todo o Brasil
                </h5>
            </div>
        </div>
        <section class="text-center mb-4">
            <style>
                .mdb-logotypes img {
                    max-width: 70px;
                }

                @media (max-width: 1400px) {
                    .mdb-logotypes img {
                        max-width: 60px;
                        margin-bottom: 10px;
                    }
                }

                .logo-icon {
                    filter: grayscale(100%);
                }
            </style>

            <div class="row mdb-logotypes px-5 d-flex align-items-center">
                {{ $slot }}
            </div>
        </section>
    </div>
</div>

