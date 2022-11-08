<?php
    require_once __DIR__ . "/../classes/cliente.php";
    require_once __DIR__ . "/../actions/action_cliente.php";
    require_once __DIR__ . "/../cliente.php";
    
    $acao = new action_cliente();

    if($_POST && ($_POST['opcao'] != 1 && $_POST['opcao'] != 2)){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $cliente = new cliente($nome, $cpf);
        $acao->CadastrarCliente($cliente);
        header('Location: ../../cliente.php');
    }
    else if($_GET && intval($_GET['op'])==1){
        session_start();
        $_SESSION['dados']=$acao->GetClienteById($_GET["id"]);
        $_SESSION['dados']['opcao']= $_GET['op'];
        header('Location: ../cliente.php');
    }
    else if($_POST && $_POST['opcao'] == 1){
        session_start();
        $acao->EditaCliente($_POST['nome'], intval($_POST['cpf']), intval($_POST['id']));
        session_destroy();
        header('Location: ../cliente.php');
    }
    else if($_GET && $_GET['op'] == 2){
        $acao->ExcluirCliente(intval($_GET['id']));
        header('Location: ../cliente.php');
    }
    
    
    
?>
