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
<title>Shoes Store - About Us</title>
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
        	<h1>Xuân Xuân Bookstore</h1>
        	
        <p><a href="http://validator.w3.org/check?uri=referer" rel="nofollow">
        </a> <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"></a> Nhà sách Xuân Xuân là địa điểm thực hiện giao dịch mua bán sách. Đây là một điểm bán lẽ của công đoạn phân phối sách trong quá trình xuất bản để những tác phẩm sách đến được với người đọc. Nhà sách chúng tôi luôn đảm bảo cập nhật những quyển sách mới nhất với chất lượng đảm bảo, chế độ bảo hành đầy đủ và giá cả phải chăng nhất thị trường. Danh mục sách hiện có của cửa hàng :</p>
        <ul class="tmo_list">
        	<li>Sách giáo khoa.</li>
            <li>Sách tiếng anh.</li>
            <li>Sách tham khảo.</li>
            <li>Truyện.</li>
            <li>Từ điển.</li>
		</ul>
        <div class="cleaner h20"></div>
        <h3>Nhân viên của cửa hàng</h3>
        <p>Thanh Xuân - Quản lý cửa hàng</p>
		<p>Ngô Nga - Nhân viên bán hàng</p>
        <p>Đỗ Ngọc - Nhân viên bán hàng</p>
        <div class="cleaner"></div>
        
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