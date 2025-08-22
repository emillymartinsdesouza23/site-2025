<?php
    /*
    O que são estruturas de controle?
    -Mecanismos para controlar o fluxo de execução do código, permitindo que diferentes bloco de
    código sejam executados sob certas condições repetidamente.

    *Estruturas condicionais:
        IF: Executa um bloco de código se uma condição for verdadeira.

        IF...else: Executa um bloco de codigo se a condição for verdadeira e outro bloco se a
        condição for falsa.

        IF...elseif...else: Permite verificar multiplas condições sequencialmente.

        switch: Seleciona um bloco de código para executar com base no valor de uma expressão.

    * Estruturas de Repetição (loops): 
        while: Executa um bloco de código enquanto uma condição for verdadeira.

        do..while: Similar o while, mas garante que o bloco de código seja executado pelo menos uma vez.

        For: Executa um bloco de código específico de vezes.

        foreach: Especificamente para percorrer arrays e objetos.   
    */

    $nota= 5;

        if($nota >= 7){
            // Executado se for aprovado (verdadeiro)
            echo "Aprovado!";
        }
        elseif($nota >= 5){
            echo "Recuperação!";
        }
        else{
            echo "Reprovado!";
        }
        echo "<br><br>";

    $idade= 17;

    if($idade >= 18){
        echo "Maior de idade.";
    }
    else{
        echo "Menor de idade.";
    }

    echo "<hr>";

    /* --> Estrutura Condicional Switch: Uma alternativa para múltiplos elseif qunado você precisa
    comparar uma variável com diferentes valores.

    */

    $dia_semana = 2;

    switch ($dia_semana) {
        case 1:
            echo "Domingo";
            break; 
        case 2:
            echo "Segunda-feira";
            break;
        case 3:
            echo "Terça-feira";
            break;
        case 4:
            echo "Quarta-feira";
            break;
        case 5:
            echo "Quinta-feira";
            break;
        case 6:
            echo "sexta-feira";
            break;  
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Dia da semana inválido."; 
    }

    echo "<br>";

    $cor = "azul";

    switch ($cor) {
        case "vermelho";
            echo "A cor é vermelha";
            break;
        case "azul";
            echo "A cor é azul";
            break;
        case "verde";
            echo "A cor é verde";
            break;
        default:
            echo "Cor inválida.";
    }

    echo "<hr>";

    // --> Estrutura de Repetição while: executa bloco de código repetidamente enquanto a condição for verdadeira

    $contador = 0;

    while ($contador < 5) {
        echo "O contador é: ".$contador. "<br>";
        $contador++;
    }

    /* Saida:
    O contador é: 0
    O contador é: 1
    O contador é: 2
    O contador é: 3
    O contador é: 4
    */

    echo "<br>";

    // --> Estrutura de repetição do...while: Similar ao while, mas garante que o bloco de código seja executado ao menos uma vez.

    $tentativas = 0;
    $senhaCorreta = "secreto";
    $senhaDigitada = "errada";

    do {
        echo "Tentativa de login número: ".($tentativas +1)."<br>";

        $tentativas++;

        // Em uma aplicação real, aqui você receberia a entrada do usuário para a senha

        if ($tentativas == 6) {
            $senhaDigitada = "secreto";
        }

        // simula o usuário digitanto a senha correta na terceira tentativa
        } while ($senhaDigitada != $senhaCorreta && $tentativas < 5); 
        
        if ( $senhaDigitada == $senhaCorreta ) {
            echo "Login bem-sucedido!";
        } else {
            echo "Número de tentativas excedido.";
    }

    echo "<hr>";
        // --> Estrutura de repetição for: util quando você sabe quantas vezes precisa que um bloco de código seja executado
        for ($i = 1; $i <=5; $i++) {
            echo "O valor de I é: ". $i ."<br>";
        }
    /*  Saída:
        valor de I é: 1
        valor de I é: 2
        valor de I é: 3
        valor de I é: 4
        valor de I é: 5
    */
    echo "<br>";

    $nomes = ["Carlos", "Mariana", "Lucas", "Julio"]; // array
    for ($i = 0; $i <count($nomes); $i++) {
        echo "Nome na posição ".$i.": ".$nomes[$i].
        "<br>";
    }
    /* Saída:
        Nome na posição 0: Carlos
        Nome na posição 1: Mariana
        Nome na posição 2: Lucas
    */

    echo "<hr>";

    // Estrutura de repetição foreach: projetada especificamente para iterar sobre arrays e objetos 

    $cores = ["Vermelho", "Azul", "Verde", "Preto"];
    foreach ($cores as $cor) {  
        echo "A cor é: ". $cor ."<br>";
    }
    /* Saída:
        A cor é: Vermelho  
        A cor é: Azul
        A cor é: Verde
    */

    echo "<br>";

    $pessoa = ["Nome" => "Emilly", "Idade" => 17, "Cidade" => "Palmeira das missões"];
    foreach ($pessoa as $nome => $vlr) {  
        echo $nome.": ".$vlr."<br>";
    }
    /* Saída:
        Nome: Emilly  
        Idade: 17
        Cidade: Palmeira das Missões
    */
        
        



?>