<?php
include_once("../DataProvider.php");
class Sach {
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function getsach()
	{
		return $this->da->FetchAll("select * from sach ");
	}
	
}

?>