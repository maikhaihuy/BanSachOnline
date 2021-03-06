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
                    	<li class="first"><a href="#">SÁCH GIÁO KHOA</a></li>
                        	</li>
                        <li><a href="#">SÁCH TIẾNG ANH</a>
                       		</li>
                        <li><a href="#">SÁCH THAM KHẢO</a>
                       		</li> 
                        <li><a href="#">TRUYỆN</a>
                        	</li>
                        
                        <li class="last"><a href="#">TỪ ĐIỂN</a>
                        	</li>
                        
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>SÁCH BÁN CHẠY </h3>   
                <div class="content"> 
                	<div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                        <h4><a href="#">Donec nunc nisl</a></h4>
                        <p class="price">$10</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                        <h4><a href="#">Lorem ipsum dolor sit</a></h4>
                        <p class="price">$12</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                        <h4><a href="#">Phasellus ut dui</a></h4>
                        <p class="price">$20</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	<a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>
                        <h4><a href="#">Vestibulum ante</a></h4>
                        <p class="price">$8</p>
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
        	<h1>Liên hệ chúng tôi</h1>
            <div class="content_half float_l">
                <p>Bạn hãy điền thông tin vào.</p>
                <div id="contact_form">
                   <form method="post" name="contact" action="#">
                        
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
                        <label for="phone">Phone:</label> <input type="text" name="phone" id="phone" class="input_field" />
                        <div class="cleaner h10"></div>
        
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                        
                    </form>
                </div>
            </div>
        <div class="content_half float_r">
        	<h5>CỬA HÀNG CHÍNH</h5>
			351 Lạc Long Quân, <br />
			Phường 10, quận 11<br />
			Thành phố Hồ Chí Minh<br /><br />
						
			Phone: 08 3 446600<br />
			Email: <a href="mailto:info@yourcompany.com">xuanntt0203@gmail.com</a><br/>
			
            <div class="cleaner h40"></div>
			
            <h5>CHI NHÁNH 2</h5>
			280 An Duong Vuong,<br />
			Phường 4, Quận 5<br />
			Thành phố Hồ Chí Minh<br /><br />
			
			Phone: 08 3 101010<br />
			Email: <a href="mailto:contact@yourcompany.com">bookstore@gmail.com</a><br/>
			<br />
            
        </div>
        
        <div class="cleaner h40"></div>
        
        <iframe width="680" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" < src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6696242336798!2d106.6397671142261!3d10.759924992332703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e901bf4ebdb%3A0x613f747443c985a0!2zMzUxIEzhuqFjIExvbmcgUXXDom4sIHBoxrDhu51uZyAxMCwgUXXhuq1uIDExLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1478405362769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen"></iframe>
            
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