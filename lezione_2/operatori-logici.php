<?php
$a = -10;
$b = -20;

if ($a > 0 && $b >0) {
    echo "i numeri sono entrambi positivi\n";
}else {
    echo "i numeri non sono entrambi positivi\n";
}

if ($a > 0 || $b > 0) {
    echo "almeno uno dei due è positivo\n";
} else {
    echo "i numeri sono entrambi negativi\n"; 
}

?>