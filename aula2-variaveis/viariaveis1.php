<?php
//declaracao de variaveis
$nome = "pedro";
$numeros;
$salario = 1000.50;
$numeros=array(1,2,"3","texto" ) ;
$teste=false;

//implesao com interpolacao
echo "o nome e: {$nome} e o salario e:{$salario}";
//impressao com concatrenaçao
echo"\nnome:".$nome. " e o salario " .$salario. "\n";
//impressao com var_dump()
var_dump("$numeros");
print_r ($nome);
var_dump($teste=false);
?>