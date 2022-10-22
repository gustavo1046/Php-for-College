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
                <form action="./intermediary/intermediario_aluguel.php" method="POST">
                    <input type="number" name="valor" id="text"placeholder="Valor do aluguel" step="0.01"><br>
                    <input type="date" name="data_aluguel" id="text" placeholder="Data do aluguel" maxlength="4"><br>
                    <input type="text" name="id_carro" id="text"placeholder="Codigo do carro"><br>
                    <input type="text" name="id_cliente" id="text"placeholder="Codigo do cliente"><br>
                    <div class="botao">
                        <input type="radio" name="ativo" id="ativo" value="Ativo" checked> <label for="ativo">ativo</label>
                    </div>
                    <div class="botao">
                        <input type="radio" name="ativo" id="inativo" value="Inativo"><label for="ativo">inativo</label>
                    </div>
                    <input type="submit" id="sub">
                </form>
            </div>
            <h2>Clientes</h2>
            <table border='1'>
                <th colspan= "1">Codigo</th>
                <th colspan= "1">Nome</th>
                <th colspan= "2">CPF</th>
                <?php
                    require_once __DIR__ . "/actions/action_cliente.php";
                    $acao = new action_cliente();
                    $acao->ListaClientesAluguel();
                ?>
            </table><br><br>
            <h2>Veículos</h2>
            <table border='1'>
                <th colspan= "1">Codigo</th>
                <th colspan= "1">Modelo</th>
                <th colspan= "2">CPF</th>
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