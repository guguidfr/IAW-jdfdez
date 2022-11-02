
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  


<h2>Validación de formulario PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="nombre">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Web: <input type="text" name="website">
  <br><br>
  Comentario: <textarea name="comentario" rows="5" cols="40"></textarea>
  <br><br>
  Género:
  <input type="radio" name="genero" value="femenino">Femenino
  <input type="radio" name="genero" value="masculino">Masculino
  <input type="radio" name="genero" value="otro">Otro
  <br><br>
 Número de mes: <input type="text" name="mes">
 <br></br>
Número de día de la semana: <input type="text" name="dia"> 
  <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>

<?php

function test_input($datos){
  $datos=trim($datos);
  $datos=stripslashes($datos);
  $datos=htmlspecialchars($datos);
  return $datos;
}

$dia[0] = "lunes";
$dia[1] = "martes";
$dia[2] = "miercoles";
$dia[3] = "jueves";
$dia[4] = "viernes";
$dia[5] = "sabado";
$dia[6] = "domingo";

$mes=array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
echo "<h2>Datos respuesta:</h2>";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
}
echo "Nombre: ". test_input($_POST["nombre"]);
echo "<br>";
echo "Email: ".test_input($_POST["email"]);
echo "<br>";
echo "Web: ".test_input($_POST["website"]);
echo "<br>";
echo "Comentario: ".test_input($_POST["comentario"]);
echo "<br>";
echo "Género: ".test_input($_POST["genero"]);
echo "<br>";
echo "Mes del año: ".test_input($mes[$_POST["mes"]-1]);
echo "<br>";
echo "Día de la semana:".test_input($dia[$_POST["dia"]-1]);
?>

</body>
</html>
