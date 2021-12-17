<?php

// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà 
// contenere lo stesso numero più di una volta

    $containerNumber = [];

    while (count($containerNumber)+ 1 <= 15) {
        
        $num = rand(1, 100);

        if (in_array($num, $containerNumber) == false) {
            
            $containerNumber[] = $num;

        }
    }

    for ($i=0; $i < count($containerNumber) ; $i++) { 
       
        echo 'Valore numero generato: ' .$containerNumber[$i];
        echo '<br>';
    }
?>