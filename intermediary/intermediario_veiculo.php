<?php
    require_once __DIR__ . "/../classes/veiculo.php";
    require_once __DIR__ . "/../actions/action_veiculo.php";

    
    $id = $_REQUEST["id"];

    if ($id == 0){
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];
        
        $veiculo = new veiculo($modelo, $ano);
        $acao = new action_veiculo();
        $acao->CadastrarVeiculo($veiculo);
        header('Location: ../../veiculo.php');
    }

    else {
        $acao = new action_veiculo();
        $acao->ExcluirVeiculo($id);
        header('Location: ../../veiculo.php');
    }

?>