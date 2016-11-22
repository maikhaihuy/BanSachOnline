<?php
	include_once("Model/SanPham.php");
	$Product = new SanPham();
	$ret=$Product->GetSanPham1();
	$retNU=$Product->GetSGK();
	$retNA=$Product->GetTruyen();
	$retCD=$Product->GetTuDien();
	$retTE=$Product->GetSachAV();
	$retMoi=$Product->GetSanPhamMoi();
	/*$retKM=$Product->GetSanPhamKM();*/
	$retBC=$Product->GetSanPhamBC();
	
	include_once("View/SanPham/Load.php");
	
?>