<?php
    session_start();
    $titulo_pagina = "Portfólio";
    include 'includes/header.php';
?>

<main>
    <div class="container text-center my-5 py-5">
    
    <h2 class="mb-5">GALERIA DE TRABALHOS</h2>

    <div class="filtros-portfolio mb-5">
        <button class="btn btn-outline-light">Filtrar por Estilo ▼</button>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-6 mb-4">
            <div class="portfolio-item">
                <img src="imagens/tattoo-exemplo-1.jpg" alt="Exemplo de tatuagem 1">
                <div class="portfolio-detalhes-overlay">
                    <h5 class="detalhes-titulo">Dragão Oriental</h5>
                    <p class="detalhes-info">Tempo: 6 horas</p>
                    <p class="detalhes-info">Local: Costas</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-4">
            <div class="portfolio-item">
                <img src="imagens/tattoo-exemplo-2.jpg" alt="Exemplo de tatuagem 2">
                <div class="portfolio-detalhes-overlay">
                    <h5 class="detalhes-titulo">Rosa Fineline</h5>
                    <p class="detalhes-info">Tempo: 2 horas</p>
                    <p class="detalhes-info">Local: Antebraço</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-4">
            <div class="portfolio-item"></div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mb-4">
            <div class="portfolio-item"></div>
        </div>

    </div>

    <nav class="mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
        </ul>
    </nav>

</div>
    </main>

<?php
    include 'includes/footer.php';
?>