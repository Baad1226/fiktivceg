<?php

class Elerhetoseg_kiegeszitesek_Controller
{
	public $baseName = 'elerhetoseg_kiegeszitesek';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
        //csak bejelentkezett felhasználóknak jelenítjük meg
        if ($_SESSION['userlevel'] == "1__") {
            $this->baseName = "error_jogosultsag";
            //betöltjük a nézetet
            $view = new View_Loader($this->baseName . "_main");
        } else {
            //betöltjük a nézetet
            $view = new View_Loader($this->baseName . "_main");
        }
	}
}

?>