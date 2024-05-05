<?php
//! -- Ciclo For -- //
// Il FOR si utilizza quando sappiamo il numero esatto di valutazioni 
/* for(inizializzazione; condizione; iterazione){
    #istruzione;
}*/

// $i = index -> non cambiare mai !!
# Inizializzazione: si inserisce una variabile che parte da zero $i = 0 (Array);
# Condizione : quando il ciclo si deve fermare;
# Iterazione: stabilita quando deve incrementare o decrementare;

//Stampiamo i numeri da 0 a 9.

for($i = 0; $i < 10; $i++){
    echo $i . " ";
    // echo $i . "\n"; andare a capo 
} //0123456789

echo "\n";

// stamapare i numeri da 10 a 1 

for($i = 10; $i > 0 ;$i--){
    echo $i . " ";
}
echo "\n";

// stampare i numeri pari!

for($i = 0; $i <= 10; $i += 2){
    echo $i . " ";
}

echo "\n";

//! -- CICLO WHILE --
// Il while si utilizza quando: ;
# inizializzazione
$i = 0; 

// ciclo

while($i < 10){
    echo $i . " ";
    $i++;
}

echo "\n";

//! -- ARRAY -- // 
# Struttura dati
// Memorizzano dati diversi tra loro

// Leggere un Array 

$numeri = [8, 13, 6, 88, 29, 11,"4"]; //! Array di numeri

echo $numeri[1]; // Stampa l'indice richiesto 
echo $numeri[count($numeri) - 1] . "\n"; // stampa l'ultimo elemento

// var_dump($numeri); // stampa il tipo di dato 
// print_r($numeri); // stampa con l'indice

$lunghezza = count($numeri); //! count() funzione per calcolare la lunghezza
echo $lunghezza; // 3

for($i = 0; $i < count($numeri); $i++){
    echo "indice: $i, elemento: $numeri[$i] " . "\n";
}

// Inserimento

$frutta = []; // inizializzazione ARRAY VUOTO!


$frutta[] = "Mela";
$frutta[] = "Arancia";
var_dump($frutta);
print_r($frutta);
?>