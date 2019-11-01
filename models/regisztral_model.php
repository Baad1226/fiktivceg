<?php

class Regisztral_Model
{
    public function get_data($vars)
    {
        $retData['eredmeny'] = "";
        try {
            $connection = Database::getConnection();
            // Létezik már a felhasználói név?
            $sql = "select bejelentkezes from felhasznalok where bejelentkezes = '".$vars['login']."'";
            $stmt = $connection->query($sql);
            $felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);

            switch(count($felhasznalo)) {
                case 0:
                    // Ha nem létezik, akkor regisztráljuk
                    $sql = "insert into felhasznalok values (0, :csaladi_nev, :utonev, :login, sha1(:jelszo), :jogosultsag)";
                    //$sql = "insert into felhasznalok values (0, ".$vars['csaladi_nev'].", ".$vars['utonev'].", ".$vars['login'].", sha1(".$vars['password']."), '')";
                    $stmt = $connection->prepare($sql);
                    if($stmt->execute(Array(':csaladi_nev' => $vars['csaladi_nev'], ':utonev' => $vars['utonev'],
                        ':login' => $vars['login'], ':jelszo' => $vars['password'], ':jogosultsag' => '_1_'))) {
                        $retData['eredmény'] = "OK";
                        $retData['uzenet'] = "Kedves " .$vars['csaladi_nev']. " " .$vars['utonev']. "!<br><br>
                                              Sikeres regisztráció!
                                              Most már bejelentkezhet!";
                    } else {
                        // Nem sikerült a létrehozás
                        $retData['eredmeny'] = "ERROR";
                        $retData['uzenet'] = "Nem sikerült regisztálni a felhasználót:  ".$vars['login']."";
                    }
                    break;
                case 1:
                    $retData['eredmeny'] = "ERROR";
                    $retData['uzenet'] = "A felhasználói név:  ".$vars['login']." már foglalt!";
                    break;
                default:
                    $retData['eredmény'] = "ERROR";
                    $retData['uzenet'] = "Regisztrációs hiba!";
            }
        }
        catch (PDOException $e) {
            $retData['eredmény'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
        }
        return $retData;
    }
}

?>