<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $arrKeys = array_keys( $posts );


    for ($i=0; $i < count($arrKeys); $i++) {

        echo 'date: ' .$arrKeys[$i];
        echo '<br>';

        for ( $j=0; $j < count($posts[ $arrKeys[$i] ]); $j++ ) { 

            echo 'title: ' .$posts[ $arrKeys[$i] ] [$j]['title'];
            echo '<br>';

            echo 'author: ' .$posts[ $arrKeys[$i] ] [$j]['author'];
            echo '<br>';

            echo 'text: ' .$posts[ $arrKeys[$i] ] [$j]['text'];
            echo '<br>';
        }

        echo '<br>';

    };


?>