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
                
                <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                        echo '<a href="agendar-horario.php?data=2025-08-04" class="dia dia-livre">4 <br><small>Agendar</small></a>';
                    } else {
                        echo '<a href="login.php" class="dia dia-livre">4 <br><small>Agendar</small></a>';
                    }
                ?>
                
                <div class="dia">5</div>
                <div class="dia dia-ocupado">6 <br><small>Ocupado</small></div>
                <div class="dia">7</div>
                <div class="dia">8</div>
                <div class="dia">9</div>
                <div class="dia">10</div>
                <div class="dia">11</div>
                <div class="dia">12</div>
                <div class="dia dia-ocupado">13 <br><small>Ocupado</small></div>
                <div class="dia">14</div>
                
                <a href="login.php" class="dia dia-livre">15 <br><small>Agendar</small></a>
                <div class="dia">16</div>
                <div class="dia">17</div>
                <div class="dia">18</div>
                <div class="dia dia-ocupado">19 <br><small>Ocupado</small></div>
                <div class="dia">20</div>

            </div>
        </div>
    </div>
</main>

<?php
    include 'includes/footer.php';
?>