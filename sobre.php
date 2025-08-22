<!DOCTYPE html>
<html>
    <head>
        <title> PLANOS </title>
        <!----------------------------------------- HEAD ---------------------------->
        <?php include 'includes-site/head.php'; ?>
        <!----------------------------------------- HEAD ---------------------------->
    </head>
    <body>
        <header>
        <!----------------------------------------- HEADER ---------------------------->
            <?php include 'includes-site/header.php'; ?>
        <!----------------------------------------- HEADER ---------------------------->
        </header>
        <br>
            <div class="container">
                <p> <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#lista-sobre" role="tab" aria-controls="home">Sobre</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#lista-missao" role="tab" aria-controls="profile">Missão</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#lista-visao" role="tab" aria-controls="messages">Visão</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#lista-valores" role="tab" aria-controls="settings">Valores</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="lista-sobre" role="tabpanel" aria-labelledby="list-home-list">
                                <p align="justify">    
                                    Desde de 2025, a turma 3-1 tem se dedicado a oferecer as melhores soluções em conectividade.
                                </p>
                                </div>
                                <div class="tab-pane fade" id="lista-missao" role="tabpanel" aria-labelledby="list-profile-list">
                                <p align="justify">    
                                    Transformar desafios digitais em oportunidades, através de tecnologia acessível e suporte de excelência.
                                </p>
                                </div>
                                <div class="tab-pane fade" id="lista-visao" role="tabpanel" aria-labelledby="list-messages-list">
                                <p align="justify"> 
                                    Construir um futuro digital mais acessível e produtivo para todos.
                                </p>
                                </div>
                                <div class="tab-pane fade" id="lista-valores" role="tabpanel" aria-labelledby="list-settings-list">
                                    <p align="justify"> 
                                    
                                    <br><i class="fa fa-mail-forward" style="font-size:24px">Inovação</i></br>
                                    <br><i class="fa fa-mail-forward" style="font-size:24px">Entusiasmo</i></br>
                                    <br><i class="fa fa-mail-forward" style="font-size:24px">Confiança</i></br>
                                    <br><i class="fa fa-mail-forward" style="font-size:24px">Foco no Cliente</i></br>
                                    <br><i class="fa fa-mail-forward" style="font-size:24px">Comprometimento</i></br>
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </br>
        
        <footer>
            <?php include 'includes-site/footer.php'; ?>
        </footer>
    </body>
</html>
