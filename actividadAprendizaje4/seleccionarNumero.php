<!DOCTYPE html>
<html> 
    <head> 
        <title>Unidad 4 - Ejemplo 1 Seleccionar N&uacute;mero</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En este programa también se van a usar hipervínculos para enviar
         * información a la misma página, pero en este caso los hipervínculos se
         * van  a construir dinámicamente usando un ciclo for
         */
        if (isset($_GET['numeroSeleccionado'])) {
            $numeroSeleccionado = $_GET['numeroSeleccionado'];
            echo "<p>Usted ha seleccionado el n&uacute;mero: $numeroSeleccionado"
                    . "<br />";
            unset($_GET);
            echo "<a href = 'seleccionarNumero.php'>Volver al inicio</a>";
        } else {
            echo "<h3>Por favor seleccione uno de los n&uacute;meros</h3>";
            for ($i = 1; $i <= 10; $i++) {
                /* Como puede verse se usa el índice del ciclo for para
                 * construir los hipervínculos de forma dinámica se van a crear
                 * diez hipervínculos cada uno con un valor numérico diferente 
                 * que se transmiete en la variable numeroSeleccionado
                 */
                echo "<a href = 'seleccionarNumero.php?numeroSeleccionado=$i'>"
                . "$i</a><br />";
            }
        }
        ?>
    </body>
</html>