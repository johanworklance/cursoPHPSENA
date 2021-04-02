<!DOCTYPE html>
<html> 
    <head> 
        <title>Unidad 4 - Ejemplo 2 Recibe N&uacute;mero Desde 
            Otra P&aacute;gina</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* Esta es la página de destino del programa que permite enviar
         * un número, seleccionado en hipervínculos, a través de la URL
         */
        if (isset($_GET['numeroSeleccionado'])) {
            $numeroSeleccionado = $_GET['numeroSeleccionado'];
            echo "<p>Usted ha seleccionado el n&uacute;mero: $numeroSeleccionado"
            . " <br />";
            unset($_GET);
        } else {
            /* A diferencia del otro ejemplo que hace lo mismo que este cuando
             * la variable $_GET no se ha inicializado se muestra un mensaje
             * indicando que no se ha seleccionado un número, esto es útil 
             * cuando el usuario pone la dirección de una página directamente 
             * en la barra de dirección del navegador. También existen herramientas
             * que permiten redireccionar automáticamente al usuario si entra
             * a páginas por vías diferentes a las que se desea
             */
            echo "No se ha seleccionado ning&uacute;n n&uacute;mero <br />";
        }
        echo "<a href = 'seleccionarNumero.php'>Volver al inicio</a>";
        ?>

    </body>
</html>