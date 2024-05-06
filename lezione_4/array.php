<?php
$nomi = ['pippo', 'pluto', 'paperino', 'paperina'];

$nomi_persone = array('Pippo', 'Pluto');

//! funzioni principali

// * in_array -> verifica se un elemento è presente nell'array. Se è presente restituisce TRUE altrimente FALSE.

$trovato = in_array('pluto', $nomi);
var_dump($trovato);

// * array_search -> verifica se un elemento è presente nell'Array. Se è presente restituisce il calore di index.

$found = array_search('pippo', $nomi);
echo $found;

var_dump($found);


// * array_reverse -> inverte l'array

$numeri = [1, 2, 3, 4, 5, 6, 7];

$numeri_invertito = array_reverse($numeri);

var_dump($numeri_invertito);

echo "\n";

// * array_unique -> toglie i duplicati

$numeri_1 = [1,2, 3, 3, 4, 5, 5, 0];

$numeri_unici = array_unique($numeri_1);

var_dump($numeri_unici);
print_r($numeri_unici);

// inserire solo da terminale


?>