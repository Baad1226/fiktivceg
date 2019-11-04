<?php
$eredmeny = "";
switch($_SERVER['REQUEST_METHOD']) {
    case "GET":
        break;
    case "POST":
        $newstitle = $_REQUEST['newstitle'];
        $news = $_REQUEST['newstext'];
        $nickname = $_SESSION['userloginname'];
        include(SERVER_ROOT."soap/kliens.php");
        $created_time = $ido;

        $dbh = new PDO('mysql:host=localhost;dbname=fiktivceg', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sql = "INSERT INTO hirek (cim, hirek, bejelentkezes, letrehozas_ideje) VALUES ('$newstitle', '$news','$nickname', '$created_time')";
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $stmt = null;
            $eredmeny = '<div class="hir_ment_ok">Hír mentése sikeres!</div>';
        }
        catch(Exception $e){
            $eredmeny = '<div class="hir_ment_error">A mentés sikertelen</div>';
        }
        break;
    case "PUT":
        break;
    case "DELETE":
        break;
}
echo $eredmeny;
?>