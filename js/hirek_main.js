//ajax hivas
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "./data/data_hirek.php";
var asynchronous = true;
ajax.open(method, url, asynchronous);
//ajax keres kuldes
ajax.send();

//valasz érkezese a data_hirek.php-tol
ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //JSON visszaállítása tömbbe
        var data = JSON.parse(this.responseText);
        console.log(data); //hibakereséshez

        //html ertekek a <tbody>-nak
        var html = "";
        //data-n vegig megyunk
        for (var a = 0; a < data.length; a++)
        {
            var hirek_id = data[a].hirek_id;
            var cim = data[a].cim;
            var hirek = data[a].hirek;
            var bejelentkezes = data[a].bejelentkezes;
            var letrehozas_ideje = data[a].letrehozas_ideje;

            //html-hez hozzafuzes
            html += "<div class='hir_cim'><h3>" + cim + "</h3></div>" + "<div class='hir_user'>" + bejelentkezes  + " " + letrehozas_ideje + "</div>";
            html += "<div class='hir_text'>" + hirek + "</div><br>";
        }

        //Adatok átadása
        document.getElementById("data").innerHTML = html;
    };
};