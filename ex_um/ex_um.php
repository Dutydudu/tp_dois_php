<?php
include_once 'ex_um.class.php';

$cond = new Condominio;

$cond->set_nome('Bougainville');
$cond->set_rua('Av. Padre Anchieta');
$cond->set_numero('253');
$cond->set_bairro('Jardim Casablanca');
$cond->set_estado('Sao Paulo');
$cond->set_torres('7');

echo nl2br($cond->get_nome().'<br>');
echo nl2br($cond->get_rua().'<br>');
echo nl2br($cond->get_numero().'<br>');
echo nl2br($cond->get_bairro().'<br>');
echo nl2br($cond->get_estado().'<br>');
echo nl2br($cond->get_torres().'<br>');
?>