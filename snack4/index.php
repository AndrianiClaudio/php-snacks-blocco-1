<?php
/*
CONSEGNA
========
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
========
*/
$array = [];
//n numeri da generare
$n = 15;
// minimo e massimo numeri generabili
$min = 0;
$max = 50;
for ($i=0; $i < $n ; $i++) { 
    echo '<div>',rand($min,$max),'</div>';
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
</body>
</html>