<?php
// !? 1.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // recupero i dati
    // var_dump($_SERVER);
if(isset($_POST['b']) && isset($_POST['h'])){
    $base = $_POST['b'];
    $altezza = $_POST['h'];

    $area = $base * $altezza;
    echo $area;

}else{
    echo "non hai inserito niente. ";
}

   

}