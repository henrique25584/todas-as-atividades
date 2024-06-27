<?php
$estadocivil =$_GET["estadocivil"];
$nome =$_GET["nome"];
switch ($estadocivil) {
    case "1":
        $estadocivil= "solitario";
      break;
      case 2:
        $estadocivil= "casado";
    break;
    case 3:
        $estadocivil= "divorciado";
        break;
        case 4: 
    $estadocivil= "viuvo";
    break;
    case 5:
        $estadocivil= "unial estavel";
}
 echo " o estado civil do " .$nome." e ".$estadocivil;
?>