<?php
ob_start();
session_start();
?>
<meta charset="utf-8">
<?php
					{
						session_destroy();
						//header("location:index.php");
					}
?> 
<script language="javascript">
		alert('Bạn đã đăng xuất thành công');
		window.location="index.php";
		</script>
