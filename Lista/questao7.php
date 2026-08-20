<?php

$numero = 20;

while($numero >= 0){
    if($numero % 5 == 0){
        echo "$numero é multiplo de 5 \n";
    }else{
        echo "$numero \n";
    }
    $numero--;
}
echo "contagem encerrada!";

?>