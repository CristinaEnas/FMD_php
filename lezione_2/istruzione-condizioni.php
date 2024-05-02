<?php 
// Verificare se un  numero è positivo o negativo o nullo


// IF
$numero = 5;


// if annidato
if ($numero > 0) {
    echo "il numero è positivo \n";
} else {
    echo "il numero non è positivo \n";
    if($numero == 0) {
        echo "il numero è nullo \n";
    }else{
        echo "il numero è negativo \n";
    }
} 


if($numero > 0){
    echo "il numero è positivo \n";
} elseif($numero == 0) {
    echo "il numero è nullo \n";
} else {
    echo "il numero è negativo \n";
}



// Verificare se un numero è pari o dispari %

$number = 9;
// numero pari == 0
if($number % 2 == 0) {
    echo "il numero è pari \n";
}else{
    echo "il numero è dispari \n";
}

// numero dispari != 0
if($number % 2 != 0) {
    echo "il numero è dispari \n";
}else{
    echo "il numero è pari \n";
}

?>