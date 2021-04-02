<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
    /* Nombres y Apellidos: Johan Alexis Nieto Pérez
     * Programa de Formación: Desarrollo Web con PHP
     * Nombre de la evidencia: evidencia3_JohanNieto.rar
     */
        require_once("./biblioteca.php");//usamos el require_once para vincular este archivo con el archivo que contiene la  función operaciones

        echo operaciones(1,2),"<br>";//enviamos 2 parámetros, pero no el tercero así se ejecutara la suma por defecto 

        echo operaciones(1,2,"suma"),"<br>";//enviamos 3 parámetros, los números y el tipo de operación en este caso la suma, haremos lo siguiente para las demás operaciones
        echo operaciones(6,2,"resta"),"<br>";
        echo operaciones(3,2,"multi"),"<br>";
        echo operaciones(9,3,"divi"),"<br>";

        echo operaciones(1,2,"otro"),"<br>";//aquí enviamos a propósito el tercer parámetro de forma erronea, para que nos retorne el mensaje del error
    ?>
</body>
</html>