<?php
$numero = 15;
if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo "$numero é múltiplo de 3 e 5 ao mesmo tempo.";
} elseif($numero % 3 == 0){
    echo "$numero é multiplo somente de 3";
}elseif($numero % 5 == 0){
    echo "$numero é multiplo somente de 5";
}else{
    echo "não é multiplo nem de 3 nem de 5";
}
?>