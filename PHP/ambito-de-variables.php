<!--- José Daniel Fernández López -->
<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 5; // Variable global
            function prueba(){
                $y = 10;
                echo "<p>Variable 'x' dentro de la función: $x</p>";
                echo "<p>Variable 'y' dentro de la función: $y</p>";
            }
            prueba();
            echo "<p>Variable 'x' fuera de la función: $x</p>";
            echo "<p>Variable 'y' fuera de la función: $y</p>";
        ?>
    </body>
</html>