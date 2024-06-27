<?php 
//3. A prefeitura de uma cidade fez uma pesquisa entre os seus habitantes, coletando dados sobre o salário e número de filhos. Faça um procedimento que leia esses dados para um número não determinado de pessoas e retorne a média de salário da população, a média do número de filhos, o maior salário e o percentual de pessoas com salário até R$350,00.


$dados=[
    ['salario' =>2000,'filhos'=>1],
    ['salario' =>1000,'filhos'=>3],
    ['salario' =>3500,'filhos'=>2],
    ['salario' =>4000,'filhos'=>3],
    ['salario' =>6000,'filhos'=>6],
    ['salario' =>7000,'filhos'=>5], 
    ['salario' =>9000,'filhos'=>4],

    
];
//funcoes

 function estatistica($dados){
    $somasalario=0;
    $somafilhos=0;
    $totalpessoas= count($dados);
    $maiorsalario=0;
    $salarioAte350=0;
    
    foreach($dados as $p){
        $salarios=$p['salarios'];
          $filhos =$p['filhos'];

          $somasalario += $salarios;
        $filhos += $filhos;
          
        if($salarios > $maiorsalario){
            $maiorsalario = $salarios;
        }
        if($salarios <=350){
           $salarioAte350++;
        }
    }
    $mediasalario = $somasalario/$totalpessoas;
    $mediafilhos = $somafilhos/$totalpessoas;
    $porcentagemsalario350 = ($salarioAte350/$totalpessoas)*100;

    
    echo"media do salario da populaçao:".number_format($mediasalario,2)."\n";
    echo"mario do salario da populaçao:".number_format($maiorsalario,2)."\n";
    echo"mario numero filhos:".number_format($mediafilhos)."\n";
    echo"porcentagem de pessoas com salario ate R$350:".number_format($porcentagemsalario350)."%";
    
 }
 //chamar a funçao
 estatistica($dados);
?>