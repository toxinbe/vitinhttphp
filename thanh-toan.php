<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
     <?php session_start();
    include 'layout/head.php';?>
     <link rel="stylesheet" href="css/step-line.css">

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
                            <li><a href="#"><i class="fas fa-map-marker-alt"></i> Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</a></li>  
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
                            include 'layout/tt-dathanhtoan.php';
                          } 
                          else{
                                include 'layout/tt-chuachonhinhthuc.php';
                          }
                        }
                        else{
                          include 'layout/tt-chuaxacthuc.php';
                        }
            } 
            else{
              include 'layout/tt-chuaxacthuc.php';
            }      
      } 
      else{
          include 'layout/tt-chualogin.php';
      }        
    ?>
    <?php include 'layout/footer.php';?>
  </body>
</html>