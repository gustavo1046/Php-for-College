<?php
    require_once __DIR__ . "/../classes/aluguel.php";
    require_once __DIR__ . "/../actions/action_aluguel.php";


    $valor = $_POST["valor"];
    $data = $_POST["data_aluguel"];
    $id_carro = $_POST["id_carro"];
    $id_cliente = $_POST["id_cliente"];
    $ativo = $_POST["ativo"];

    if(strcmp($ativo, "ativo")){
        $ativo = 1;
    }

    else {
        $ativo = 0;
    }

    $aluguel = new aluguel($valor, $ativo, $data, $id_carro, $id_cliente);
    $acao = new action_aluguel();
    $acao->Cadastraraluguel($aluguel);
    header('Location: ../../aluguel.php');

?>