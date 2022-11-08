<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="script.js"> </script>
    <title>Locadora Acorda Pedrinho</title>
</head>
<body>
    <div class="all">
        <div class="title">
            <h1>Locadora de Veículos Acorda Pedrinho</h1>
        </div>
        <div class="content">
            <div class="options">
                <a href="./index.php">Voltar</a>
            </div>
            <div class="cadastro">
                <h2>formulario de cadastro</h2>
                <form action="./intermediary/intermediario_cliente.php" method="POST">
                    <input type="hidden" name="id" value="<?= $_SESSION['dados']['cod'] ?>">
                    <input type="hidden" name="opcao" value="<?= $_SESSION['dados']['opcao'] ?>">
                    <input type="text" name="nome" id="text"placeholder="Digite seu nome" value="<?= $_SESSION['dados']['nome'] ?>" maxlength="70"><br>
                    <input type="text" name="cpf" id="text" placeholder="Digite seu cpf" value="<?= $_SESSION['dados']['cpf'] ?>" onblur="validarCPF(this);" 
                    onkeypress="return somenteNumeros(event);" maxlength="11" required><br>
                    <input type="submit" id="sub">
                </form>
            </div>
            <div class="tabela">
            </div>
        </div>

        <table border='1'>
            <th colspan= "1">Nome</th>
            <th colspan= "1">CPF</th>
            <th colspan= "2">Opções</th>
            <?php
                require_once __DIR__ . "/actions/action_cliente.php";
                $acao = new action_cliente();
                $acao->ListaClientes();
            ?>
        </table>
    </div>
</body>
</html>

<script>
    function editar(id) {
        document.getElementById("esconde").value = 2;
    }

    function excluir(id) {
        document.getElementById("esconde").value = 3;
    }
</script>