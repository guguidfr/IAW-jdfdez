<?php
session_name("MiSesion");
session_start();
session_destroy();
?>
<h1>Se ha cerrado sesión</h1>
<p><a href="./login.html">Ir al login</a></p>