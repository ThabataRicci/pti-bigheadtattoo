<?php
    session_start();
    
    $titulo_pagina = "Agenda";
    include 'includes/header.php';
?>

<main>
    <div class="container my-5 py-5">
        <div class="calendario-container">
            <div class="calendario-header text-center mb-4">
                <h2 class="display-5">Agosto 2025</h2>
                </div>

            <div class="calendario-grid">
                <div class="dia-semana">Dom</div>
                <div class="dia-semana">Seg</div>
                <div class="dia-semana">Ter</div>
                <div class="dia-semana">Qua</div>
                <div class="dia-semana">Qui</div>
                <div class="dia-semana">Sex</div>
                <div class="dia-semana">Sáb</div>

                <div class="dia outro-mes">27</div>
                <div class="dia outro-mes">28</div>
                <div class="dia outro-mes">29</div>
                <div class="dia outro-mes">30</div>
                <div class="dia outro-mes">31</div>
                
                <div class="dia">1</div>
                <div class="dia dia-ocupado">2 <br><small>Ocupado</small></div>
                <div class="dia">3</div>
                <?php if (isset($_SESSION['cliente_id'])): ?>
                    <a href="#" class="dia dia-livre" data-bs-toggle="modal" data-bs-target="#modalAgendamento">
                        4 <br><small>Agendar</small>
                    </a>
                    <?php else: ?>
                        <a href="login.php" class="dia dia-livre">
                        4 <br><small>Agendar</small>
                        </a>
                    <?php endif; ?>
                <div class="dia">5</div>
                <div class="dia dia-ocupado">6 <br><small>Ocupado</small></div>
                <div class="dia">7</div>
                
                </div>
        </div>
    </div>
</main>

<div class="modal fade" id="modalAgendamento" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Solicitar Agendamento</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">  
        <form>
            <div class="mb-3">
                <label for="descricao-ideia" class="form-label">Breve descrição da sua ideia:</label>
                <textarea class="form-control" id="descricao-ideia" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagem-referencia" class="form-label">Anexar imagem de referência (opcional):</label>
                <input class="form-control" type="file" id="imagem-referencia">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Enviar Solicitação</button>
      </div>
    </div>
  </div>
</div>

<?php
    include 'includes/footer.php';
?>