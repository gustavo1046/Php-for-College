<?php
require_once __DIR__ . "/../data/conexao.php";
require_once __DIR__ . "/../classes/cliente.php";
class action_cliente
{
    public function CadastrarCliente(cliente $cliente)
    {
        $conexao = Conexao::Conectar();
        $sql =  "INSERT INTO cliente (nome, cpf) VALUES ('$cliente->nome', $cliente->cpf)";
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
                echo "<td><a href='clienteedit.php?id=".$rows["id"]."'>Edit</a></td>";
                echo "<td><a href='clientedelete.php?id=".$rows["id"]."'>Delete</a></td>";
                echo "</tr>";
                #echo "id: " . $rows["id"]. " - Nome: " . $rows["nome"]. ",CPF: " . $rows["cpf"]. "<br>";
            }
            } else {
                echo "0 results";
            }
    }

    // public function EditarAtividade(Atividade $atividade, int $id)
    // {
    //     $conexao = Conexao::Conectar();
    //     $sql =  "UPDATE tb_atividade set cod_oferta_disciplina_atividade=$atividade->cod_oferta_disciplina_atividade, data_limite_entrega_atividade = '$atividade->data_limite_entrega_atividade',  tipo_atividade='$atividade->tipo_atividade', descricao_atividade = '$atividade->descricao_atividade', valor_atividade = '$atividade->valor_atividade',  status_atividade = '$atividade->status_atividade' where cod_atividade= $id";
    //     $conexao->query($sql);
    //     echo $conexao->error;
    // }

    // public function ExcluirAtividade(int $id)
    // {
    //     $conexao = Conexao::Conectar();
    //     $sql =  "DELETE from tb_atividade where cod_atividade = $id";
    //     $conexao->query($sql);
    //     echo $conexao->error;
    // }


}
