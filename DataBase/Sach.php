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
		//return  $this->da->FetchAll("select * from sach where MaLoai='$ten' ");
		return  $this->da->FetchAll("select * from sach s, tacgia t, nhaxuatban n where s.MaLoai='$ten' and s.MaNXB=n.MaNXB and s.MaTacGia = t.MaTacGia");
	}
	
	function getMaLoai($sanpham)
	{
		return  $this->da->FetchAll("select * from sach s, tacgia t, nhaxuatban n where s.MaSach='$sanpham' and s.MaNXB=n.MaNXB and s.MaTacGia = t.MaTacGia");
	}

	function getSachMoiNhat()
	{
		return  $this->da->FetchAll("select * from sach s order by s.NgayNhap desc LIMIT 9");
	}
	function getSachBestSeller()
	{
		return $this->da->FetchAll("SELECT * FROM sach s1 JOIN (SELECT s.MaSach, sum(c.SoLuong) soluong FROM sach s, chitiethoadon c WHERE s.MaSach = c.MaSach group by c.MaSach) s2 WHERE s1.MaSach = s2.MaSach ORDER BY s2.soluong desc");
	}
}

?>