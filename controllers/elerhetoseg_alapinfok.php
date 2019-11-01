<?php

class Elerhetoseg_alapinfok_Controller
{
	public $baseName = 'elerhetoseg_alapinfok';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbátott paramátereket kapja
	{
		//betöltjök a nézetet
		$view = new View_Loader($this->baseName."_main");
	}
}

?>