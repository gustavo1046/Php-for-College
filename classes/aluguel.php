<?php
class aluguel {
    private float $valor;
    private DateTime $dat_aluguel;
    private int $id_carro;
    private int $id_cliente;

    public function __construct(float $valor, DateTime $dat_aluguel) {
        $this->valor = $valor;
        $this->dat_aluguel = $dat_aluguel;
    }

    public function getValor(){
        return $this->valor;
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