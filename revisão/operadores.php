<?php
/*
O que são operadores?
    - símbolos que realizam operações valores(operando).

    *Aritméticos:
    + (adição), - (subtração), * (multiplicação),
    / (divisão), %(módulo - resto da divisão).
    
    * Atribuição:
    = (atribuição), +=, -=, *=, /=, %=, **= (
    atribuições combinadas)
    
    * Comparação:
    == (igual), === (idêntico - igual de valor e
    tipo), != ou <> (diferente), !== (não idêntico),
    > (maior que), <= (menor ou igual a).
    
    *Lógicos:
    && ou AND (E lógico), || ou OR (OU lógico), ! ou NOT (NÃO lógico).
    
    */

    // --> Operadores Aritméticos: Usados para realizar operações matemáticas. 
    
    $num1 = 10;
    $num2 = 5;

    $soma = $num1 + $num2; // Adição
    $subtracao = $num1 - $num2; // Subtração
    $multiplicacao = $num1 * $num2; // Multiplicação
    $divisao = $num1 / $num2; // Divisão
    $modulo = $num1 % $num2; // Módulo (resto da divisão)
    $potencia = $num1 ** $num2; // Exponenciação

    echo "SOMA É: ".$soma."<br>"; // Saída: SOMA = 15
    echo "SUBTRAÇÃO É: ".$subtracao."<br>"; // Saída: SUBTRAÇÃO = 5
    echo "MULTIPLICAÇÃO É:".$multiplicacao."<br>"; // Saída: MULTIPLICAÇÃO = 50
    echo "DIVISÃO É:".$divisao."<br>"; // Saída: DIVISÃO = 2
    echo "MÓDULO É: ".$modulo."<br>"; // Saída: MÓDULO = 
    echo "PONTÊNCIA É: ".$potencia."<br>"; // Saída: POTÊNCIA = 

    echo "<hr>";

    // --> Operadores de Atribuição: Usados para atribuir valores e variáveis.

    $x = 10; 
    $y = 20;

    $x += 5; // 15
    $y -= 3; // 17
    $x *= 2; // 30
    $y /= 4; // 4.25
    $x %= 3; // 0 

    echo "O VALOR DE X É: " . $x . "<br>";
    echo "O VALOR DE Y É: " . $y . "<br>";

    echo "<hr>";

    // --> Operador de comparação: usados para comparar valores; o resultado é sempre um valor booleano (true ou false)
    $a = 8; 
    $b = "8";
    $c = 12;

    var_dump($a == $b); // Igual (valor):true
    echo "<br>";

    var_dump($a === $b); // Idêntico (valor): false
    echo "<br>";

    var_dump($a != $c); // (a - b) Diferente (valor):true
    echo "<br>";

    var_dump($a !== $b); // (a - c) Não idêntico (valor e tipo):true
    echo "<br>";

    var_dump($a > $c); // (a - c)Maior que: false
    echo "<br>";

    var_dump($a < $b); // (a - c)Menor que: true
    echo "<br>";

    var_dump($c >= 12); // (c - 12)Maior ou igual a: true
    echo "<br>";

    var_dump($a <= 5); // (a - 5)Menor ou igual a: false
    echo "<br>";

    echo "<hr>";

    // --> Operadores lógicos: Usados para combinar expressões booleanas
    $idade = 25;
    $temcarteira = true;
    
    if ($idade >= 18 && $temcarteira) { // AND (e): ambas as condições devem ser verdadeiras
        echo "Pode dirigir"; // Saída: pode dirigir!
    } else {
        echo "Não pode dirigir"; // Saída: Não pode dirigir!
    }

    echo "<br>";

    $temDesconto = false;
    $eClienteNovo = false;

    if ($temDesconto || $eClienteNovo) {
        echo "Tem direito ao desconto"; 
    } else {
        echo "Não tem direito ao desconto";
    }

    echo "<br>";

    $estaChovendo = false;
    
    if(!$estaChovendo) {
        echo "O dia está ensolarado";
    } else {
        echo "Está chovendo";
    }

    echo "<hr>";

    // Operadores de Incremento/Decremento: Usados para aumentar ou diminuir o valor de uma variável numérica em 1.

    $contador = 0;

    echo $contador++; // Pós-incremento: retornar o valor atual e depois incrementa (Saída: 0)
    echo "<br>";
    echo $contador; // Saída: 1
    echo "<br>";

    echo ++$contador; // Pré-incremento: incrementa e depois retorna o valor(Saída: 2)
    echo "<br>";

    echo $contador--; // Pós-incremento: retornar o valor atual e depois decrementa (Saída: 0)
    echo "<br>";
    echo $contador; // Saída: 1
    echo "<br>";

    echo --$contador; // Pré-incremento: decrementa e depois retorna o valor(Saída: 2)
    echo "<br>";

    echo "<hr>";
    // Operador de Concatenação de string: Usado para juntar strings.
    $nome = "Emilly";
    $sobrenome = "Martins de Souza";
    $nomeCompleto = $nome." ".$sobrenome;
    // Concatenação
    echo $nomeCompleto; // Saída: Emilly Martins de Souza

    $mensagem = "Olá, ";
    $mensagem .= $nome;
    echo "<br>" . $mensagem;
    // Saída: Olá, Emilly

    /*
    POST: "seguro" (login: senha e usuário)
    GET: visivel na URL + rápido
    */
    
?>

