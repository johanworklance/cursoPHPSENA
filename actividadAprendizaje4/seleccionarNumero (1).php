<!DOCTYPE html>
<html> 
    <head> 
        <title>Unidad 4 - Ejemplo 2 Seleccionar  N&uacute;mero 
            Pasar a Otra P&aacute;gina</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En este programa, asi como en el segundo archivo del ejemplo 
         * anterior, se va a crear una lista de hipervínculos generados por 
         * un ciclo for, la diferencia es que en este caso van a haber dos
         * páginas, una que es esta en la que se crea el "menú", y la otra 
         * (recibeNumero.php) en la que se recibe la información
         */
        echo "<h3>Por favor seleccione uno de los n&uacute;meros</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<a href = 'recibeNumero.php?numeroSeleccionado=$i'>"
            . "$i</a><br />";
        }
        ?>
    </body>
</html>