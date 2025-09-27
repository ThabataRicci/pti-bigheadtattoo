<?php
session_start();
$titulo_pagina = "Solicitar Agendamento";
include 'includes/header.php';

// Pega a data da URL. É importante validar e formatar essa data quando conectar ao backend.
$data_selecionada = $_GET['data'] ?? date('Y-m-d');
$data_formatada = date('d/m/Y', strtotime($data_selecionada));
?>

<main>
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <form class="formulario-container text-center" action="processa_solicitacao.php" method="POST" enctype="multipart/form-data">
                    <h2 class="mb-3">Sua Ideia para <?php echo $data_formatada; ?></h2>

                    <div class="text-start">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="local_corpo" class="form-label">Local do Corpo:</label>
                                <select class="form-select" id="local_corpo" name="local_corpo" required>
                                    <option value="" selected disabled>Selecione o local...</option>
                                    <option value="antebraco">Antebraço</option>
                                    <option value="braco">Braço (Ombro/Bíceps/Tríceps)</option>
                                    <option value="costas">Costas</option>
                                    <option value="peito">Peito</option>
                                    <option value="perna">Perna (Coxa/Panturrilha)</option>
                                    <option value="mao_pe">Mão ou Pé</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tamanho_aproximado" class="form-label">Tamanho Aproximado:</label>
                                <select class="form-select" id="tamanho_aproximado" name="tamanho_aproximado" required>
                                    <option value="" selected disabled>Selecione o tamanho...</option>
                                    <option value="pequeno">Pequeno (até 10cm)</option>
                                    <option value="medio">Médio (até 20cm)</option>
                                    <option value="grande">Grande (acima de 20cm)</option>
                                    <option value="fechamento">Fechamento (braço, perna, etc.)</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="descricao_ideia" class="form-label">Detalhes da Ideia / Desenho:</label>
                            <textarea class="form-control" id="descricao_ideia" name="descricao_ideia" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="referencia_ideia" class="form-label">Imagem de Referência:</label>
                            <input type="file" class="form-control" id="referencia_ideia" name="referencia_ideia">
                        </div>
                    </div>

                    <input type="hidden" name="data_preferencia" value="<?php echo $data_selecionada; ?>">

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">ENVIAR IDEIA PARA ANÁLISE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>