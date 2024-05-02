<?php

// Operatori logici

# 1. Assegna ad una variabile numero un valore e verifica se è compreso tra 50 e 100.

//variabili
$numero = 2;

//istruzione
if ($numero >= 50 && $numero <= 100){
    echo "Il valore $numero è compreso tra 50 e 100.";
}else{
    echo "Il valore inserito non è compreso tra 50 e 100.";
}
echo "\n";

# 2. Assegna ad una variabile anno un valore e verifica se è bisestile.

//variabile
$anno = 1991;

if($anno % 400 == 0){
    echo "1. L'anno è bisestile";
}elseif ($anno % 100 == 0) {
    echo "2. L'anno è bisestile";
}elseif ($anno %4 == 0){
    echo "3. L'anno è bisestile";
}else{
    echo "L'anno non è bisestile";
}

echo "\n";

# 3. Determina se una persona può guidare un'auto in base all'età e alla presenza di una patente.

// variabile
$eta = 19;
$patente = false; //impostato a true l'età coincide con il possesso della patente

// istruzione

if($eta >= 18 && $patente){
    echo "Hai i requisiti per guidare";
}elseif ($eta >= 18 && !$patente ){
    echo "Hai l'età giusta per guidare ma non hai la patente";
}else {
    echo "Non possiedi i requisiti per poter guidare.";
}

?>