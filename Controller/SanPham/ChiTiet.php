<?php
	include_once("Model/SanPham.php");
	$Product = new SanPham();
	if(isset($_GET['id']))
	{
		$MaSP = $_GET['id'];
	
		include_once("View/SanPham/ChiTiet.php");
	}
	
?>