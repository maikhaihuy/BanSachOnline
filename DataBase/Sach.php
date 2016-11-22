<?php
include_once("DataProvider.php");
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
	function getsgk($ten)
	{
		return  $this->da->FetchAll("select * from sach where MaLoai='$ten' ");
	}
	
	function getMaLoai($sanpham)
	{
		return  $this->da->FetchAll("select * from sach where MaSach='$sanpham' ");
	}
}

?>