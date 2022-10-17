<?php
    require_once __DIR__ . "/../classes/veiculo.php";
    require_once __DIR__ . "/../actions/action_veiculo.php";


    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    
    $veiculo = new veiculo($modelo, $ano);
    echo $veiculo->getModelo();
    $acao = new action_veiculo();
    $acao->CadastrarVeiculo($veiculo);
    header('Location: ../../index.html');
?>