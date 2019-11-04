<?php

class Admin_Controller
{
    public $baseName = 'admin';  //meghatározni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router által továbbított paramétereket kapja
    {
        //csak admin felhasználóknak jelenítjük meg
        if ($_SESSION['userlevel'] == "__1") {
            //betöltjük a nézetet
            $view = new View_Loader($this->baseName.'_main');
        } else {
            $this->baseName = "error_jogosultsag";
            //betöltjük a nézetet
            $view = new View_Loader($this->baseName . "_main");
        }
    }
}

?>