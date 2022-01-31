<?php
/*
CONSEGNA
========
Passare come parametri GET
    name, mail e age
verificare
    name sia più lungo di 3 caratteri
    mail contenga un punto e una chiocciola
    age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
========
*/
// VARIABILI ACQUISITE TRAMITE GET (name,mail,age)
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
// MESSAGGIO STAMPA, default: "Accesso negato"
$message = "Accesso negato";
// VERIFICA NAME: lunghezza > 3 caratteri 
if(strlen($name) > 3) {
    // VERIFICA MAIL: include . e @ nella stringa
    if(strpos($mail,'.') !== false && strpos($mail,'@') !== false) {
        // VERIFICA AGE: numero!!!
        if(is_numeric($age) !== false) {
            $message = "Accesso riuscito";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack Blocco 1</title>
</head>
<body>
    <h1>Snack 2</h1>
    <strong>
        <?=
        $message
        ?>
    </strong>
</body>
</html>