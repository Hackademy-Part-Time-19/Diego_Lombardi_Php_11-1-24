<?php

/*
    Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei 
    numeri pari contenuti all’interno dell’array
*/

$lista_num = [1,5,8,9,41,45,81,201,56,28,18,92,50,73];

$conta_num_pari = 0;
$somma_num_pari = 0;

foreach ($lista_num as $numero){

    if($numero % 2 == 0){

        $somma_num_pari += $numero;
        $conta_num_pari++;
        
    }
}

if ($conta_num_pari > 0) {

    echo "La somma dei numeri pari è: $somma_num_pari". "\n";
    $media = $somma_num_pari / $conta_num_pari;
    echo "La media dei numeri pari è: $media";
} else {

    echo "Non ci sono numeri pari nell' array.";
}

