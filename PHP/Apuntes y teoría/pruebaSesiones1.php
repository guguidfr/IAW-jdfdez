<?php
session_name("Sesion_de_prueba"); // El nombre de la sesión no puede contener espacios en blanco
session_start();


$_SESSION["saludo"] = "patata";
session_destroy();
session_unset();

echo "El saludo es: ".$_SESSION["saludo"];
?>
