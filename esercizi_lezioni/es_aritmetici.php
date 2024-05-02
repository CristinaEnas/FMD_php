<?php

// ESERCIZI ARITMETICI

# 1. Crea due variabili che rappresentano la base e l’altezza di un rettangolo. Calcola l'area del rettangolo ed il perimetro.

//variabili
$b = 10;
$h = 8;

//Calcolo area
$p = ($b + $h) * 2;

//Calcolo perimetro
$a = $b * $h;

//stampa
// echo "Il perimetro è: $p e l'area è: $a";


# 2. Assegna ad una variabile un importo in dollari, convertirlo in € e visualizzalo nella pagina. Supponiamo un tasso di cambio fisso.

//variabili
$imp_dollari = 33;
$tasso_cambio = 0.93;

//Conversione dollari in €
$cambio_euro = $imp_dollari * $tasso_cambio;

//stampa
echo "L'importo da camniare è: $imp_dollari"."$" . " il cambio in euro è: $cambio_euro"."€";


# 3. Crea una variabile che rappresenta il prezzo originale di un prodotto e un'altra variabile per lo sconto percentuale. Calcola il prezzo scontato e stampa il risultato.

//variabili
$prezzo = 13.90;
$sconto =20;

// calcolo percentuale e totale dello sconto in €.
$totprezzo = $prezzo - ($prezzo * ($sconto /100 ));
$totmon = $prezzo - $totprezzo;

// echo "Il totale da pagare è: $totprezzo"."€" . " lo sconto applicato è del: $sconto% " . "Che ammonta a: $totmon"."€";

?>