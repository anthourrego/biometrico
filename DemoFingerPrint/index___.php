<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="600">
        <title>FingerPrint PHP + Java + MySql</title>        
    </head>
    <body>
        <div id="content" style="display: none">
            <span id="aviso">Aviso de Configuración:</span>
            <br/>
            <ol>
                <li>Si es la primera vez que abre la aplicación en este navegador debe configurar el token en el plugin..!</li>
                <li>Si el token ya habia sido configurado, es posible que alguna aplicacion lo haya eliminado, por favor configurelo nuevamente..!</li>
            </ol>        
            Token: <span id="Token"></span>
            <br/>
            <br/>
            <a href="index.php">Refrescar</a>
        </div>
    </body>
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/Utils.js" type="text/javascript"></script>        
    <script>
//            localStorage.removeItem("srnPc");
        if (localStorage.getItem("srnPc")) {
            $("#aviso").html("");
            window.location = "home.php?token=" + localStorage.getItem("srnPc");
        } else {
            saveSrnPc();
            $("#Token").html(localStorage.getItem("srnPc"));
            $("#content").css("display", "block");
//        window.location = "home.php?token=" + localStorage.getItem("srnPc");
        }
    </script> 
</html>
