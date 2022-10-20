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
                    <input type="text" name="nome" id="text"placeholder="Digite seu nome"><br>
                    <input type="text" name="cpf" id="text" placeholder="Digite seu cpf"><br>
                    <input type="submit" id="sub">
                </form>
            </div>
            <div class="tabela">
            </div>
        </div>

        <table border='1'>
            <th>Nome</th>
            <th>CPF</th>
            <?php
                require_once __DIR__ . "/data/conexao.php";
                require_once __DIR__ . "/classes/cliente.php";

                $conexao = Conexao::Conectar();
                $sql =  "SELECT cod, nome, cpf FROM cliente";
                $result = $conexao->query($sql);
                
                
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["nome"]."</td><td>".$row["cpf"]."</td>";
                    echo "<td><a href='clienteedit.php?id=".$row["id"]."'>Edit</a></td>";
                    echo "<td><a href='clientedelete.php?id=".$row["id"]."'>Delete</a></td>";
                    echo "</tr>";
                    #echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. ",CPF: " . $row["cpf"]. "<br>";
                }
                } else {
                echo "0 results";
                }
            ?>
            </table>
    </div>
</body>
</html>