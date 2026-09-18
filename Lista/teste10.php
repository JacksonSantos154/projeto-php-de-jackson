<?php
$a = 0;
$b = 1;

for($i = 1; $i <= 15; $i++){
    $proximo = $a + $b;
    $a = $b;
    $b = $proximo;
    echo "$a";
}


?>