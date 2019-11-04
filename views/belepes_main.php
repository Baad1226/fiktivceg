<div class="left">
    <h2>Belépés</h2>
    <div class="error"><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?></div>
    <form action="<?= SITE_ROOT ?>beleptet" method="post">
        <label for="login">Felhasználó:</label><input type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
        <label for="password">Jelszó:</label><input type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
        <input type="submit" value="Belépés">
    </form>
</div>