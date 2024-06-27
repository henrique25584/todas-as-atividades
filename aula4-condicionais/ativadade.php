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
        nome : <input type="text" name="nome"></br>
        idade : <input type="text" name="idade">
        <input type="submit" value="verificar">
        
        
    </form>
</body>
</html>

<?php
 $nome =$_GET['nome'];
 $idade = $_GET['idade'];
echo"{$idade}";
echo"{$nome}";


if($idade >=18){
   echo " o nome e {$nome} e {$idade } e maior de idade";
}else{
   echo"a idade {$idade} e menor e idade";
}

?>