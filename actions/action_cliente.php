<?php
require_once __DIR__ . "/../data/conexao.php";
require_once __DIR__ . "/../classes/cliente.php";
class action_cliente
{
    public function CadastrarCliente(cliente $cliente)
    {
        $conexao = Conexao::Conectar();
        $sql =  "INSERT INTO cliente (nome, cpf) VALUES ('".$cliente->getNome()."', ".$cliente->getCpf().")";
        $conexao->query($sql);
        echo $conexao->error;
    }

    public function ListaClientes(){
        $conexao = Conexao::Conectar();
        $sql =  "select cod, nome, cpf from cliente";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($rows = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$rows["nome"]."</td><td>".$rows["cpf"]."</td>";
                echo "<td td colspan= ''><a href='intermediary/intermediario_cliente.php?id=".$rows["cod"]."&op=1'>Editar</a></td>"; #esses dois botoes que precisam funcionar, e tambem tem que implementar a msma cosia pros carros
                echo "<td td colspan= ''><a href='intermediary/intermediario_cliente.php?id=".$rows["cod"]."&op=2'>Delete</a></td>"; #esse aqui é o outro
                echo "</tr>";
            }
            } else {
                echo "0 results";
            }
    }

    public function ListaClientesAluguel(){
        $conexao = Conexao::Conectar();
        $sql =  "select cod, nome, cpf from cliente";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($rows = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$rows["cod"]."</td><td>".$rows["nome"]."</td><td>".$rows["cpf"]."</td>";
                echo "</tr>";
                #echo "id: " . $rows["id"]. " - Nome: " . $rows["nome"]. ",CPF: " . $rows["cpf"]. "<br>";
            }
            } else {
                echo "0 results";
            }
    }

    public function EditaCliente(string $nome, int $cpf, int $id){
        $conexao = Conexao::Conectar();
        $sql =  "UPDATE cliente set nome = '$nome', cpf= $cpf where cod=$id;";
        $conexao->query($sql);
    }

    public function ExcluirCliente(int $id)
    {
        $conexao = Conexao::Conectar();
        $sql =  "DELETE from cliente where cod = $id";
        $conexao->query($sql);
        echo $conexao->error;
    }

    public function GetClienteById(int $id){
        $conexao = Conexao::Conectar();
        $sql =  "select cod, nome, cpf from cliente where cod = '$id'";
        $result = $conexao->query($sql);

        if ($result->num_rows == 1) {
            while($rows = mysqli_fetch_assoc($result)) {
                return array('cod'=>$rows["cod"], 'nome'=>$rows["nome"],'cpf'=>$rows["cpf"]);
            }
        }
        else {
            return array();
        }
    }

}
