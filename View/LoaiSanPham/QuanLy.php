<!-- Article -->
<div class="article">
	<h2><span><a href="admin.php?mod=LoaiSanPham&amp;act=QuanLy">Quản lý loại sản phẩm</a></span></h2>
<p>
<table width="100%" border="1" cellspacing="0">
	<tr class="title"><td>Mã loại</td><td>Tên loại</td><td>Xóa</td><td>Sửa</td></tr>
    
<?php
foreach($ret as $row)
{
	echo "<tr><td>";
	echo $row['MaLoai']."</td><td>";
	echo $row['TenLoai']."</td><td>";
echo "<a href=\"admin.php?mod=LoaiSach&act=Xoa&id=$row[MaLoai]\" onclick=\"return IsDelete()\"><img src=\"Image/delete.gif\" /></a></td><td>";
echo "<a href=\"admin.php?mod=LoaiSach&act=Sua&id=$row[TenLoai]\"><img src=\"Image/edit.png\" /></a></td></tr>";
}
?>
<a href=\"admin.php?mod=LoaiSach&act=Sua&id=$row[TenLoai]\"></a>
</table>
</p>
<p class="btn-more box noprint"><strong><a href="admin.php?mod=LoaiSach&act=Them">Thêm</a></strong></p>
<p class="btn-more box noprint">&nbsp;</p>
<p class="btn-more box noprint">&nbsp;</p>
</div>
<!-- /article -->
<hr class="noscreen">