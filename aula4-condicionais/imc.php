<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    nome <input type="text" nome"">
    peso <input type="text" peso"">
    altura <input type="text" altura"">
    <input type="submit" value="vereficar">
    </form>
</body>
</html>
<?php

$nome = $_GET["nome"];
echo "(nome)";
$peso = $_GET["peso"];
echo "(peso)";
$altura = $_GET["altura"];
echo "(altura)";
$imc  =$peso / ($altura * $altura);
$resultado=" o resutaldo do seu IMC e $imc, isso quer dizer que voce esta";


if($imc<18.5){
    echo"voce esta magro";  
} else if ($imc <= 25 || $imc >= 18.5) {
    echo"peso normal";
}else if ($imc <=30 || $imc >=25) {
    echo "sobrepeso";
}else if ($imc <=35 || $imc >=30) {
    echo "obesidade grau 1";
}else if ($imc <=40 || $imc >= 35) {
    echo "obesidade grau 2";
} else if($imc <=40){
    echo "obesidade garu 3";
}

?>