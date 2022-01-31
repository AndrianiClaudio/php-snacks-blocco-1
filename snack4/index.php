<?php
/*
CONSEGNA
========
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
========
*/
$array = [];
//n numeri da generare
$n = 13;
// minimo e massimo numeri generabili
$min = 0;
$max = 50;
//ricordarsi sempre che n deve essere maggiore o uguale a max
if($max >= $n - 1) {
    //generazione e push in array dei numeri casuali
    for ($i=0; $i < $n ; $i++) { 
        $num = rand($min,$max);
        while(in_array($num,$array)) {
            $num = rand($min,$max);
        }
        $array [] = $num;
    }
    asort($array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 1 - 4</title>
</head>
<body>
    <h1>Snack 4</h1>
    <ol>
        <?php
        foreach ($array as $num) {
        ?>
        <li>
            <span>
                <?php
                echo $num;
                ?>
            </span>
        </li>
        <?php
        }
        ?>
    </ol>
</body>
</html>