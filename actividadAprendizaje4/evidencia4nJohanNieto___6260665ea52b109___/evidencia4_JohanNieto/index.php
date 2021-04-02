<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teatro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
            /* Nombres y Apellidos: Johan Alexis Nieto Pérez
             * Programa de Formación: Desarrollo Web con PHP
             * Nombre de la evidencia: evidencia4_JohanNieto.rar
             */
    ?>
    <form action="index.php" method="POST"><!--cabecera de la tabla, ya previamente
    le dimos estilos que están en style.css, a parte procesaremos todo aquí con el 
    metodo POST-->
        <table class="escenario">
            <caption>Escenario</caption>

            <tr>
                <th>Filas/Sillas</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
            <?php
            
                require_once("procesos.php");
                require_once("mostrarDatos.php");
                /* require_once necesarios, el primero procesa los cambios en los
                 * registros, y el segundo, dibuja la tabla
                 */

                if(isset($_POST['info'])){
                /* preguntamos si se envio por el textarea oculto, el string que 
                 * corresponde a la tabla actualizada, todo esto cuando ya se haya
                 * hecho uso del formulario al menos una vez
                 */
                    $actualizado=trim($_POST['info']);
                    /* por alguna razón el textarea, colocaba
                     * espacios en blanco en el string
                     */

                    $escenarioModificado= explode(',',$actualizado);//transformamos el string a array
                    
                    $escenarioModificado=array_chunk($escenarioModificado,5);
                    /*al array lo dividimos en arrays más pequeños, de 5 en 5 correspondientes 
                     * a las filas y columnas
                     */
                    
                    $cadena=retornarTabla($escenarioModificado);//tabla actualizada
                    

                }else{

                    $cadena=retornarTabla();//tabla original
                    
                    
                }/*deacuerdo a si se ha usado el formulario o no, cadena enviara la tabla a
                  * procesar, y a la vez recuperara la tabla actualizada en forma de string
                  * para enviarlo por el textarea oculto
                  */
                dibujarTabla($cadena);//dibujamos la tabla

            ?>
        </table>
        <div class="opciones">
            <div class="izquierda"><!--formulario dividido en 2 columnas-->
                <label for="fila">Fila:</label>
                <label for="puesto">Puesto:</label>
                <label for="reservar" style="color:blue;">Reservar:</label>
                <label for="comprar" style="color:green;">Comprar:</label>
                <label for="liberar" style="color:red;">Liberar:</label>
            </div>
            <div class="derecha">
                <input type="number" name="fila"  max="5" min="1" required>
                <input type="number" name="puesto"  max="5" min="1" required>
                <input type="radio" name="acciones"  required value="R">
                <input type="radio" name="acciones"  value="V">
                <input type="radio" name="acciones" value="L">
            </div>

            <textarea name="info" id="" cols="30" rows="10" style="display:none">
                <?=$cadena?>
            </textarea><!--textarea oculto-->

            <div class="botones">
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </div>
        </div>

    </form>
    <script src="codigoFrontEnd.js" language="javascript"></script><!--codigo javascript
    para controlar el colorido de los estados de las sillas-->
</body>

</html>