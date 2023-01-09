<?php
session_name("Sesion_de_prueba");
session_start();

echo "El saludo ahora es: ".$_SESSION["saludo"];
?>
