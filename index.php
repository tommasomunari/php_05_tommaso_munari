<?php


// array con numeri
$numeri = [23, 56, 32, 97, 16, 4, 15, 22];

// varianti di appoggio
$counter = 0;
$totale = 0;


// foreach
foreach ($numeri as $numero) {
    if($numero % 2 == 0){
        $totale += $numero;
        $counter++;
    }
};

echo $totale / $counter;