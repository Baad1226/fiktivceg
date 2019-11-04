<?php

class Hirek_Uj_Hir_Iras_Controller
{
    public $baseName = 'hirek_uj_hir_iras';  //meghatározni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router által továbbított paramétereket kapja
    {
        //betöltjük a nézetet
        $view = new View_Loader($this->baseName."_main");
    }
}
?>