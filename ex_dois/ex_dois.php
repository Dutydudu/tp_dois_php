<?php
include_once 'ex_dois.class.php';

$pad = new Padaria;

$pad->set_nome('Padaria Tres Marias');
$pad->set_rua('Av. Brasil');
$pad->set_numero('168');
$pad->set_bairro('Pinheiros');
$pad->set_estado('Sao Paulo');
$pad->set_paes('pao frances, pao doce, pao de milho e pao de leite');
$pad->set_bolos('bolo de cenoura, bolo de fuba, bolo de laranja, bolo de chocolate');
$pad->set_qtd_produtos(45);

echo nl2br($pad->get_nome().'<br>');
echo nl2br($pad->get_rua().'<br>');
echo nl2br($pad->get_numero().'<br>');
echo nl2br($pad->get_bairro().'<br>');
echo nl2br($pad->get_estado().'<br>');
echo nl2br($pad->get_paes().'<br>');
echo nl2br($pad->get_bolos().'<br>');
echo nl2br($pad->get_qtd_produtos().'<br>');
?>