<?php 

// Istruzioni condizionali
# 1. Calcola il massimo fra due numeri.

//variabili
$n1 = 4;
$n2 = 6;

// istruzioni

if($n1 > $n2){
    $max = $n1;
}else{
    $max = $n2;
}

// echo "Il massimo tra $n1 e $n2 è: $max.";


# 2. Convertire una valutazione numerica in una lettera corrispondente (Es. se 10 scrivi A, ecc.).

// variabile
$voto = 4;

// istruzione

if ($voto >= 0 && $voto <= 5){
    echo "Il voto è: F";
}elseif ($voto >= 6 && $voto <= 7 ){
    echo "Il voto è: D";
}elseif($voto >=7 && $voto <= 8){
    echo "Il voto è: C";
}elseif($voto >=8 && $voto <= 9){
    echo "Il voto è: B";
}else{
    echo "Il voto è: A";
}

# 3. Verifica se un numero è multiplo di 3.

//variabile
$number = 27;

//istruzione
if($number % 3 == 0){ 
    echo "Il numero: $number " . " è un multiplo di 3";
}else{
    echo "Il numero: $number " . " non è un multiplo di 3";
}

# 4. Calcola il massimo fra tre numeri.

//variabile
$a = 1222;
$b = 55;
$c = 14;

// Istruzione

if ($a > $b && $a > $c){
    echo "Il valore massimo è: $a ";
}elseif ($b > $a && $b > $c){
    echo "Il valore massimo è: $b";
}else {
    echo "Il valore massimo è: $c";
}


?>