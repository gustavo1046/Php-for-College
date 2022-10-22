<?php
class cliente {
    private string $nome;
    private int $cpf;

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