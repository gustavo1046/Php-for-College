<?php
require_once __DIR__ . "/../data/conexao.php";
require_once __DIR__ . "/../classes/veiculo.php";
class action_veiculo
{
    public function CadastrarVeiculo(veiculo $veiculo)
    {
        $conexao = Conexao::Conectar();
        $sql =  "INSERT INTO veiculo (modelo, ano) VALUES ('".$veiculo->getModelo()."', ".$veiculo->getAno().")";
        $conexao->query($sql);
        echo $conexao->error;
    }

    public function ListaVeiculos(){
        $conexao = Conexao::Conectar();
        $sql =  "select cod, modelo, ano from veiculo";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($rows = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$rows["modelo"]."</td><td>".$rows["ano"]."</td>";
                echo "<td><a href='intermediary/intermediario_veiculo.php?id=".$rows["cod"]."'>Delete</a></td>";
                echo "</tr>";
                #echo "id: " . $rows["id"]. " - Nome: " . $rows["nome"]. ",CPF: " . $rows["cpf"]. "<br>";
            }
            } else {
                echo "0 results";
            }
    }

    public function ListaVeiculosAluguel(){
        $conexao = Conexao::Conectar();
        $sql =  "select cod, modelo, ano from veiculo";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($rows = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$rows["cod"]."</td><td>".$rows["modelo"]."</td><td>".$rows["ano"]."</td>";
                echo "</tr>";
                #echo "id: " . $rows["id"]. " - Nome: " . $rows["nome"]. ",CPF: " . $rows["cpf"]. "<br>";
            }
            } else {
                echo "0 results";
            }
    }

    public function ExcluirVeiculo(int $id)
    {
        $conexao = Conexao::Conectar();
        $sql =  "DELETE from veiculo where cod = $id";
        $conexao->query($sql);
        echo $conexao->error;
    }
}

?>