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
// otteniamo name,mail,age tramite GET
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
// STAMPA TEST RICEZIONE DATI CORRETTA
// echo 'name<br>';
// var_dump($name);
// echo '<br>mail<br>';
// var_dump($mail);
// echo '<br>age<br>';
// var_dump($age);
?>