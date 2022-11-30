 <?php
// Abrimos la sesión
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["nombre"] = "Daniel";
$_SESSION["favcolor"] = "rojo";
$_SESSION["favanimal"] = "perro";
echo "Variables de sesión guardadas.";
?>

</body>
</html> 
