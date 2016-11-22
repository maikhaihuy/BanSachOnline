
<?php
	
		echo "<div id='content' class='float_r'>";
		
		 
			include_once("DataBase/Sach.php");
			$sach=new Sach();/*goi class*/
			$ten=$_GET['ten'];
			$ab=$sach->getsgk($ten);/*goi ham*/
			foreach ($ab as $r)
			{
				$hinh=$r["Image"];
				$ten=$r["TenSach"];
				$giaban=$r["GiaBan"];
				
				echo " <div class='product_box'>
              <h3>$ten </h3>
            	<a href='product.php'><img src='HinhAnh/$hinh' alt='Book 1' width='180'height='281' /></a>
               
              <p>$giaban</p>
                <a href='shoppingcart.html' class='addtocart'>Giỏ hàng</a>
                <a href='productdetail.html' class='detail'>Liên hệ</a>
          </div>
		"
			;}	
		?>
