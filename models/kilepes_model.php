<?php

class Kilepes_Model
{
	public function get_data()
	{
		$retData['eredmény'] = "OK";
		$retData['uzenet'] = "Visszontlátásra kedves ".$_SESSION['userlastname']." ".$_SESSION['userfirstname']."!";
		$_SESSION['userlastname'] =  "";
		$_SESSION['userfirstname'] =  "";
		$_SESSION['userloginname'] = "";
		$_SESSION['userlevel'] = "1__";
		Menu::setMenu();
		return $retData;
	}
}

?>