<?php
	include_once("Model/LoaiSach.php");
	$Product = new LoaiSach();
	$ret=$Product->GetSGK();
	$ret1=$Product->GetTruyen();
	$ret2=$Product->GetTuDien();
	$ret3=$Product->GetSachAV();
	$ret4=$Product->GetSachTK();
	include_once("shop.php");
?>