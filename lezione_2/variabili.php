<?php
// variabile 
$nome = "Paperina";
$eta = 30;

// funzione pura
// echo $nome;


//funzione var_dump() accetta un argomento o più di un argomento separato dalla , . 
// aiuta a gestire gli errori

var_dump($nome); // sting(8) -> dati stringa 8 caratteri
var_dump($eta); // int(30) //float(30.5) -> numero con la , . I numeri se messi tra "" lo riporta come stringa

// Operatori Aritmetici

$num1 = 10;
$num2 = 20; //con le "20" fa casting implicito, converte la stringa in intero 

$somma = $num1 + $num2;
echo " La somma è:  $somma\n";

$differenza = $num2 - $num1;

echo "La differenza è : $differenza\n";

$prodotto = $num1 * $num2;

echo "Il prodotto è : $prodotto \n";

$divisione = $num2 / $num2;

echo "Il risultato della divisione è: $divisione\n";

$resto = $num1 % 2; // operatore modulo resto della divisione

echo "Il resto è: $resto\n";

$potenza = $num2 ** 2;
echo "La potenza è: $potenza\n";

// data del giorno
echo "Oggi è il " .date("d/m/Y") . " e sono le ore " .date("H:i:s") . "\n";


?>