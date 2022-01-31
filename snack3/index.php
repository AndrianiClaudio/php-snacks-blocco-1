<?php
/*
CONSEGNA
========
Creare un array di array. 
Ogni array figlio avrà
    chiave: data (DD-MM-YYYY es 01-01-2007)
    valore: array di post associati alla data. 
Stampare ogni data con i relativi post.
========
*/
// ARRAY DI ARRAY CONTENTE TUTTI I POST
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 1 - 3</title>
</head>
<body>
    <h1>Snack 3</h1>
    <ul>
        <?php
        // STAMPA DEI POST
        // CICLIAMO SU TUTTO $POSTS
        foreach ($posts as $arrayPost) {
            foreach ($arrayPost as $post) {
        ?>
        <li>
            <?php
            foreach ($post as $key => $date) {
                echo $post[$key];
                echo '<br>';
            }
            echo '<br>';
            }
        }
            ?>
        </li>
    </ul>
</body>
</html>