<?php
try {
//felhasznalok lekerdezese
    $dbh = new PDO('mysql:host=localhost;dbname=fiktivceg', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    $stmt = $dbh->query("select csaladi_nev, utonev, bejelentkezes, jelszo, jogosultsag from felhasznalok");
    $data = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
}
catch(PDOException $e) {
}
echo json_encode($data);
?>