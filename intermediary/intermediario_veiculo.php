<?php
    require_once __DIR__ . "/../classes/veiculo.php";
    require_once __DIR__ . "/../actions/action_veiculo.php";

    $acao = new action_veiculo();

    if($_POST && ($_POST['opcao'] != 1 && $_POST['opcao'] != 2)){
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];
        $veiculo = new veiculo($modelo, $ano);
        $acao->CadastrarVeiculo($veiculo);
        header('Location: ../veiculo.php');
    }
    else if($_GET && intval($_GET['op'])==1){
        session_start();
        $_SESSION['dados']=$acao->GetVeiculoById($_GET["id"]);
        $_SESSION['dados']['opcao']= $_GET['op'];
        header('Location: ../veiculo.php');
    }
    else if($_POST && $_POST['opcao'] == 1){
        session_start();
        $acao->EditaVeiculo($_POST['modelo'], intval($_POST['ano']), intval($_POST['id']));
        session_destroy();
        header('Location: ../veiculo.php');
    }
    else if($_GET && $_GET['op'] == 2){
        $acao->ExcluirVeiculo(intval($_GET['id']));
        header('Location: ../veiculo.php');
    }
?>