<?php
class Padaria {
	private $nome;
	private $rua;
	private $numero;
	private $bairro;
	private $estado;
    private $paes;
    private $bolos;
	private $qtd_produtos;

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
	
	public function set_paes($paes) {
		$this->paes = $paes;
	}
	public function get_paes() {
		return $this->paes;
	}

    public function set_bolos($bolos) {
		$this->bolos = $bolos;
	}
	public function get_bolos() {
		return $this->bolos;
	}

    public function set_qtd_produtos($qtd_produtos) {
		$this->qtd_produtos = $qtd_produtos;
	}
	public function get_qtd_produtos() {
		return $this->qtd_produtos;
	}


}
?>