<?php
    require_once __DIR__ . "/../classes/cliente.php";
    require_once __DIR__ . "/../actions/action_cliente.php";
    require_once __DIR__ . "/../cliente.php";


    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $cliente = new cliente($nome, $cpf);
    $acao = new action_cliente();
    $acao->CadastrarCliente($cliente);
    header('Location: ../../cliente.php');
    
?>
