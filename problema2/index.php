<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> EXERCICI COOKIES</h1>


    <h3>Gestionar cookies</h3>

    <?php
    /*
            RA3.5 - MÈTODE GET (2 punt)
            DESC: 
            Passar a través del metode GET una variable 'estat' a la pàgina gestionar.php
            L'enllaç 'Acceptar cookie' el valor de la variable 'estat' serà 'ok'
            L'enllaç 'Denegar cookies' el valor de la variable 'estat' serà 'denny'
        */
    $estat = "estat";
    ?>

    <a href="gestionar.php?<?php echo $estat ?>=ok"> Acceptar cookie</a>
    <a href="gestionar.php?<?php echo $estat ?>=deny"> Denegar cookies</a>

    <h3> Valor actual de les cookies </h3>

    <br>
    <br>
    <?php

    // Compramos que exista la cookie
    $cookie = isset($_COOKIE["name"]) ? $_COOKIE["name"] : null;
    // Si existe mostramos este mensaje
    if ($cookie) {
        echo "El valor de la cookie és : $cookie";
    }
    // Si no existe mostramos este otro 
    else {
        echo "No hi ha valor per a la cookie";
    }

    ?>


</body>

</html>