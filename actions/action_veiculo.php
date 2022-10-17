<?php
require_once __DIR__ . "/../data/conexao.php";
require_once __DIR__ . "/../classes/veiculo.php";
class action_veiculo
{
    public function CadastrarVeiculo(veiculo $veiculo)
    {
        $conexao = Conexao::Conectar();
        $sql =  "INSERT INTO veiculo (modelo, ano) VALUES ('$veiculo->modelo', $veiculo->ano)";
        $conexao->query($sql);
        echo $conexao->error;
    }
}

?>