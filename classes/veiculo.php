<?php
class veiculo {
    private string $modelo;
    private int $ano;

    public function __construct(string $modelo, int $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getAno(){
        return $this->ano;
    }
}
?>