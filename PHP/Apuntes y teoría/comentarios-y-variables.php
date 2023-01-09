<!DOCTYPE html>
<html>
    <body>
        <?php
            /*
                Esto es un comentario en bloque.
                Se puede hacer en más de una línea.
            */
            // Así se hace un comentario de una sola línea.

            // Esta es una variable de texto:
            $texto = "Buenos días";
            // Estas son unas variables numéricas:
            $x = 3;
            $y = 5;
            // Lo siguiente es una constante:
            define("nombre","José Daniel");
            echo "<p><h3>";
            echo nombre;
            echo "</p></h3>";
            echo $texto;
            echo "<br>";
            echo $x;
            echo "<br>";
            echo $y;
        ?>
    </body>
</html>