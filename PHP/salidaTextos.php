<!--- José Daniel Fernández López -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            header('Content-Type: text/html; charset=UTF-8'); 
            echo "<h2>Funciones de textos</h2>";
            echo "<h3>".$_POST["algo"]."</h3>";
            echo "<p>Longitud de la cadena anterior: ".strlen($_POST["algo"])."</p>";
            echo "<p>Número de palabras de la cadena anterior: ".str_word_count($_POST["algo"])."</p>";
            echo "<p>El texto al revés es: ".strrev($_POST["algo"])."</p>";
            echo "<h3>Búsquedas</h3>";
            echo "<p>El texto '".$_POST["buscar"]."' está en la posición: ".strpos($_POST["algo"], $_POST["buscar"])."</p>";
            echo "<p>La posición ".$_POST["pos"]." está ocupada por el carácter: ".substr($_POST["algo"],$_POST["pos"],1)."</p>";
        ?>
    </body>
</html>