<?php
include_once 'ex_quatro_pessoa.class.php';
include_once 'ex_quatro_banco.class.php';

$Willian = new Pessoa(123, 'Sr. Willian', 1.78, 53, '12/10/1965', 'Ensino Superior Completo', 4500);

$Banco = new DadosBancarios('Bradesco', 5555555, 'Sr. Willian');

echo nl2br ("Codigo:"."\t".$Willian->get_codigo()."\n");
echo nl2br ("Nome:"."\t".$Willian->get_nome()."\n");
echo nl2br ("Altura:"."\t".$Willian->get_altura()."\n");
echo nl2br ("Idade:"."\t".$Willian->get_idade()."\n");
echo nl2br ("Nascimento:"."\t".$Willian->get_nascimento()."\n");
echo nl2br ("Escolaridade:"."\t".$Willian->get_escolaridade()."\n");
echo nl2br ("Salario:"."\t".$Willian->get_salario()."\n");

echo nl2br ("\nDados Bancarios:\n");
echo nl2br ("Banco:"."\t".$Banco->get_banco()."\n");
echo nl2br ("Conta:"."\t".$Banco->get_conta()."\n");
echo nl2br ("Nome do Titular:"."\t".$Banco->get_nome()."\n");
?>