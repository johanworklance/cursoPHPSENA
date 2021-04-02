<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($_GET['nombre']) && isset($_GET['edad'])){
            echo "<h1>Enviaste Nombre: ".$_GET['nombre']." y edad: ".$_GET['edad']."</h1>";
        }else{
            echo "No enviaste nada";
        }
    ?>
</body>
</html>