<?php 

 function calcularImc($peso , $altura){
  
      $imc =$peso/(pow($altura,2));
      return $imc;

 }
 function situaçao($imc){
    if($imc < 16){
      echo " o imc e : {$imc} .situaçao:baixo peso";
    }else if ($imc >16 && $imc <=25){
        echo" o imc e : {$imc} .situaçao:saudavel";
    }else if($imc >25 && $imc <29){
        echo" o imc e : {$imc} .situaçao:sobrepeso";
    }else{
        echo" o imc e : {$imc} .situaçao:obeso";
    }


 }
// pegando as informaçoes do formulario
$peso=$_GET['peso'];
$altura=$_GET['$altura'];

 
 $imc = calcularImc(15,1.70);
 situaçao($imc);


?>