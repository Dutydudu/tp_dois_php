<?php
include_once "ex_cinco_automovel.class.php";

$Carro = new Automovel;

$Carro->set_marca($_POST["marca"]);
$Carro->set_cor($_POST["cor"]);
$Carro->set_modelo($_POST["modelo"]);
$Carro->set_preco($_POST["preco"]);

echo nl2br ("Marca: ".$Carro->get_marca()."\n");
echo nl2br ("Cor: ".$Carro->get_cor()."\n");
echo nl2br ("Modelo: ".$Carro->get_modelo()."\n");
echo nl2br ("Preco: ".$Carro->get_preco()."\n");
?>