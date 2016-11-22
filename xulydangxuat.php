<?php
session_start();
unset($_SESSION['user']);
?> 
<script language="javascript">
	alert('Bạn đã đăng xuất thành công');
	window.location="index.php";
</script>
