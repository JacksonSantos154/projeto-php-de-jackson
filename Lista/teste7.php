<?php
$numero = 20;

while($numero >= 0){
    if($numero % 5 == 0 && $numero!= 0){
        echo "$numero é divisivel por 5 \n";
    }else{
        echo "$numero \n";
    }
    $numero--;
}




?>