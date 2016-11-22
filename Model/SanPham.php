<?php
include_once("../DataProvider.php");
class Sach
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	//$MaSach,$MaNXB,$MaTacGia,$MaLoai,$TenSach,$Image,$GiaBan, $GiaNhap, $NamSanXuat
	function InsertSach($MaSach,$MaNXB,$MaTacGia,$MaLoai,$TenSach,$Image,$GiaBan, $GiaNhap, $NamSanXuat)
	{
		$sql="Insert into sach($MaSach,$MaNXB,$MaTacGia,$MaLoai,$TenSach,$Image,$GiaBan, $GiaNhap, $NamSanXuat)";
		return $this->da->ExecuteQuery($sql);
	}
	
	
	//$Matranh,$Tentranh,$Loaitranh,$Kichthuoc,$Ngaynhap,$Soluong,$Soluongban, $Giaban, $NSX
	function UpdateSach($MaSach,$MaNXB,$MaTacGia,$MaLoai,$TenSach,$Image,$GiaBan, $GiaNhap, $NamSanXuat)
	{
		
			$sql="Update sach set Image='$Image', MaSach='$MaSach', MaNXB= '$MaNXB', MaTacGia = '$MaTacGia', MaLoai ='$MaLoai', TenSach = $TenSach, GiaBan = '$GiaBan', GiaNhap = '$GiaNhap', NamSanXuat = '$NamSanXuat' where MaSach='$MaSach'";
			//echo $sql;
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteSach($MaSach)
	{
		$sql = "Delete from sach where MaSach='$MaSach'";
		return $this->da->ExecuteQuery($sql);
	}
	function GetSach($start,$limit)
	{
		$sql="Select MaSach,MaNXB,MaTacGia,MaLoai,TenSach,Image,GiaBan, GiaNhap, NamSanXuat  from sach order by MaSach desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	// note
	function GetSanPham1()
	{
		$sql="Select MaSach,MaNXB,MaTacGia,MaLoai,TenSach,Image,GiaBan, GiaNhap, NamSanXuat from sach ";
		return $this->da->FetchAll($sql);
	}
	function GetSGK()
	{
		$sql="Select Image,  GiaBan , TenSach from sach where MaLoai like '%SGK%' ";
		return $this->da->FetchAll($sql);
	}
	function GetTruyen()
	{
		$sql="Select Image,  GiaBan , TenSach from sach where MaLoai like '%TR%' ";
		return $this->da->FetchAll($sql);
	}
	function GetTuDien()
	{
		$sql="Select Image,  GiaBan , TenSach from sach  where MaLoai like '%TDIEN%' ";
		return $this->da->FetchAll($sql);
	}
	function GetSachAV()
	{
		$sql="Select Image,  GiaBan , TenSach from sach where MaLoai like '%AV%' ";
		return $this->da->FetchAll($sql);
	}
	function GetSanPhamMoi()
	{
		$sql="Select Image,  GiaBan , TenSach from sach where MONTH(NgayNhap) = MONTH(CURDATE())";
		return $this->da->FetchAll($sql);
	}
	function GetSanPhamBC()
	{
		$sql="Select DISTINCT Image,  GiaBan , TenSach from sach s join chitiethoadon c on s.MaSP = c.MaSP ";
		return $this->da->FetchAll($sql);
	}
	
	/*function GetSanPhamKM()
	{
		$sql="Select HinhSP,  GiaBan , MoTa, ChatLieu, XuatXu ,PhanTramGiam, ThoiGianBD,ThoiGianKT, s.MaSP   from sanpham s join chitietkhuyenmai c on s.MaSP= 		c.MaSP join khuyenmai k on k.MaKM = c.MaKM  where  ThoiGianBD<=CURDATE() and CURDATE() <= ThoiGianKT";
		return $this->da->FetchAll($sql);
	}
	function GetSanPhamTuNCC()
	{
		$sql="Select MaSP,HinhSP, MaLoaiSP, GioiThieu,TenNCC, NgayNhap, TinhTrangThanhToan from sanpham p join nhacungcap c on p.MaNCC=c.MaNCC order by 
		MaSP";
		return $this->da->FetchAll($sql);
	}*/
	function GetSachTuLoaiSach()
	{
		$sql="MaSach, MaNXB, MaTacGia, MaLoai, TenSach, Image, GiaBan, GiaNhap, NamSanXuat from sach p join loaisach c on p.MaLoai=c.MaLoai";
		return $this->da->FetchAll($sql);
	}
	/*function GetTranhTuMaLoai($id)
	{
		$sql="Select  MaSP,HinhSP, MaLoaiSP, GioiThieu,MaNCC, NgayNhap, TinhTrangThanhToan from tranh where MaLoaiSP=$id";
		return $this->da->FetchAll($sql);
	}*/
	
	function GetSachTuMaSach($id)
	{
		$sql="Select  MaSach,MaNXB,MaTacGia,MaLoai,TenSach,Image,GiaBan, GiaNhap, NamSanXuat from sach where MaSach=$id";
		return $this->da->FetchAll($sql);
	}
	
	function GetSanPhamKhac($id,$categoryID)
	{
		$sql="Select  MaSach,MaNXB,MaTacGia,MaLoai,TenSach,Image,GiaBan, GiaNhap, NamSanXuat where MaSach!=$id and MaLoai=$categoryID limit 0,6";
		return $this->da->FetchAll($sql);
	}
	
	function CountSanPham()
	{
		$sql="Select MaSach  from sach";
		return $this->da->NumRows($sql);
	}
	
	function SearchSach($name)
	{
		$sql = "Select  MaSach,MaNXB,MaTacGia,MaLoai,TenSach,Image,GiaBan, GiaNhap, NamSanXuat from sach where TenSach like  or MaSach like '%$name%'" ;
		return $this->da->FetchAll($sql);
	}
	
	function __destruct()
	{
		unset($this->da);
	}
}
?>