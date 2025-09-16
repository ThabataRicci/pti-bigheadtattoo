<?php
    session_start();
    $titulo_pagina = "O Artista";
    include 'includes/header.php';
?>

<main>
    <div class="container my-5 py-5">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="imagens/foto_artista.png" class="img-fluid rounded-circle mb-4 foto-perfil-artista" alt="Foto do Artista">
            </div>
            <div class="col-md-8">
                <h2 class="display-4">DANIEL KBÇA</h2>
                <p class="especialidades-artista">Especialidades: Maori, Geométrico, Escrita</p>
                <p>Apaixonado por transformar ideias em arte na pele, Daniel Kbça construiu sua trajetória unindo técnica, criatividade e atenção aos detalhes. No estúdio, cada trabalho é pensado junto com o cliente, respeitando seu estilo e valorizando a originalidade. Seja em traços finos ou projetos maiores, a prioridade é sempre entregar uma tatuagem única, feita com cuidado e profissionalismo.</p>
            </div>
        </div>
        <hr class="my-5">
        <div class="text-center">
            <h2 class="mb-5">TRABALHOS DO ARTISTA</h2>
            <div class="row">
                <div class="col-md-3 mb-4"><div class="item-portfolio-artista"></div></div>
                <div class="col-md-3 mb-4"><div class="item-portfolio-artista"></div></div>
                </div>
        </div>
    </div>
</main>

<?php
    include 'includes/footer.php';
?>