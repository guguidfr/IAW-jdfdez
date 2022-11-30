<?php
session_name("nombresesion1");
session_start();

$_SESSION["nombre"] = "Mi prima";
print "<p>El nombre del usuario es $_SESSION[nombre]</p>";
print "<p>El nombre de la sesion es " . session_name(). "</p>";

