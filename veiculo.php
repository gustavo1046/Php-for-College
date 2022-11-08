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
                <form action="./intermediary/intermediario_veiculo.php" method="POST">
                <input type="hidden" name="id" value="<?= $_SESSION['dados']['cod'] ?>">
                    <input type="hidden" name="opcao" value="<?= $_SESSION['dados']['opcao'] ?>">
                    <input type="text" name="modelo" id="text"placeholder="Digite o modelo do veículo" value="<?= $_SESSION['dados']['modelo'] ?>"><br>
                    <input type="text" name="ano" id="text" placeholder="Digite o ano do veículo" maxlength="4" onkeypress="return somenteNumeros(event);"value="<?= $_SESSION['dados']['ano'] ?>"><br>
                    <input type="submit" id="sub">
                </form>
            </div>
            <div class="tabela">
            </div>
        </div>
    
        <table border='1'>
            <th colspan= "1">Modelo</th>
            <th colspan= "1">Ano</th>
            <th colspan= "2">Opções</th>
            <?php
                require_once __DIR__ . "/actions/action_veiculo.php";
                $acao = new action_veiculo();
                $acao->ListaVeiculos();
            ?>
        </table>
        </div>
</div>
</body>
</html>