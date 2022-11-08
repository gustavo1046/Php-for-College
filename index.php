<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Locadora Acorda Pedrinho</title>
</head>
<body>
    <div class="all">
        <div class="title">
            <h1>Locadora de Veículos Acorda Pedrinho</h1>
        </div>
        <div class="content">
            <a href="cliente.php">Pagina de Clientes</a>
            <a href="veiculo.php">Pagina de Veículos</a>
        </div>
        <table border='1'>
            <th colspan= "1">Data</th>
            <th colspan= "1">Valor</th>
            <th colspan= "1">Atividade</th>
            <th colspan= "1">Carro</th>
            <th colspan= "1">Cliente</th>
            <?php
                require_once __DIR__ . "/actions/action_aluguel.php";
                $acao = new action_aluguel();
                $acao->ListaAlugueis();
            ?>
        </table>
    </div>
    </body>
</body>
</html>