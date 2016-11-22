
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["signup"]))
{
	if (!isset($_POST["hoten"]) || $_POST["hoten"]=="" )
	{
		return;
	}
	if (!isset($_POST["tendangnhap"]) || $_POST["tendangnhap"]=="" )
	{
		return;
	}
	if (!isset($_POST["matkhau"]) || $_POST["matkhau"]=="" )
	{
		return;
	}
	if (!isset($_POST["sodienthoai"]) || $_POST["sodienthoai"]=="" )
	{
		return;
	}
	if (!isset($_POST["diachi"]) || $_POST["diachi"]=="" )
	{
		return;
	}
	if (!isset($_POST["email"]) || $_POST["email"]=="" )
	{
		return;
	}
	
		$hoten= $_POST["hoten"];
		$tendangnhap= $_POST["tendangnhap"];
		$matkhau= $_POST["matkhau"];
		$sodienthoai= $_POST["sodienthoai"];
		$diachi= $_POST["diachi"];
		$email= $_POST["email"];
		$mataikhoan = rand(1,1000);		
		include_once("DataProvider.php");
		$db= new DataProvider();
		$sql= "INSERT INTO khachhang(TenKH, DiaChi, SDT, Email) VALUES ('$hoten','$diachi','$sodienthoai','$email')";
		echo $sql;
		$rs = $db->ExecuteQueryInsert($sql);
		$sql= "INSERT INTO taikhoan(MaTK, MaKH, TenDangNhap, MatKhau) VALUES ('$mataikhoan','$rs','$tendangnhap',$matkhau)";
		echo $sql;
		$rs = $db->ExecuteQueryInsert($sql);
		?>
		<script language="javascript">
		alert('Bạn đã đăng xuất thành công');
		//window.location="index.php";
		</script>

		<?php
		
		
}
?>