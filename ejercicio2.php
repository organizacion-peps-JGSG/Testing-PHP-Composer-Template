<!-- Manuel Felipe Sánchez Córdoba-->
<html lang="es">
    <head>
        <title>Ejercicio 2. Comprobar edad</title>
    </head>
    <body>
        <h1>Comprobar mayoría de edad</h1>
            <p> Pide la edad y si es mayor de 18 años indica que ya puede conducir. </p>
            <?php
            
            // Comprobamos si se ha enviado el formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtenemos la edad desde el formulario
                $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;
    
                // Comprobamos que el valor introducido es un número
                
                if (!empty($edad)) {
                    if ($edad < 18) {
                        echo '<script>alert("Usted no tiene la edad suficiente para conducir.");</script>';
                    } else {
                        echo '<script>alert("Usted ya es mayor de edad; por tanto, ya podría conducir.");</script>';
                    }
                } else {
                    echo '<script>alert("Por favor, introduce un número válido.");</script>';
                }
            }
        ?>
            
    </body>
</html>
