<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió cookies</title>
</head>

<body>

    <h1>Gestió de les cookies</h1>

    <?php

    /*
        RA3.6 - RECUPERAR INFORMACIÓ GET (1 punt)
        DESC: Obtenir la variable "estat" pel mètode GET
    */

    $estat = isset($_GET["estat"]) ? $_GET["estat"] : null;
    // Establecer una cookie que expirará en 2 minutos

    if ($estat === "ok") {
        setcookie("name", "Jostin", time()  + 120);
    }
    if ($estat === "deny") {
        //Eliminar la cookie "name"
        setcookie("name", " ", time() - 5000);
        echo "La cookie s'ha eliminat";
    }
    ?>
    <br>
    <br>
    <a href="index.php">tornar</a>

</body>

</html>