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
  nota1 <input type="text" name="nota1">
    nota2 <input type="text" name="nota2">
     nota3 <input type="text" name="nota3">
      <input type="submit" value="vereficar">
  </form>

</body>
</html>
      

<?php
$nota1=  $_GET["nota1"];
$nota2=  $_GET["nota2"];
$nota3=  $_GET["nota3"];
$media =($nota1*1)+($nota2*1)($nota3*2)/4;


if($media >=7){
echo"aprovado";

}else{
 echo"reprovado";    
}

?>