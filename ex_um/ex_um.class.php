<?php

class Condominio {
	private $nome;
	private $rua;
	private $numero;
	private $bairro;
	private $estado;
	private $qtd_torres;

	public function set_nome($nome) {
		$this->nome = $nome;
	}
	public function get_nome() {
		return $this->nome;
	}

	public function set_numero($numero) {
		$this->numero = $numero;
	}
	public function get_numero() {
		return $this->numero;
	}

	public function set_rua($rua) {
		$this->rua = $rua;
	}
	public function get_rua() {
		return $this->rua;
	}

	public function set_bairro($bairro) {
		$this->bairro = $bairro;
	}
	public function get_bairro() {
		return $this->bairro;
	}

	public function set_estado($estado) {
		$this->estado = $estado;
	}
	public function get_estado() {
		return $this->estado;
	}
	
	public function set_torres($torres) {
		$this->torres = $torres;
	}
	public function get_torres() {
		return $this->torres;
	}

}
?>