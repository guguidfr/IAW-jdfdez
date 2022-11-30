

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Tomo variables de sesión

echo "El nombre es " . $_SESSION["nombre"]. "<br>";
echo "El color es " . $_SESSION["favcolor"] . ".<br>";
echo "El animal es " . $_SESSION["favanimal"] . ".";
?>
</body>
</html>

