<h2><span><a href="Shop.php?mod=SanPham&act=Load"></a></span></h2>
 <?php
include_once("Controller/SanPham/Load.php");
//include_once("Controller/SanPham/ChiTiet.php");
$id = $_GET['id'];
if ( $id == 1 )
    {
			echo '<h2 class="title text-center">Sản phẩm hiện có</h2>';
          foreach($ret as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									echo'<div class="product-overlay">';
										echo'<div class="overlay-content">';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div>";
									
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
    }  
	
	if ( $id == 2 )
    {
			echo '<h2 class="title text-center">Thời trang nữ</h2>';
          foreach($retNU as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									echo'<div class="product-overlay">';
										echo'<div class="overlay-content">';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div>";
									
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
    }  
	if ( $id == 3 )
    {
			echo '<h2 class="title text-center">Thời trang nam</h2>';
          foreach($retNA as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									echo'<div class="product-overlay">';
										echo'<div class="overlay-content">';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div>";
									
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
    }  
	
	if ( $id == 4 )
    {
			echo '<h2 class="title text-center">Thời trang cặp đôi</h2>';
          foreach($retCD as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									echo'<div class="product-overlay">';
										echo'<div class="overlay-content">';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div>";
									
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
    }  
	
	if ( $id == 5 )
    {
			echo '<h2 class="title text-center">Thời trang trẻ em</h2>';
          foreach($retTE as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									echo'<div class="product-overlay">';
										echo'<div class="overlay-content">';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div>";
									
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
    }  
	
	if ( $id == 6 )
    {
			echo '<h2 class="title text-center">Sản phẩm mới</h2>';
          foreach($retMoi as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									echo'<div class="product-overlay">';
										echo'<div class="overlay-content">';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div>";
									echo'<img src="images/home/new.png" class="new" alt="" />';
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
    }  
	
	if ( $id == 7 )
    {
			echo '<h2 class="title text-center">Sản phẩm khuyến mãi</h2>';
          foreach($retKM as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									$MaSP=$row['MaSP'];
									//echo'<a href="ChiTiet.php?mod=SanPham&act=ChiTiet"><div class="product-overlay">';
									echo'<a href="ChiTiet.php?mod=SanPham&act=ChiTiet&id='.$MaSP.'"><div class="product-overlay">';
										echo'<div class="overlay-content">';
											$giacu= $row['GiaBan'];
											$giamoi=$row['GiaBan']-$row['GiaBan']*$row['PhanTramGiam']/100;
											echo '<h2 style="background-color:#FFF"> Giảm giá còn:'; echo $giamoi; echo '</h2>';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div></a>";
									echo'<img src="images/home/sale.png" class="new" alt="">';
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
    }  
	
	if ( $id == 8 )
    {
			echo '<h2 class="title text-center">Sản phẩm bán chạy</h2>';
          foreach($retBC as $row)
						{
                             echo'<div class="col-sm-4">';
							echo'<div class="product-image-wrapper">';
								echo'<div class="single-products">';
									echo'<div class="productinfo text-center">';
										echo "<img src=\"HinhAnh/$row[HinhSP]\" />";
										echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
										
										echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo'</div>';
									echo'<div class="product-overlay">';
										echo'<div class="overlay-content">';
											echo'<h3>'; echo $row['MoTa']; echo '</h3>';
											echo'<h3>'; echo $row['ChatLieu']; echo '</h3>';
											echo'<h3>'; echo $row['XuatXu']; echo '</h3>';
											echo "<h2>"; echo $row['GiaBan']; echo "</h2>";
											echo'<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
										echo"</div>";
									echo"</div>";
									
								echo"</div>";
								echo'<div class="choose">';
									echo'<ul class="nav nav-pills nav-justified">';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
										echo'<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>';
									echo"</ul>";
								echo"</div>";
							echo"</div>";
						echo"</div>";            
						}
	}
?>