<!DOCTYPE html>
<html> 
    <head> 
        <title>Unidad 4 - Ejemplo 2 Recibe Datos Desde Otra P&aacute;gina</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En esta página se reciben los datos, como puede verse solo se usa
         * la función print_r() para volcar al navegador el arreglo $_POST
         * que contiene todos los datos del formulario de la página de origen
         * la idea es que usted como aprendiz complete el código de esta página 
         * para procesar los datos recibidos según lo especificado en el 
         * ejercicio propuesto en el material de estudio.
         */
        echo "Hola <b>".$_POST['nombre']."</b> persona nacida el ".$_POST['fecha_nacimiento'].
        " dueña del telefono ". $_POST['telefono']." y correo ".$_POST['email']." ,siendo usted ". 
        $_POST['estadoCivil']." oriundo del departamento ".$_POST['departamento']. "<br>!Le damos la bienvenida!<br>";
        if(isset($_POST['hijos'])){
            echo "Esperamos que sus hijos estén muy bien";
        }

        ?>
    </body>
</html>