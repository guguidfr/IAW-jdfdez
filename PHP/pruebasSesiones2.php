<?php
session_name("Otra_sesion");
session_start();

echo "El saludo es: ".$_SESSION["saludo"];
?>
