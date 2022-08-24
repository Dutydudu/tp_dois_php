<?php

class DadosBancarios {
    private $banco;
    private $conta;
    private $nome;

    function __construct($banco, $conta, $nome) {
        $this->banco = $banco;
        $this->nome = $nome;
        $this->conta = $conta;
    }

    public function get_banco() {
        return $this->banco;
    }
    public function get_conta() {
        return $this->conta;
    }
    public function get_nome() {
        return $this->nome;
    }
}

?>