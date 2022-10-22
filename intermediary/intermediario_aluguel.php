<?php
    require_once __DIR__ . "/../classes/cliente.php";
    require_once __DIR__ . "/../actions/action_cliente.php";


    $nome = $_POST["ano"];

    // if(empty($_POST["cpf"])){
    //     echo  "<script> alert('Email enviado com Sucesso!); </script>";
    // }
    
    // else {

    // }

    $cliente = new cliente($nome, $cpf);
    $acao = new action_cliente();
    $acao->CadastrarCliente($cliente);
    header('Location: ../../cliente.php');

?>