<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5. Funciones PHP</title>
    </head>
    <body>
        <h1>Ejercicio 5. Funciones PHP</h1>
        
        <h2>Comprobar mayoría de edad</h2>
        <form action="comprobar_edad.php" method="post">
            <p> Introduce tu edad: </p>
            <input type="text" name="edad"/>
            <button type="submit">Comprobar Edad</button>
        </form>
        <p id="txtEdad">
            <?php
            if (isset($_GET['txtEdad'])) {
                echo $_GET['txtEdad'];
            }
            ?>
        </p>
        
        <h2>Cálculo de notas</h2>
        <form action="calcular_calificacion.php" method="post">
            <p> Pide una nota (número). Muestra la calificación según la nota:</p>
            <input type="text" name="nota"/>
            <button type="submit">Calificación</button>
        </form>
        <ul>
            <li>0-3: Muy deficiente.</li>
            <li>3-5: Insuficiente.</li>
            <li>5-6: Suficiente.</li>
            <li>6-7: Bien.</li>
            <li>7-9: Notable.</li>
            <li>9-10: Sobresaliente.</li>
        </ul>
        <p id="txtCalificacion">
            <?php
            if (isset($_GET['txtCalificacion'])) {
                echo $_GET['txtCalificacion'];
            }
            ?>
        </p>
    </body>
</html>
