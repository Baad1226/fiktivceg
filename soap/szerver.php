<?php
class Szolgaltatas {
    public function ido()  {
        return date("Y-m-d H:i:s",time());
    }
}
$options = array(
    "uri" => "http://localhost/web2/fiktivceg/soap/szerver.php");
$server = new SoapServer(null, $options);
$server->setClass('Szolgaltatas');
$server->handle();
?>