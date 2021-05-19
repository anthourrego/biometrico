<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="600">
        <title>FingerPrint PHP + Java + MySql</title>
        <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <link href="Css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="mensaje">
            <img id="imageMessage" />
            <div class="messageStyle">
                <p id="txtMensaje"></p>
            </div>
        </div>
        <form>
            <div>
                <div>
                    <label>Documento:</label>
                    <input id="documento" type="text" />
                </div>
                <div style="margin-top: 5px;">
                    <label>Nombre Completo:</label>
                    <input id="nombre" type="text" />
                </div>
                <div style="margin-top: 5px;">
                    <label>Telefono:</label>
                    <input id="tel" type="text" />
                </div>
                <div style="margin-top: 5px;">
                    <label>Foto:</label>
                    <input id="foto" type="file" />
                </div>   
                <input id="activeSensorLocal" onclick="activarSensor('<?php echo $_GET["token"] ?>')" style="margin-top: 5px;" type="button" value="Asociar Huella" />
                <input id="saveChanges" onclick="addUser('<?php echo $_GET["token"] ?>')" style="margin-top: 5px;" type="button" value="Guardar" />
                <a target="_self" href="Model/ActivarSensorReader.php?token=<?php echo $_GET["token"]; ?>">Verificar Usuario</a>
            </div>

            <div id="fingerPrint" style="border: solid 1px black;width: 18%;height: 290px;margin-top: 5px;display: none;">
                <div style="display: block">
                    <img id="<?php echo $_GET["token"]; ?>" src="imagenes/finger.png" style="width: 80%;margin-left: 9%;"> 
                </div>
                <div style="display: block;padding-left: 3px;">
                    <label id="<?php echo $_GET["token"] . "_status" ?>" style="margin-left: 5px;">
                        Estado del sensor: Inactivo
                    </label>
                    <textarea id="<?php echo $_GET["token"] . "_texto" ?>" cols="30" rows="3"> 
                        ---
                    </textarea>
                </div>
            </div>
        </form>
    </body>
    <script src="js/funciones.js" type="text/javascript"></script>
    <script>
                    cargar_push();
    </script>
</html>
