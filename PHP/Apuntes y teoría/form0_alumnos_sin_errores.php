<!-- José Daniel Fernández López-->
<!DOCTYPE HTML>  
<html>
  <head>
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
<body>  

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = $monthErr = $dayErr = "";
$nombre = $email = $genero = $comentario = $mes = $dia = $website = "";
function test_input($datos){
  $datos=trim($datos);
  $datos=stripslashes($datos);
  $datos=htmlspecialchars($datos);
  return $datos;
}

$dias[0] = "lunes";
$dias[1] = "martes";
$dias[2] = "miercoles";
$dias[3] = "jueves";
$dias[4] = "viernes";
$dias[5] = "sabado";
$dias[6] = "domingo";

$meses=array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["nombre"])) {
    $nameErr = "El nombre es obligatorio";
  } else {
    $nombre = test_input($_POST["nombre"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "El email es obligatorio";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }
  if (empty($_POST["comentario"])) {
    $comentario = "";
  } else {
    $comentario = test_input($_POST["comentario"]);
  }
  if (empty($_POST["genero"])) {
    $genderErr = "El género es obligatorio";
  } else {
    $genero = test_input($_POST["genero"]);
  }
  if (empty([$_POST["mes"]])) {
    $monthErr = "El mes es obligatorio";
  } else {
    if (is_numeric(test_input($_POST["mes"]))) {
      if ((test_input($_POST["mes"]) > 0) && (test_input($_POST["mes"]) < 13)) {
        $mes = test_input($meses[$_POST["mes"]-1]);
      } else {
        $monthErr = "El número del mes debe de ser entre 1 y 12";
      }
    } else {
      $monthErr = "El mes debe de ser un número";
    }
  }
  if (empty($_POST["dia"])) {
    $dayErr = "El día es obligatorio";
  } else {
    if (is_numeric(test_input($_POST["dia"]))) {
      if ((test_input($_POST["dia"] > 0)) && (test_input($_POST["dia"]) < 8)) {
        $dia = test_input($dias[$_POST["dia"]-1]);
      } else {
        $dayErr = "El día debe de ser entre 1 y 7";
      }
    } else {
      $dayErr = "El día debe de ser un número";
    }
  }
  #echo "Mes del año: ".test_input($mes[$_POST["mes"]-1]);
  #echo "<br>";
  #echo "Día de la semana:".test_input($dia[$_POST["dia"]-1]);
}
?>

<h2>Validación de formulario PHP</h2>
<p><span class="error">* Campo requerido</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="nombre"><span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Web: <input type="text" name="website"><span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comentario: <textarea name="comentario" rows="5" cols="40"></textarea>
  <br><br>
  Género:
  <input type="radio" name="genero" value="femenino">Femenino
  <input type="radio" name="genero" value="masculino">Masculino
  <input type="radio" name="genero" value="otro">Otro
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Número de mes: <input type="text" name="mes"><span class="error">* <?php echo $monthErr;?></span>
  <br></br>
  Número de día de la semana: <input type="text" name="dia"> <span class="error">* <?php echo $dayErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>

<?php
  echo "<h2>Datos respuesta:</h2>";
  echo "Nombre: ".$nombre;
  echo "<br>";
  echo "Email: ".$email;
  echo "<br>";
  echo "Web: ".$website;
  echo "<br>";
  echo "Comentario: ".$comentario;
  echo "<br>";
  echo "Género: ".$genero;
  echo "<br>";
  echo "Mes del año: ".$mes;
  echo "<br>";
  echo "Día de la semana: ".$dia;
?>
</body>
</html>
