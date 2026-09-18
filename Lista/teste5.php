<?php

$numero = 7;

if($numero % 3 == 0 && $numero % 5 == 0){
    echo "$numero é divisivel por 3 e 5";
}elseif($numero % 3 == 0){
    echo "$numero é divisivel por 3";
}elseif($numero % 5 == 0){
    echo "$numero é divisivel por 5";
}else{
    echo "$numero não é divisivel nem por 3 e nem por 5";
}

?>