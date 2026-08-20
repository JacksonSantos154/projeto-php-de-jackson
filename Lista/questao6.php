<?php

$a = 10;
$b = 15;
$c = 20;

if($a >= $b && $a >= $c){
    echo "$a é o maior numero";
}elseif($b >= $a && $b >= $c){
    echo "$b é o maior numero";
}else{
    echo "$c é o maior numero";
}

?>