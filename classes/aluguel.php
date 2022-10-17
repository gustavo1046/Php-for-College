<?php
class aluguel {
    public decimal $valor;
    public date $dat_aluguel;

    public function __construct(decimal $valor, date $dat_aluguel) {
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