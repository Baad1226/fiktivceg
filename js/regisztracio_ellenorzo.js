function validateRegForm() {
    var re = /\S+@\S+\.\S+/;
    var login = document.forms["reg_form"]["login"].value;
    var csaladi_nev = document.forms["reg_form"]["csaladi_nev"].value;
    var utonev = document.forms["reg_form"]["utonev"].value;

    var password = document.forms["reg_form"]["password"].value;
    var repassword = document.forms["reg_form"]["repassword"].value;

    if (login == "" ) {
        alert("Felhasználónév nincs kitöltve!");
        return false;
    }
    if (csaladi_nev == "" ) {
        alert("Vezetéknév nincs kitöltve!");
        return false;
    }
    if (utonev == "" ) {
        alert("Keresztnév nincs kitöltve!");
        return false;
    }

    if (password == "" ) {
        alert("Jelszó nincs kitöltve!");
        return false;
    }
    if (repassword == "" ) {
        alert("Jelszó megerősítés nincs kitöltve!");
        return false;
    }
    if (repassword != password ) {
        alert("A megadott jelszavak nem egyeznek!");
        return false;
    }
}