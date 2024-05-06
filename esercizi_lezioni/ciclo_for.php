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
echo "La stringa più lunga è:  $lungaStr" . "\n";

# 2_1. Creare la funzione che serve a trasformare in maiuscolo in PHP. 
 
// strtolower() -> minuscolo
// strtoupper() -> maiuscolo 

//   ! prima soluzione con la funzione 

function maiuscolo($stringa){
    $str_maiuscola = strtoupper($stringa);
    return $str_maiuscola;
}

$stringa = "ciao sono una stringa" . "\n"; 
$conversione = maiuscolo($stringa);
echo $conversione;

// ! seconda soluzione 
# 2_2. Dopo assegnare un valore ad una stringa, trasformala in maiuscolo e visualizarla.
$frase = "sono una stringa trasformata" . "\n";
echo strtoupper($frase);

#3. Cercare la funzione che consente di sostituire parti di stringa in PHP. Dunque scrivete un programma che sostituisce una parte di una stringa con un'altra e poi stampa il risultato. 

$frase = "La mela è rossa";
echo str_replace("mela", "fragola", $frase);

function modifica($strmod){
    $cambio = str_replace($strmod);
    return $cambio;
}

$strmod = "La mela è rossa";
$cambio_strmod = str_replace("mela", "fragola", $strmod);
echo $cambio_strmod;




?>