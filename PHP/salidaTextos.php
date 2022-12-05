<!--- José Daniel Fernández López -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            function utf8_strrev($str){
                preg_match_all('/./us', $str, $ar);
                return join('', array_reverse($ar[0]));
            }

            $posicion_texto = strpos($_POST["algo"], $_POST["buscar"])+1;
            $posicion_letra = mb_substr($_POST["algo"],$_POST["pos"]-1,1,'UTF-8');
            header('Content-Type: text/html; charset=UTF-8'); 
            echo "<h2>Funciones de textos</h2>";
            echo "<h3>".$_POST["algo"]."</h3>";
            echo "<p>Longitud de la cadena anterior: ".strlen($_POST["algo"])."</p>";
            echo "<p>Número de palabras de la cadena anterior: ".str_word_count($_POST["algo"])."</p>";
            echo "<p>El texto al revés es: ".utf8_strrev($_POST["algo"])."</p>";
            echo "<h3>Búsquedas</h3>";
            echo "<p>El texto '".$_POST["buscar"]."' está en la posición: ".$posicion_texto."</p>";
            echo "<p>La posición ".$_POST["pos"]." está ocupada por el carácter: ".$posicion_letra."</p>";
        ?>
    </body>
</html>