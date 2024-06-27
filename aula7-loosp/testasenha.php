<?php 


$senha = $_POST['senha'];
$login = $_POST['login'];

 echo "{$senha}";
 echo"{$login}";


 while (($senha !==123) && ($login  !=="asrielhpp")) {
    header('location: login.php');

 }
  echo " welcome to system cow";

?>