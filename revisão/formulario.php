<!DOCTYPE html>
<html>
    <head>
        <title> FORMULÁRIO </title>
    </head>
    <body>
        <form action="processa_dados.php" method="POST">
            <table border="1" width="400">
                <tr>
                    <td><label for="campo_nome">NOME:</label></td>
                    <td><input type="text" id="nome_usuario" name="nome_usuario" size="30" placeholder="Insira seu nome" required></td>
                </tr>
                <tr>
                    <td><label for="campo_email">EMAIL:</label></td>
                    <td><input type="email" id="email_usuario" name="email_usuario" size="30" placeholder="Insira seu email"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> 
                        <button type="submit">ENVIAR DADOS</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>