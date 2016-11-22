<?php
include_once("../DataProvider.php");
class LoaiSach
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertLoaiSach($Maloai,$Tenloai)
	{
		$sql="Insert into loaisach(MaLoai,TenLoai) Values('$Maloai','$Tenloai')";
		return $this->da->ExecuteQuery($sql);
	}
	function GetLoaiSach()
	{
		return $this->da->FetchAll("Select * from loaisach");
	}
	function GetSachAV()
	{
		return $this->da->FetchAll("Select * from loaisach where MaLoai like '%AV%'");
	}
	function GetSGK()
	{
		return $this->da->FetchAll("Select * from loaisach where MaLoai like '%SGK%'");
	}
	function GetTuDien()
	{
		return $this->da->FetchAll("Select * from loaisach where MaLoai like '%TDIEN%'");
	}
	function GetSachTK()
	{
		return $this->da->FetchAll("Select * from loaisach where MaLoai like '%TKHAO%'");
	}
	function GetTruyen()
	{
		return $this->da->FetchAll("Select * from loaisach where MaLoai like '%TR%'");
	}
	function GetLoaiSachByMaLoai($Maloai)
	{
		return $this->da->FetchAll("Select * from loaisach where MaLoai=$Maloai");
	}
	function GetLoaiSachByID($id)
	{
		$sql="Select * from loaisach where MaLoai='$id'";
		return $this->da->Fetch($sql);
	}
	function UpdateLoaiSach($Maloai, $Tenloai)
	{
		$sql="Update loaiSach set  TenLoai='$Tenloai' where MaLoai='$Maloai'" ;
		//echo $sql;
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteLoaiSach($id)
	{
		$sql="Delete from loaiSach where MaLoai = '$id'";
		//echo $sql;
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>