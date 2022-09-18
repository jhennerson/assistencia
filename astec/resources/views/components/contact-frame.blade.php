<div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
        <div class="row ">
            <div class="col-lg-5 col-md-12 mb-0 mb-md-0">
                <h2 class="font-weight-bold orange-text">Fale conosco</h2>
                <p class="text-muted">Entre em contato para quaisquer dúvidas e esclarecimentos, o horário de atendimento
                    é das 08:00 às 16:00 horas de segunda a sexta.</p>
                <p><span class="font-weight-bold mr-2">Email:</span><a class="deep-orange-text font-weight-bold"
                        href="">contato@astec.com.br</a></p>
                <p><span class="font-weight-bold mr-2">Phone:</span><a class="deep-orange-text font-weight-bold"
                        href="">+55 (11) 1234-5678</a></p>
            </div>
            <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form md-outline mb-0">
                            <input type="text" id="form-first-name" class="form-control">
                            <label for="form-first-name">Nome</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form md-outline mb-0">
                            <input type="text" id="form-last-name" class="form-control">
                            <label for="form-last-name">Sobrenome</label>
                        </div>
                    </div>
                </div>
                <div class="md-form md-outline mt-3">
                    <input type="email" id="form-email" class="form-control">
                    <label for="form-email">E-mail</label>
                </div>
                <div class="md-form md-outline">
                    <input type="text" id="form-subject" class="form-control">
                    <label for="form-subject">Assunto</label>
                </div>
                <div class="md-form md-outline mb-3">
                    <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="form-message">Como podemos ajudar?</label>
                </div>
                <button type="submit"
                    class="btn btn-info btn-lg ml-0 amber accent-4 font-weight-bold mb-3 float-right">Enviar<i
                        class="far fa-paper-plane ml-2"></i></button>
            </div>
        </div>

        {{ $map }}

    </section>
</div>
