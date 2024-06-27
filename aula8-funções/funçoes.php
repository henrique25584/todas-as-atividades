<?php 
   
   //definiçao da funçao
   function soma($n1 , $n2){
    $res = $n1 + $n2;
    echo"\nsoma: {$res}";
   }
   //definiçao da funçao
   function sub($num1,$num2){
    $res=$num1-$num2;
    return$res;
   }
   function calcular ($n1,$n2){
    echo"...o resultado da soma:";
       soma($n1,$n2);
    $resSub =sub($n1,$n2);
    echo "\n subtraçao : {$resSub}";
   }











  //chamada da funçoes/invocaçao
  soma(20,10);
  soma(10,85);
  $retornofunçao=sub(10,2);

  echo "\n retorno: {$retornofunçao}";
 calcular(10,4);





 

?>