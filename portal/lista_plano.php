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

        <?php
            $consulta = "SELECT * FROM planos
                        ORDER BY nome_plano ASC";
            
            $con  = mysqli_query($conexao, $consulta) OR DIE ($conexao->error);
            
            if (($con) AND ($con->num_rows != 0)) {
        ?>

            <center><h5> LISTA DE PLANOS CADASTRADOS </h5></center>
            <hr>

            <?php
            if(isset($_SESSION['msgListaPlano'])) {
                echo $_SESSION['msgListaPlano'];
                unset($_SESSION['msgListaPlano']);
            }
            ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plano</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">valor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>

                <?php while ($dado = mysqli_fetch_assoc($con)) { ?>

                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $dado['id_plano']; ?></th>
                            <td><?php echo $dado ['nome_plano']; ?></td>
                            <td><?php echo $dado ['desc_plano']; ?></td>
                            <td><?php echo $dado ['vlr_plano']; ?></td>
                            <td><a href="edt_plano.php?id_plano=<?php echo $dado ['id_plano']; ?>"><i class='fa fa-edit' style='font-size:24px'></i></a></td>
                            <td><i class='fa fa-trash' style='font-size:24px'></i></td>
                    </tr>
                    </tbody>
                <?php } ?>
            </table>
            <?php } else {
                echo "<p> NENHUM PLANO CADASTRADO </p>";
            } 
            ?>

            <br>  
        </div>
        <footer>
            <!------------------------------- FOOTER ----------------------------------->
            <?php include 'includes-portal/footer.php'; ?>
            <!------------------------------- FOOTER ----------------------------------->
        </footer>
    </body>
</html>