function srnPc() {
    var d = new Date();
    var dateint = d.getTime();
    var letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var total = letters.length;
    var keyTemp = "";
    for (var i = 0; i < 6; i++) {
        keyTemp += letters[parseInt((Math.random() * (total - 1) + 1))];
    }
    keyTemp += dateint;
    return keyTemp;
}

function saveSrnPc() {
    localStorage.setItem("srnPc", srnPc());
//    saveToken();
//    localStorage.removeItem("srnPc");
}

$("#refrescar").click(function () {
    window.location = "index.php"
})


function saveToken() {
    var data = new FormData();
    data.append("token", localStorage.getItem("srnPc"));
    $.ajax({
        async: true,
        type: "POST",
        url: "Model/saveToken.php",
        data: data,
        contentType: false,
        processData: false,
        cache: false,
        dataType: "json",
        success: function (data) {
            console.log(data);
            var json = JSON.parse(data);
            if (json["filas"] === 1) {
                console.log("token Generado")
            }
        }
    });
}





