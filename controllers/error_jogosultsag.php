<?php

class Error_Jogosultsag_Controller
{
    public $baseName = 'error_jogosultsag';  //meghatározni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router által továbbított paramétereket kapja
    {
        $view = new View_Loader($this->baseName.'_main');
    }
}

?>