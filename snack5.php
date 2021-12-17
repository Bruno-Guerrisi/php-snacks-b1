<?php

/* Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */


    $paragraph = 'Rocco è andato a fare la speso. Il negozio era chiuso. Rocco è tornato a casa triste';

    $arrParagraph = explode('.', $paragraph );

    echo 'Frase iniziale: ' .$paragraph;
    echo '<br>';

    for ($i=0; $i < count($arrParagraph) ; $i++) { 
       
        echo 'Frase ' .($i + 1) .' : ' .$arrParagraph[$i];
        echo '<br>';
    }
?>