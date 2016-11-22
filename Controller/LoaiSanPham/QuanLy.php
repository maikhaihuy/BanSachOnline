<?php
	include_once("Model/LoaiSach.php");
	$Product = new LoaiSach();
	$ret=$Product->GetLoaiSach();
	include_once("View/LoaiSanPham/QuanLy.php");
?>