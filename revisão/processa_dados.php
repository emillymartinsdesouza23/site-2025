<!DOCTYPE html>
<lang="pt=br">
    <head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
    </head>
    <body>
        <h1>Dados Recebidos no Formulário</h1>
        <hr>

        <?php
            if (!empty($_POST['email_usuario']) AND !empty($_POST['nome_usuario'])) {
                $nome   =$_POST['nome_usuario'];
                $email  =$_POST['email_usuario'];

                echo "<h2> Olá,".$nome."!</h2>";
                echo "<p> Recebemos seus Dados. Seu email é: <strong>".$email."</strong></p>";

            } else {
                echo "<script>
                    alert ('VIOLAÇÃO: Tentativa ilegal de operação')
                    history.go(-1)
                    </script>";
            }
        ?>
        </hr>
        <a href="formulario.php">
                    <button type="button" class="btn btn-secondary btn-lg">Voltar</button>
    </body>
