<?php
    $titulo_pagina = "Página Inicial";
    include 'includes/header.php';
?>

<main>
    <section class="secao-principal d-flex justify-content-center align-items-center text-center">
        <div class="container">
            <h1 class="display-3">BIG HEAD TATTOO</h1>
            <a href="agenda.php" class="btn btn-outline-light btn-lg mt-3">VER AGENDA</a>
        </div>
    </section>

    <section id="sobre" class="container text-center my-5 py-5">
        <h2>SOBRE O ARTISTA</h2>
        <p class="lead">Apaixonado por transformar ideias em arte na pele, Daniel Kbça construiu sua trajetória unindo técnica, criatividade e atenção aos detalhes. No estúdio, cada trabalho é pensado junto com o cliente, respeitando seu estilo e valorizando a originalidade. Seja em traços finos ou projetos maiores, a prioridade é sempre entregar uma tatuagem única, feita com cuidado e profissionalismo.</p>
    </section>

    <section id="destaques" class="container text-center my-5 py-5">
        <h2>DESTAQUES DO PORTFÓLIO</h2>
        <div class="row mt-4">
            <div class="col-md-4"><div class="destaque-portfolio-imagem"></div></div>
            <div class="col-md-4"><div class="destaque-portfolio-imagem"></div></div>
            <div class="col-md-4"><div class="destaque-portfolio-imagem"></div></div>
        </div>
        <div class="row mt-4"> 
            <div class="col-md-4"><div class="destaque-portfolio-imagem"></div></div>
            <div class="col-md-4"><div class="destaque-portfolio-imagem"></div></div>
            <div class="col-md-4"><div class="destaque-portfolio-imagem"></div></div>
        </div>
        <a href="portfolio.php" class="btn btn-outline-light mt-4">VER PORTFÓLIO COMPLETO</a>
    </section>
</main>

<?php
    include 'includes/footer.php';
?>