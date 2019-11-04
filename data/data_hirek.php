<?php
try {
//hirek lekerdezese
    $dbh = new PDO('mysql:host=localhost;dbname=fiktivceg', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    $stmt = $dbh->query("select hirek_id, cim, hirek, bejelentkezes, letrehozas_ideje from hirek order by letrehozas_ideje desc");
    $data = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
}
catch(PDOException $e) {
}
echo json_encode($data);
?>