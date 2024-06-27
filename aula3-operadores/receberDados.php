<?php
//receber dados do formulario
$nome = $_POST["nome"];
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

$soma = $numero1 + $numero2;

echo"ola {$nome}";
echo "<br>o resultado da operaçao e".$soma;

?>