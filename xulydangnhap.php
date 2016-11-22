<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["login"]))
{
	//echo $_POST["username"];
	$return = true;
	if (!isset($_POST["username"]) || $_POST["username"]=="" )
	{
		?>
        <script language="javascript">
		alert('Bạn chưa nhập Tên Đăng Nhập');
		window.location="Dangnhap.php";
		</script>
        <?php
		return;
		}
	if (!isset($_POST["password"]) || $_POST["password"]=="" )
	{
		?>
        <script language="javascript">
		alert('Bạn chưa nhập Mật Khẩu');
		</script>
        <?php
		return;
	}
	
		$username = $_POST["username"];
		$password = $_POST["password"];
		//echo $username;
		include_once("DataProvider.php");
		$db= new DataProvider();
		$sql = "select * from taikhoan where TenDangNhap = '$username' and MatKhau = '$password'";
		//echo $sql;
		if($db->NumRows($sql)<=0)
		{
			
			
			?>
			<script language="javascript">
			alert('Tên đăng nhập hoặc mật khẩu chưa chính xác');
			
			</script>
            <?php
			//header("location:login.php");
		}
		else
		{
			$rs = $db->ExecuteQuery($sql);
			while($row=mysqli_fetch_assoc($rs))
			{
			session_start();
			$_SESSION["user"] = new stdClass();
				foreach($row as $key=>$value)
				{
					  
					$_SESSION["user"]->$key=$value;
				}
			}
			//header("location:index.php");
			?>
			<script language="javascript">
		alert('Bạn đã đăng nhập thành công');
		window.location="index.php";
		</script>
			<?php
		}
		//echo $row["TenDangNhap"];
		
		//MsgBox("Tên đăng nhập hoặc tài khoản chưa chính xác", 1, ""); 
		//else 
		//{
			//if ($rs["MaKH"]!=NULL) $userid= $rs["MaKH"];	
			//if ($rs["MaNV"]!=NULL) $userid= $rs["MaNV"];	
		//} 
	
}
?>
			