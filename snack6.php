<?php

/* Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $arrName = [];
    $arrLastName = [];

    $arrKeys = array_keys( $db );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="display:flex;">

        <div style="background-color: gray; color: white; width: 300px; height: 300px; margin-right: 50px; padding: 50px;">
            <?php

                for ($i=0; $i < count( $db[$arrKeys[0]] ) ; $i++) { 
                    echo $db[$arrKeys[0]][$i]['name'];
                    echo ' ';
                    echo $db[$arrKeys[0]][$i]['lastname'];
                    echo '<br>';
                }

            ?>
        </div>

        <div style="background-color: green; color: white; width: 300px; height: 300px;  padding: 50px;">
            <?php

                for ($i=0; $i < count( $db[$arrKeys[1]] ) ; $i++) { 
                    echo $db[$arrKeys[1]][$i]['name'];
                    echo ' ';
                    echo $db[$arrKeys[1]][$i]['lastname'];
                    echo '<br>';
                }

            ?>
        </div>
    </div>
    
</body>
</html>