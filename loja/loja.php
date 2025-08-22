<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LOJA EMILLY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
    font-family: "Times New Roman", Times, serif;
    margin: 20px;
    background-color: #f0f0f0;
    color: #333;
    }
    .main-card-wrapper, .secondary-card-wrapper {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .main-card-wrapper {
        margin-top: 30px;
    }
    .secondary-card-wrapper {
        margin-top: 20px;
    }
    h1, h2 {
        color: #0066cc;
    }
    h1 {
        text-align: center;
    }
    hr {
        border: 0;
        height: 1px;
        background-color: #ccc;
        margin: 15px 0;
    }
    strong {
        color: #000;
    }
    .destaque {
        font-weight: bold;
        color: #d00;
        font-size: 1.1em;
    }
    .desconto-ok {
        color: green;
        font-weight: bold;
    }
    .desconto-nao {
        color: orange;
        font-weight: bold;
    }
    </style>
</head>
<body>

    <div class="main-card-wrapper">
        <div class="card" style="width: 25rem;"> 
            <div class="card-body">
                <?php
                $nomeProduto        = "Notebook Ultra";
                $precoUnitario      = 1500.00;
                $quantidadeComprada = 2;
                $temCupomDesconto   = true;

                $subtotal = $precoUnitario * $quantidadeComprada;
                $valorDesconto = 0;

                if ($subtotal > 200 || $temCupomDesconto == true) {
                    $valorDesconto = $subtotal * 0.10;
                }
                $totalAPagar = $subtotal - $valorDesconto;

                echo '<h1><i class="fa fa-cart-plus" style="font-size:36px"></i> LOJA EMILLY</h1>';
                echo "<hr>";
                echo '<h2>DETALHES DA COMPRA!</h2>';

                echo "<p>Produto: <strong>" . $nomeProduto . "</strong></p>";
                echo "<p>Quantidade: <strong>" . $quantidadeComprada . "</strong></p>";
                echo "<p>Preço Unitário: <strong>R$ " . $precoUnitario . "</strong></p>";
                echo "<hr>";

                echo "<p>Subtotal: <strong>R$ " . $subtotal . "</strong></p>";
                echo "<p>Desconto: <strong>R$ " . $valorDesconto . "</strong></p>";

                if ($valorDesconto > 0) {
                    echo "<p class='desconto-ok'>Desconto aplicado!</p>";
                } else {
                    echo "<p class='desconto-nao'>Nenhum desconto aplicado.</p>";
                }
                echo "<hr>";

                echo "<p class='destaque'><i class=\"fa fa-fax\" style=\"font-size:24px\"></i> Total a Pagar: <strong>R$ " . $totalAPagar . "</strong></p>";
                ?>
            </div>
            <div class="card-footer text-muted">
                Obrigado pela sua compra!
            </div>
        </div>
    </div>

    ---

    <div class="secondary-card-wrapper">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Resumo dos Valores
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    **Subtotal:** R$ <?php echo $subtotal; ?>
                </li>
                <li class="list-group-item 
                    <?php echo ($valorDesconto > 0) ? 'list-group-item-success' : 'list-group-item-warning'; ?>"
                >
                    **Desconto:** R$ <?php echo $valorDesconto; ?>
                </li>
                <li class="list-group-item active" aria-current="true">
                    **Total a Pagar:** R$ <?php echo $totalAPagar; ?>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>