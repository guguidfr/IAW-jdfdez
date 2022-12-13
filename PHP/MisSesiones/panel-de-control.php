<?php
    session_name("MiSesion");
    session_start();
    $_SESSION["usuario"] = $_POST["nombrelocal"]
?>
<h1>Se ha creado la sesión</h1>
<p>Has iniciado sesión como <b><?php echo $_SESSION["usuario"];?></b></p>
<br>
<p><a href="./login.html">Ir a la página principal</a></p>
<br>
<p><a href="./cerrar-sesion.php">Cerrar sesión</a></p>