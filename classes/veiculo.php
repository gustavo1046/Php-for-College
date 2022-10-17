<?php
class veiculo {
    public string $modelo;
    public int $ano;

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