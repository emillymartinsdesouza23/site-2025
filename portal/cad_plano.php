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

} else if (!empty($_POST['nome_plano']) OR !empty($_POST['desc_plano']) OR !empty($_POST['vlr_plano'])) {

    $nome_plano = $_POST['nome_plano'];
    $desc_plano = $_POST['desc_plano'];
    $vlr_plano = $_POST['vlr_plano'];

} else {
    echo
    "<script> 
        alert('VIOLAÇÃO: Tentativa ilegal de operação!')
        history.go(-1);
    </script>";
}
?>

