<?php

# 1. Creare la funzione che determina la lunghezza di una stringa.

$stringa = "stringa";
// echo strlen($stringa);

function lunghezzaStr($stringa){
    $lunghezza = strlen($stringa);
    return $lunghezza;
}

$lunghezza = strlen($stringa);
// echo "La lunghezza della stringa è: $lunghezza";

# 1_2.  Prendere poi due stringhe e determinare la più lunga.


function lungStr($string){
    return strlen($string);
}

function confrontoStr($str1, $str2){
    $lunghezza1 = lungStr($str1);
    $lunghezza2 = lungStr($str2);

    if($lunghezza1 > $lunghezza2){
       return $str1;
    }elseif($lunghezza2 > $lunghezza1){
       return $str2;
    }else{
        return "Le stringhe hanno la stessa lunghezza.";
    }
}

$str1 = " 1. Sono una stringa..";
$str2 = "2. Anche io, lo sono. ";

$lungaStr = confrontoStr($str1, $str2);
echo "La stringa più lunga è:  $lungaStr";





?>