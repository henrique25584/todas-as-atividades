<?php
  // condicionais encadeadas
    $idade=30;

    if(($idade >=16 && $idade <18) || $idade >=70 ){
       echo "Volto facultativo";
    }else if($idade >= 18 && $idade < 70){
        echo"Volto obrigatorio";
    }else{
        echo "Nao vota";
    }






?>