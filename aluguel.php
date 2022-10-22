<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Locadora Acorda Pedrinho</title>
</head>
<body>
    <div class="all">
        <div class="title">
            <h1>Locadora de Veículos Acorda Pedrinho</h1>
        </div>
        <div class="content">
            <div class="options">
                <a href="./index.html">Voltar</a>
            </div>
            <div class="cadastro">
                <h2>formulario de cadastro</h2>
                <form action="./intermediary/intermediario_cliente.php" method="POST">
                    <input type="number" name="valor" id="text"placeholder="Valor do aluguel" step="0.01"><br>
                    <input type="text" name="Data Aluguel" id="text" placeholder="Data do aluguel" maxlength="4"><br>
                    <input type="text" name="id_carro" id="text"placeholder="Codigo do carro"><br>
                    <input type="text" name="id_cliente" id="text"placeholder="Codigo do cliente"><br>
                    <input type="submit" id="sub">
                </form>
            </div>
            <h2>Clientes</h2>
            <table border='1'>
                <th colspan= "1">Nome</th>
                <th colspan= "1">CPF</th>
                <th colspan= "2">Opções</th>
                <?php
                    require_once __DIR__ . "/actions/action_cliente.php";
                    $acao = new action_cliente();
                    $acao->ListaClientesAluguel();
                ?>
            </table><br><br>
            <h2>Veículos</h2>
            <table border='1'>
                <th colspan= "1">Nome</th>
                <th colspan= "1">CPF</th>
                <th colspan= "2">Opções</th>
                <?php
                    require_once __DIR__ . "/actions/action_veiculo.php";
                    $acao = new action_veiculo();
                    $acao->ListaVeiculosAluguel();
                ?>
            </table>


        </div>
    </body>
</body>
</html>