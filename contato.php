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
    <br>
    <form action="processa_formulario.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-6"> <label for="nome" i class="fa fa-user-o" style="font-size:24px"></i>&ensp; NOME</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="col-md-6"> <label for="idade" i class="fa fa-address-book-o" style="font-size:24px"></i>&ensp; IDADE</label>
                    <input type="number" class="form-control" id="idade" name="idade" placeholder="Sua idade" required>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label for="email" i class="fa fa-envelope-o" style="font-size:24px"></i>&ensp; EMAIL</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="col-md-6">
                <label for="telefone" i class='fa fa-phone' style='font-size:24px'>&ensp; TELEFONE</label>
                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
            </div>
        </div>
        </div>
        <br>
        <div class="container">
            <label for="mensagem" i class="fa fa-paper-plane-o" style="font-size:24px"></i>&ensp; MENSAGEM</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Bem-Vindo(a)!"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
        <br>
    </form>
    
        <footer>
            <?php include 'includes-site/footer.php'; ?>
        </footer>
    </body>
</html>