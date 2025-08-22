    <!-- NAVBAR DA LOGO E PESQUISA -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../midias-site/img/logo.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
        </a>
        <i class='fa fa-user-circle' style='font-size:24px'>&ensp; <?php echo $noperador." ".$soperador ?></i>
        </div>
    </nav>

    <!-- NAVBAR DOS LINKS -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" id="header"><i class="fa fa-thumb-tack"></i> Início </a>
            </li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#" id="header"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="header">
                <i class="fa fa-plus"></i> Adicionar
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="form_plano.php" id="header2"><i class="fa fa-cart-arrow-down"></i> &ensp; Plano</a></li>
                <li>
                <li><a class="dropdown-item" href="form_cliente.php" id="header2"><i class="fa fa-address-book"></i> &ensp; Cliente</a></li>
                <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="form_atendimento.php" id="header2"><i class="fa fa-calendar"></i> &ensp; Atendimento</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista_faturas.php" id="header"><i class="fa fa-credit-card-alt"></i> Faturas </a>
            </li>
            </ul>
            <a href="logout.php">
            <button class="btn btn-outline-light rounded-100"><strong><i class="fa fa-reply"></i> &ensp; Saír </strong></button>
            </a>
        </div>
        </div>
    </nav>