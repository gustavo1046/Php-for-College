<?php
    require_once __DIR__ . "/../classes/cliente.php";
    require_once __DIR__ . "/../actions/action_cliente.php";
    require_once __DIR__ . "/../cliente.php";


    $id = $_REQUEST['id'];
    $op = $_REQUEST['op'];

    if($id == 0) {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $cliente = new cliente($nome, $cpf);
        $acao = new action_cliente();
        $acao->CadastrarCliente($cliente);
        header('Location: ../../cliente.php');
    }

    if($op == 1) {
        $cliente = new cliente($nome, $cpf);
        $acao = new action_cliente();
        $acao->EditaCliente($cliente, $id);
        // header('Location: ../../cliente.php');
    }

    if($op==2){
        $acao = new action_cliente();
        $acao->ExcluirCliente($id);
        header('Location: ../../cliente.php');
    }


    // if ($opcao == 1){
    //     $valor = $_POST["valor"];
    //     $data = $_POST["data_entrega"];
    //     $tipo = $_POST["tipo"];
    //     $status = $_POST["status"];
    //     $descricao = $_POST["descricao"];
    //     $id = (int) $_POST["id"];
    //     $atividade = new Atividade(15, $data, $tipo, $descricao, $valor, $status);
    //     $acao = new action_Atividade();
    //     $acao->EditarAtividade($atividade, $id);
    //     header('Location: ../../profiles/teacher/menageactivities.php');
    // }

    // if ($opcao == 2){
    //     $id = (int) $_POST["id"];
    //     $acao = new action_Atividade();
    //     $acao->ExcluirAtividade($id);
    //     header('Location: ../../profiles/teacher/menageactivities.php');
    // }
?>
