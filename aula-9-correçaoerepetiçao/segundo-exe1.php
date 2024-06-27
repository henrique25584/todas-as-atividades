<?php

function triangulo($x,$y,$z){
    if(($x + $y > $z) && ($x + $z > $y) && ($z + $y >$x)){
        if($x== $y && $y ==$z){
        echo"Equilataro";
        }else if ($x == $y || $x== $z || $y == $z){
            echo"Isosceles";
        }else{
            echo"Escaleno";
        }
    }else{
        echo"nao e triangulo";
    }
 
}

$x=10;
$y=20;
$Z=30;

triangulo($x,$y,$z);

?>