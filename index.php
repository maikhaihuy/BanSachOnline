<!-- templatemo 367 shoes -->
<!-- 
Shoes Template 
http://www.templatemo.com/preview/templatemo_367_shoes 
-->
<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online book store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="#">Online Book Store</a></h1></div>
        <div id="header_right">
        	<p>
            <?php
								//neu nguoi dung da dang nhap
								if(isset($_SESSION["user"]) && ($_SESSION["user"]->MaKH != NULL || $_SESSION["user"]->MaNV != NULL ))
								{ 
									//kiem tra ten dang nhap la khach hang hay nhan vien
									if ($_SESSION["user"]->MaKH != NULL )  $userid=$_SESSION["user"]->MaKH;
									if ($_SESSION["user"]->MaNV != NULL )  $userid=$_SESSION["user"]->MaNV;
									include_once("DataProvider.php");
									$db= new DataProvider();
									$sql = "select TenDangNhap from taikhoan where MaKH = '$userid' or MaNV = '$userid'";
									$rs = $db->ExecuteQuery($sql);
									
								?>
                                  <a href="#">Kiểm tra</a> | <a href="Dangnhap.php">
								 <?php
								 		echo $_SESSION["user"]->TenDangNhap; 
										
								  ?>
                               </a> |  <a href="xulydangxuat.php">Đăng xuất</a></p>
                                
                                 
								<?php
                                }
								else
								{
								?>
                                  <a href="#">Kiểm tra</a> | <a href="Dangnhap.php">Đăng nhập</a> |  <a href="Dangki.php">Đăng kí</a></p>
                                <?php } ?>
	     
            
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Trang chủ</a></li>
                <li><a href="sanpham.php">Sản phẩm</a>
                </li>
                <li><a href="gioithieu.php">Giới thiệu</a>
                </li>
                <li><a href="hoidap.php">Hỏi-đáp</a></li>
                <li><a href="donhang.php">Đơn hàng</a></li>
                <li><a href="lienhe.php">Liên hệ</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
   <div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>DANH MỤC SÁCH</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="index.php?ten=SGK">SÁCH GIÁO KHOA</a></li>
                        
            	
                        <li><a href="index.php?ten=AV">SÁCH TIẾNG ANH</a> </li>
                        		
                        <li><a href="index.php?ten=TKHAO">SÁCH THAM KHẢO</a>	</li>
               
                        <li><a href="index.php?ten=TR">TRUYỆN</a> </li>
                       	
                        <li class="last"><a href="index.php?ten=TDIEN">TỪ ĐIỂN</a> </li>  
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>SÁCH BÁN CHẠY </h3>
                <div class="content"> 
              <?php
                include_once("DataBase/Sach.php");
                $sach=new Sach();/*goi class*/
                $ab=$sach->getSachBestSeller();/*goi ham*/
                foreach ($ab as $r)
                {
                  $hinh=$r["Image"];
                  $ten=$r["TenSach"];
                  $giaban=$r["GiaBan"];
                  $id=$r["MaSach"];
                  echo " <div class='bs_box'>
                      <a href='index.php?sanpham=$id'><img src='HinhAnh/$hinh' alt='image' width='66' height='66'/></a>
                        <h4><a href='index.php?sanpham=$id'>$ten</a></h4>
                        <p class='price'>$giaban</p>
                        <div class='cleaner'></div>
                    </div> ";         
                }
              ?>
                </div>
            </div>
        </div>
        <?php 
		if(isset($_GET['ten']))
		{
			
				include_once('chitietsp.php');
			
		}
		else if(isset($_GET['sanpham']))
		{
			include_once('product.php');
		}
		else
		{
			echo "<div id='content' class='float_r'>
        	<div id='slider-wrapper'>
                <div id='slider' class='nivoSlider'>
                    <img src='HinhAnh/bia.jpg' alt='' height= '300' width='620' />
                    <a href='#'><img src='HinhAnh/moi.jpg' alt='' width='620' height='300' title='This is an example of a caption' /></a>
                    <img src='HinhAnh/1.jpg' alt='' height='300' width='620' />
                    <img src='HinhAnh/chen.jpg' alt='' height='300' width='620' title='#htmlcaption' />
                </div>
                <div id='htmlcaption' class='nivo-html-caption'>
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href='#'>a link</a>.
                </div>
            </div> <h1>Sản phẩm</h1>";
				
			include_once("DataBase/Sach.php");
			$sach=new Sach();/*goi class*/
			$ab=$sach->getSachMoiNhat();/*goi ham*/
			foreach ($ab as $r)
			{
				$hinh=$r["Image"];
				$ten=$r["TenSach"];
				$giaban=$r["GiaBan"];
				$id=$r["MaSach"];
				echo " <div class='product_box'>
              <h3>$ten </h3>
            	<a href='index.php?sanpham=$id'><img src='HinhAnh/$hinh' alt='Book 1' width='180'height='281' /></a>
               
              <p>$giaban</p>
                <a href='shoppingcart.html' class='addtocart'>Giỏ hàng</a>
                <a href='productdetail.html' class='detail'>Liên hệ</a>
          </div> ";       	
			}
			
			}
			
		?>
        
          <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
          <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
          <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        	
          <!--  <div class="product_box">
              <h3>Sách hay </h3>
            	<a href="productdetail.html"><img src="../HinhAnh/top 5 cuon sach tieng anh hay khong the bo qua 1.jpg" alt="Book 1" width="180" height="281" /></a>
               
              <p>100 000</p>
                <a href="shoppingcart.html" class="addtocart">Giỏ hàng</a>
                <a href="productdetail.html" class="detail">Liên hệ</a>
          </div>        	
          <div class="product_box">
       	    <h3>Ngữ pháp tiếng anh</h3>
       	    <a href="productdetail.html"><img src="../HinhAnh/971424_603109259755882_1789425.jpg" alt="Book 2" width="180" height="280" /></a> 
   	        <p>200 000</p>
                <a href="shoppingcart.html" class="addtocart">Giỏ hàng</a>
                <a href="productdetail.html" class="detail">Liên hệ</a>
            </div>        	
            <div class="product_box no_margin_right">
           	  <h3>Doremon tập 6</h3>
            	<a href="productdetail.html"><img src="../HinhAnh/dormon.jpg" alt="Book 3" width="180" height="280" /></a>
              <p>30 000</p>
                <a href="shoppingcart.html" class="addtocart">Giỏ hàng</a>
                <a href="productdetail.html" class="detail">Liên hệ</a>
            </div>   
            
          <div class="cleaner"></div>
                 	
<div class="product_box">
       	  <h3>Từ điển</h3>
           	<a href="productdetail.html"><img src="../HinhAnh/100526.jpg" alt="Book 4" width="198" height="280" /></a>
         <p>178 000</p>
                <a href="shoppingcart.html" class="addtocart">Giỏ hàng</a>
                <a href="productdetail.html" class="detail">Liên hệ</a>
          </div>        	
            <div class="product_box">
              <h3>Truyện</h3>
            	<a href="productdetail.html"><img src="../HinhAnh/ng nh anh.jpg" alt="Book 5" width="204" height="280" /></a>
                <p>45 000</p>              
                 <a href="shoppingcart.html" class="addtocart">Giỏ hàng</a>
                  <a href="productdetail.html" class="detail">Liên hệ</a>
          </div>        	
            <div class="product_box no_margin_right">
           	  <h3>Bộ sách giáo khoa lớp 5</h3>
           	  <a href="productdetail.html"><a href="productdetail.html"><a href="productdetail.html"></a><a href="productdetail.html"><img src="../HinhAnh/bo_sach_giao_khoa_lop_5_nam_2014.jpeg" alt="Shoes 6" width="190" height="280" /></a>
             <p>89 000</p>
           	  <p class="product_price"><a href="shoppingcart.html" class="addtocart">Giỏ hàng</a>
                <a href="productdetail.html" class="detail">Liên hệ</a>     
                         </p>
            </div> -->       	
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p><a href="#">Trang chủ</a> | <a href="#">Sản phẩm</a> | <a href="#">Thông tin cửa hàng</a> | <a href="#">Hỏi-đáp</a> | <a href="#">Kiểm tra đơn hàng</a> | <a href="#">Liên hệ</a>
		</p>

    	Edit by 2016 <a href="#"> THANH XUAN BOOK STORE</a> <!-- Credit: www.templatemo.com --></div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>