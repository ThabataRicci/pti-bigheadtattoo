<?php
    session_start();
    $titulo_pagina = "Meus Agendamentos";
    include 'includes/header.php';
?>

<main>
    <div class="container my-5 py-5">
    
    <h2 class="text-center mb-5">MEUS AGENDAMENTOS</h2>

    <div class="text-center mb-4">
        <a href="#" class="btn btn-sm btn-outline-light">Todos</a>
        <a href="#" class="btn btn-sm btn-outline-light">Próximos</a>
        <a href="#" class="btn btn-sm btn-outline-light">Concluídos</a>
        <a href="#" class="btn btn-sm btn-outline-light">Cancelados</a>
    </div>

    <div class="accordion" id="acordeaoAgendamentos">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#item1">
                    <div class="w-100 d-flex justify-content-between">
                        <span><strong>Ideia:</strong> Dragão nas Costas</span>
                        <span><strong>Status:</strong> Confirmado</span>
                    </div>
                </button>
            </h2>
            <div id="item1" class="accordion-collapse collapse show" data-bs-parent="#acordeaoAgendamentos">
                <div class="accordion-body">
                    <p><strong>Sua ideia enviada:</strong> "Gostaria de fazer um dragão oriental que cubra a parte superior das costas, em blackwork."</p>
                    <p><strong>Referência enviada:</strong> <a href="#" class="text-white-50">ver_imagem.jpg</a></p>
                    <p><strong>Duração estimada pelo artista:</strong> 6 horas</p>
                    <hr>
                    <button class="btn btn-sm btn-danger">Solicitar Cancelamento</button>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item2">
                     <div class="w-100 d-flex justify-content-between">
                        <span><strong>Ideia:</strong> Rosa Fineline</span>
                        <span><strong>Status:</strong> Pendente de Confirmação</span>
                    </div>
                </button>
            </h2>
            <div id="item2" class="accordion-collapse collapse" data-bs-parent="#acordeaoAgendamentos">
                <div class="accordion-body">
                    <p>Aguardando a aprovação do artista.</p>
                </div>
            </div>
        </div>

    </div>
</div>
    </main>

<?php
    include 'includes/footer.php';
?>