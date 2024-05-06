<?php

#while
$prodotto = 1;
$i = 1;

while($i <= 10){
    // $prodotto *= $i;
    $prodotto = $prodotto * $i;
    $i++;
}
echo $prodotto . "\n";

#Array

$animali = ['cane', 'gatto', 'elefante', 'gufo'];

// print_r($animali);
// echo $animali[1];

$lunghezza_animali = count($animali);

echo $lunghezza_animali;
echo $animali[$lunghezza_animali - 1];

$animali[] = "leone";

var_dump($animali);


# piante 

$piante = ['rose', 'tulipano', 'orchidea'];

for($i = 0; $i < count($piante); $i++ ){

    echo $piante[$i] . "\n";
}








?>