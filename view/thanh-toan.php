<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <?php 
    if(!isset($_SESSION)){
      session_start();
    }
     if(count($_SESSION["giohang"])<=0){//gio hang rong thi chuyen ve trang gio hang
      header("Location: gio-hang.php");
      exit();
     }
    include '../view/layout/head.php';?>
    <link rel="stylesheet" href="../view/css/step-line.css">

</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fas fa-mobile-alt"></i> Hotline: 090.xxx.xnxx</a></li>
                            <li><a href="#"><i class="fas fa-mobile-alt"></i> Zalo: 090.xxx.xnxx</a></li>
                            <li><a href="#"><i class="fas fa-map-marker-alt"></i> Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8,
                                    TP.HCM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    <?php
     if(isset($_SESSION["email"]))
     {
            if(isset($_SESSION["hoTen"])&&isset($_SESSION["soDienThoai"])&&isset($_SESSION["diaChi"]))
            {
                        if(isset($_SESSION["xacThucThongTin"])){
                            if(isset($_SESSION["hinhThucThanhToan"]))
                          {
                            include '../view/layout/tt-dathanhtoan.php';
                          } 
                          else{
                                include '../view/layout/tt-chuachonhinhthuc.php';
                          }
                        }
                        else{
                          include '../view/layout/tt-chuaxacthuc.php';
                        }
            } 
            else{
              include '../view/layout/tt-chuaxacthuc.php';
            }      
      } 
      else{
          include '../view/layout/tt-chualogin.php';
      }        
    ?>
    <?php include '../view/layout/footer.php';?>
</body>

</html>