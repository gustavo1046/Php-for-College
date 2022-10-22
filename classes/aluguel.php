<?php
class aluguel {
    private float $valor;
    private int $ativo;
    private string $dat_aluguel;
    private int $id_carro;
    private int $id_cliente;

    public function __construct(float $valor, int $ativo, string $dat_aluguel, int $id_carro, int $id_cliente) {
        $this->valor = $valor;
        $this->ativo = $ativo;
        $this->dat_aluguel = $dat_aluguel;
        $this->id_carro = $id_carro;
        $this->id_cliente = $id_cliente;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function getDat_Aluguel(){
        return $this->dat_aluguel;
    }

    public function getId_carro(){
        return $this->id_carro;
    }

    public function getId_cliente(){
        return $this->id_cliente;
    }
}
?>