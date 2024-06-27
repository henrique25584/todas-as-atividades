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
    tempodetrabalho <input type="" name="digite seu tempo de trebalho">
    idade <input type="" name="digite sua idade ">
   <input type="submit" value="verifique">
    </form>
</body>
</html>

<?php
$tempodetrabalho =$_GET["tempodetrabalho"];
$idade =$_GET["idade"];



if(($tempodetrabalho>=30)||($idade>=65)||($idade=60 +$tempodetrabalho>=25)){
    
    echo"pode aprosentar";
}else{
    echo"nao pode ser aposentar";
}

?>