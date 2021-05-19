<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="text-align: center;padding-top:  10%;font-family: sans-serif;">
        <div id="content" style="display: none">
            <label style="font-size:250%;">Aviso: Token no configurado para este navegador..!</label>
            <br>
            <br>
            <label>
                <b>1)</b> Si es la primera vez que abre la aplicación en este navegador debe configurar el token en el plugin..!
            </label>
            <br>
            <br>
            <label>
                <b>2)</b> Si el token ya habia sido configurado, es posible que alguna aplicacion lo haya eliminado, por favor configurelo nuevamente..!
            </label>
            <br>
            <br>  
            <label>
                <b>Token: </b>
                <span id="Token" style="font-size:20px;"></span>         
            </label>
            <br>
            <br>
            <label>
                <a href="index.php">Refrescar</a>
            </label>
            <br>
            <br>
            <label>
                <a href="javascript:void(0)">Aqui el enlace de tu plugin para descargar.</a>
            </label>
        </div>
    </body>
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/Utils.js" type="text/javascript"></script>        
    <script>
//        localStorage.removeItem("srnPc");
        if (localStorage.getItem("srnPc")) {
            window.location = "Home.php?token=" + localStorage.getItem("srnPc");
        } else {
            saveSrnPc();
            $("#Token").html(localStorage.getItem("srnPc"));
            $("#content").css("display", "block");
//        window.location = "Home.php?token=" + localStorage.getItem("srnPc");
        }
    </script> 
</html>
