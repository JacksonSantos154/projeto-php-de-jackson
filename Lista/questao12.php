<?php
$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
$soma = 0;
$media = 0;
$aprovados = 0;
$reprovados = 0;
$maior = [0];
$menor = [0];

foreach($notas as $nota){
    $soma = $soma + $nota;
    if($nota >= 6){
        $aprovados++;

    }else{
        $reprovados++;
    }

}





?>