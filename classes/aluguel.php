<?php
class aluguel {
    public float $valor;
    public DateTime $dat_aluguel;

    public function __construct(float $valor, DateTime $dat_aluguel) {
        $this->valor = $valor;
        $this->dat_aluguel = $dat_aluguel;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getDataAluga(){
        return $this->dat_aluguel;
    }
}
?>