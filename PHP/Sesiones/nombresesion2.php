<?php
session_name("nombresesion2");
session_start();

$_SESSION["nombre"] = "John Macullom";
print "<p>El nombre es $_SESSION[nombre]</p>";
