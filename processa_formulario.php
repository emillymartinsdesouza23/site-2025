<!DOCTYPE html>
<html>
    <head>
        <title> CONTATO </title>
        <?php include 'includes-site/head.php'; ?>
        </head>
    <body>
        <header>
        <?php include 'includes-site/header.php'; ?>
        </header>

        <?php
            if (!empty($_POST['nome']) && !empty($_POST['email'])) {
                $nome       =$_POST['nome'];
                $idade      =$_POST['idade'];
                $email      =$_POST['email'];
                $telefone   = $_POST['telefone'];
                $mensagem   =$_POST['mensagem'];
                
                echo "<h2>Olá, " . $nome . "!</h2>";
                echo "<p>Recebemos seus dados. Aqui estão as informações:</p>";
                echo "<strong>NOME:</strong> " . $nome;
                echo "<br><strong>IDADE:</strong> " . $idade;
                echo "<br><strong>EMAIL:</strong> " . $email;
                echo "<br><strong>TELEFONE:</strong> " . $telefone;
                echo "<br><strong>MENSAGEM:</strong> " . ($mensagem ? $mensagem : 'Nenhuma mensagem enviada.') ."</br>";


            } else {
                echo "<script>
                    alert ('VIOLAÇÃO: Tentativa ilegal de operação')
                    history.go(-1)
                    </script>";
            }
        ?>
        <br>
        <a href="contato.php">
        <button type="submit" class="btn btn-primary">Voltar</button>
        </a>
        </br>
        <br>
        <footer>
            <?php include 'includes-site/footer.php'; ?>
        </footer>
    </body>
</html>