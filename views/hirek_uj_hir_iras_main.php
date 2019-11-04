<?php
include("./restserver/restserver.php");
?>
<form class="form-style" action="" method="POST">
    <label for="newstitle">Hír címe:</label><input type="text" name="newstitle" id="newstitle" required><br>
    <label for="newstext">Hír szövege:</label><textarea id="newstext" name="newstext" cols="40" rows="5" required></textarea><br>
    <input type="submit" value="Küldés">
</form>