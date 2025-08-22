<?php
    include('verifica_login.php');
    include('conexao.php');
?>
<!DOCTYPE html>
<html>  
    <head>
        <title> INÍCIO| PORTAL </title>
        <!----------------------------------------- HEAD ---------------------------->
        <?php include 'includes-portal/head.php'; ?>
        <!----------------------------------------- HEAD ---------------------------->
    </head>
    <body>
        <header>
        <!----------------------------------------- HEADER ---------------------------->
        <?php include 'includes-portal/header.php'; ?>
        <!----------------------------------------- HEADER ---------------------------->
        </header>
    
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../portal/midias-portal/img/index1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <button type="button" class="btn btn-primary btn-lg">SISTEMA DE GESTÃO</button>
                        </div>
                </div>  
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <footer>
            <!----------------------------------------- FOOTER ---------------------------->
            <?php include 'includes-portal/footer.php'; ?>
            <!----------------------------------------- FOOTER ---------------------------->
            </footer>
    </body>
</html>