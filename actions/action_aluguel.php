<?php
require_once __DIR__ . "/../data/conexao.php";
require_once __DIR__ . "/../classes/aluguel.php";
class action_aluguel
{
    public function ListaAlugueis(){ #lista os alugueis na tela de index
        $conexao = Conexao::Conectar();
        $sql =  "select data, valor, ativo, id_carro carro, id_cliente cliente from aluguel;";
        $result = $conexao->query($sql);
        // where ano =".$ano."

        if ($result->num_rows > 0) {
            // output data of each row
            while($rows = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$rows["data"]."</td><td>".$rows["valor"]."</td><td>".$rows["ativo"]."</td><td>".$rows["carro"]."</td><td>".$rows["cliente"]."</td>";
                echo "</tr>";
                #echo "id: " . $rows["id"]. " - Nome: " . $rows["nome"]. ",CPF: " . $rows["cpf"]. "<br>";
            }
            } else {
                echo "0 results";
            }
    }
}
