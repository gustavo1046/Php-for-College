<?php
class cliente {
    public string $nome;
    public int $cpf;

    public function __construct(string $nome, int $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }
}

?>