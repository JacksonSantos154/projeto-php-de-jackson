<?php
$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];
$maior = $numeros[0];
$menor = $numeros[0];
$posmaior = 0;
$posmenor = 0;

foreach($numeros as $posicao => $numero){

    if($numero > $maior){
        $maior = $numero;
        $posmaior = $posicao;
    }
    if($numero < $menor){
        $menor = $numero;
        $posmenor = $posicao;
    }

}
echo "O maior é $maior e a posição é $posmaior";
echo "\n O menor é $menor e a posição é $posmenor";


?>