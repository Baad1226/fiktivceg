//ajax hivas
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "./data/data_admin.php";
var asynchronous = true;
ajax.open(method, url, asynchronous);
//ajax keres kuldes
ajax.send();

//valasz érkezese a data_admin.php-tol
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
            var csaladi_nev = data[a].csaladi_nev;
            var utonev = data[a].utonev;
            var bejelentkezes = data[a].bejelentkezes;
            var jelszo = data[a].jelszo;
            var jogosultsag = data[a].jogosultsag;

            //html-hez hozzafuzes
            html += "<tr>";
            html += "<td>" + csaladi_nev + "</td>";
            html += "<td>" + utonev + "</td>";
            html += "<td>" + bejelentkezes + "</td>";
            html += "<td>" + jelszo + "</td>";
            html += "<td>" + jogosultsag + "</td>";
            html += "</tr>";
        }

        //feltoltjuk a <table> <tbody> részét
        document.getElementById("data").innerHTML = html;
    };
};