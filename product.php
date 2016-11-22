 <?php 
			  include_once("DataBase/Sach.php");
			$sach=new Sach();/*goi class*/
			$ab=$sach->getMaLoai($_GET['sanpham']);/*goi ham*/
			foreach ($ab as $r)
			{
				$hinh=$r["Image"];
				$ten=$r["TenSach"];
				$giaban=$r["GiaBan"];
				$tennxb = $r["TenNXB"];
				$tentg = $r["TenTacGia"];
				$id=$r["MaSach"];
				
				echo "  <div id='content' class='float_r'>
        	<h1>CHI TIẾT SÁCH</h1>
            <div class='content_half float_l'>
        	<a  rel='lightbox[portfolio]' href='images/product/10_l.jpg'><img src='Hinhanh/$hinh' alt='Book 1' width='180'height='281' /></a>
            </div>
            <div class='content_half float_r'>
                <table>   
				    <tr>
                        <td>TÊN SÁCH:$ten</td>  </tr>
					<tr>
				    <tr>
                        <td>MÃ SÁCH:	$id</td>  </tr>
					<tr>
					<tr>
                        <td>TÊN NXB:	$tennxb</td>  </tr>
					

					<tr>
                        <td> TÊN TÁC GIẢ:	$tentg</td>  </tr>
					<tr>
                        <tr>
						
                        <td width='160'>GIÁ:	$giaban</td>  </tr>

               
						 
                   <td>SỐ LƯỢNG</td>
                        <td><input type='text' value='1' style='width: 20px; text-align: right' /></td>
                    </tr>
                </table>
				
                <div class='cleaner h20'></div>

                <a href='shoppingcart.html' class='addtocart'></a>

			</div>
            ";       	
			}
			  ?>
                   
                    	
              
       