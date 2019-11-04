<div class="left">
    <h2>Regisztráció</h2>
    <div class="error"><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?></div>
    <form action="<?= SITE_ROOT ?>regisztral" method="post" id="reg_form" onsubmit="return validateRegForm()" enctype="multipart/form-data">
        <label for="csaladi_nev">Családi név:</label> <input type="text" name="csaladi_nev" id ="csaladi_nev" required pattern="[a-zA-Z]{2,}"><br>
        <label for="utonev">Utónév:</label> <input type="text" name="utonev" id="utonev" required pattern="[a-zA-Z]{2,}"><br>
        <label for="login">Felhasználó:</label><input type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
        <label for="password">Jelszó:</label><input type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
        <label for="repassword">Jelszó megerősítés:</label><input type="password" name="repassword" id="repassword" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
        <input type="submit" value="Regisztrál" name="submit">
    </form>
</div>