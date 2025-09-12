<?php
    include('verifica_login.php');
    include('conexao.php');

    $niveldapagina = array($mestre, $colaborador);

    if(!in_array ($nivel, $niveldapagina)) {
        echo
            "<script> 
            alert('Você não tem acesso a essa área!')
            history.go(-1);
            </script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <title> INÍCIO | Meu Portal </title>
        <!------------------------------------ HEAD ------------------------------------>
        <?php include 'includes-portal/head.php'; ?>
        <!------------------------------------ HEAD ------------------------------------>
    </head>
    <body>
        <header>
            <!--------------------------------- HEADER --------------------------------->
            <?php include 'includes-portal/header.php'; ?>
            <!--------------------------------- HEADER --------------------------------->
        </header>
        
        <div class="container">
            <br>

            <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO PLANO </h5></center>

            <hr>

            <form>
                <div class="form-row">
                    <div class="col">
                        <label for="nomePlano">* Nome</label>
                        <input type="text" class="form-control" id="nome_plano" name="nome_plano" placeholder="Nome do plano">
                    </div>
                    <div class="col">
                        <label for="descricaoPlano">* Descrição</label>
                        <input type="text" class="form-control" id="desc_plano" name="desc_plano" placeholder="Descreva detalhes do plano">
                    </div>
                    <div class="col">
                        <label for="valorPlano">* Valor</label>
                        <input type="text" class="form-control" id="vlr_plano" name="vlr_plano" placeholder="R$ 0,00"> 
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-danger">Limpar</button> 
                </div>
            </form>
            <br>
            
        </div>
        <footer>
            <!------------------------------- FOOTER ----------------------------------->
            <?php include 'includes-portal/footer.php'; ?>
            <!------------------------------- FOOTER ----------------------------------->
        </footer>
    </body>
</html>