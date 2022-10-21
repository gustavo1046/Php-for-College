<?php
require_once __DIR__ . "/../data/conexao.php";
require_once __DIR__ . "/../classes/aluguel.php";
class action_cliente
{
    public function CadastrarCliente(aluguel $aluguel)
    {
        $conexao = Conexao::Conectar();
        $sql =  "INSERT INTO aluguel (valor, dat_aluguel) VALUES ('$aluguel->valor', $aluguel->dat_aluguel)";
        $conexao->query($sql);
        echo $conexao->error;
    }

    public function ListaAlugueis(){
        $conexao = Conexao::Conectar();
        $sql =  "select cod, data, valor, ativo, carro, cliente from aluguel";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($rows = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$rows["data"]."</td><td>".$rows["valor"]."</td><td>".$rows["ativo"]."</td><td>".$rows["carro"]."</td><td>".$rows["cliente"]."</td><td>";
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


    // public function ListaAtividades(){
    //     $conexao = Conexao::Conectar();
    //     $sql =  "select * from tb_atividade";
    //     $atividades = $conexao->query($sql);
    //     while($dados = mysqli_fetch_assoc($atividades)){
    //         echo '<div class="card" id="card-menager">';
    //         echo '<div class="card-body">';
    //         echo '<h5 class="card-title">prova</h5>';
    //         echo '<hr>';
    //         echo '<p class="card-text">Valor: '.$dados["valor_atividade"].'</p>';
    //         echo '<p class="card-text">Status: '. $dados["status_atividade"].' </p>';
    //         echo '<p class="card-text">Data da Entrega: '.$dados["data_limite_entrega_atividade"].'</p>';
    //         echo '<p class="card-text">Descrição: '. $dados["descricao_atividade"].'</p>';
    //         echo '<input type="hidden" name="codigo" value="'.$dados["cod_atividade"].'">';
    //         echo '<div class="buttons">';
    //         echo '<a href="#" class="btn btn-primary" onclick="modal_edit('.$dados["cod_atividade"].')">Editar</a>';
    //         echo '<a href="#" class="btn btn-primary" onclick="modal_exc('.$dados["cod_atividade"].')">Excluir</a>
    //         </div>';
    //         echo '</div>';
    //         echo '</div>';
    //         echo '</div>';
    //     }
    // }
}
