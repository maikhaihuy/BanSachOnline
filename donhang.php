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
<title>Shoes Store - Check Out</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

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
        	<h2>Kiểm tra đơn hàng</h2>
            <h5><strong>Thông tin hóa đơn</strong></h5>
            <div class="content_half float_l checkout">
				Họ tên (phải giống trong thẻ tín dụng của bạn ):  
                  <input type="text"  style="width:300px;"  />
                <br />
                <br />
              Địa chỉ:
				<input type="text"  style="width:300px;"  />
                <br />
                <br />
              Thành phố:
                <input type="text"  style="width:300px;"  />
                <br />
                <br />
                Quốc gia:
                <input type="text"  style="width:300px;"  />
            </div>
            
            <div class="content_half float_r checkout">
            	E-MAIL
				<input type="text"  style="width:300px;"  />
                <br />
                <br />
          SĐT<br />
				<span style="font-size:10px"></span>
                <input type="text"  style="width:300px;"  />
            </div>
            
            <div class="cleaner h50"></div>
            <h3>GIỎ HÀNG</h3>
            <h4>TỔNG TIỀN: <strong> </strong></h4>
			<p><input type="checkbox" />
			Tôi chấp nhận <a href="#">điều khoản sử dụng</a> của trang web này.</p>
            <table style="border:1px solid #CCCCCC;" width="100%">
              
                
            </table>
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