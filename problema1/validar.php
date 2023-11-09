<?php
// Creamos una sesion
session_start();
// Recuperamos los valores del formulario si existen le asignamos el valor del formulario sino un null
$user = isset($_POST["usuari"]) ? $_POST["usuari"] : null;
$edat = isset($_POST["edat"]) ? $_POST["edat"] : null;
$condicions = isset($_POST["active"]) ? true : false;

//controlem que s'hagi informat l'usuari.
if ($user) {
    // Incluimos el fichero variables.php
    include('variables.php');
    // Inicializamos la variable $usuariTrobat a false
    $usuariTrobat = false;
    // Recorremos el array $llistaUsusaris
    foreach ($llistaUsusaris as $usuari) {
        // Comprobamos si el usuario existe en el array
        if ($usuari == $user) {
            // Si existe cambiamos el valor de la variable $usuariTrobat a true
            $usuariTrobat = true;
        }
    }
    // Si el usuario existe en la lista de usuarios
    if ($usuariTrobat) {
        // Guardamos los valores en la sesion
        $_SESSION["login"] = true;
        $_SESSION["usuari"] = $user;
        $_SESSION["condicions"] = $condicions;
        // Redireccionamos a la pagina resultado.php
        header("Location: resultat.php?condicions=$condicions");
    } else {
        // Si el usuario no existe en la lista de usuarios
        // Destruimos la sesion
        session_destroy();
        //  Mostrar index.php
        include('index.html');
        // Mostramos un mensaje de "usuari no trobat"
        echo "Usuari no trobat";
    }
} else {
    /*
            Mostrar index.php i mostrar per pantalla "No has informat cap valor";
        */
    include('index.html');
    echo "No has informat cap valor";
}
