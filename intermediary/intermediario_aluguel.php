<?php
    require_once __DIR__ . "/../classes/aluguel.php";
    require_once __DIR__ . "/../actions/action_cliente.php";


    $valor = $_POST["valor"];
    $data = $_POST["data_aluguel"];
    $id_carro = $_POST["id_carro"];
    $id_cliente = $_POST["id_cliente"];

    $cliente = new cliente($nome, $cpf);
    $acao = new action_cliente();
    $acao->CadastrarCliente($cliente);
    header('Location: ../../cliente.php');

?>