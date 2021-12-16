<?php
session_start();
if (!isset($_SESSION["dangKy"])) $_SESSION["dangKy"]=array();//neu chua co khoi tao de khong bi loi neu co roi thi bo qua
?>
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
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo2.png"></a></h1>
                    </div>
                </div>
                <div class="col-sm-5">                <!-- khung tim kiem -->
                    <form action="#" method="GET" class="form-search">            
                        <div class="row reset tim-kiem" style="margin-left:0px;">
                            <input style="max-width:100%!important;height:47px;" name="query" type="text" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
                            <button style="position:absolute;height:47px;" class="tm-search-button" type="submit" style="font-size:large;">
                                <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                            </button>                            
                        </div>                             
                    </form>
                    <div class="khung-tu-khoa">
                        <ul class="tu-khoa">Từ khóa hot:
                            <li>
                                <a href="#">máy bộ chơi game</a>
                            </li>   
                            <li>  
                                <a href="#">máy bộ đồ họa</a>
                            </li>
                            <li>
                                <a href="#">laptop văn phòng</a>
                            </li>
                            <li>
                                <a href="#">laptop lập trình</a>
                            </li>
                            <li>
                                <a href="#">laptop đồ họa</a>
                            </li>
                        </ul>   
                    </div>                    
                </div>

                <div class="col-sm-3" style="padding:0;">
                    <div class="shopping-item o-dang-nhap">
                        <?php
                            if(isset($_SESSION["email"])){
                            echo'<a href="login.php"><i style="margin-left:0;" class="fas fa-user-circle"></i> '.$_SESSION["email"].'</a>
                                <ul class="dropdown">
                                <li><a href="xulylogout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></li>
                                </ul>';
                            }else{
                                echo '<a href="login.php"><i style="margin-left:0;" class="fas fa-user"></i> Đăng nhập</a>';
                            }
                        ?>
                    </div>
                    <div class="shopping-item" style="margin-bottom:20px;">
                        <a href="gio-hang.php"><i style="margin-left:0;" class="fa fa-shopping-cart"></i> Giỏ hàng
                        <?php
                        if(isset($_SESSION)&&isset($_SESSION["tongSoLuongMua"])){
                            if($_SESSION["tongSoLuongMua"]>0){
                                echo '                        
                                <span class="product-count">'.$_SESSION["tongSoLuongMua"].'</span>
                                ';
                            }
                        }else{
                            echo '';
                        }
                        ?>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>  
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">TRANG CHỦ</a></li> <!-- css -->   
                        <li><a href="may-bo.php">MÁY BỘ</a></li> <!-- css -->   
                        <li class="reset">
                            <a href="laptop.php">LAPTOP</a>
                            <ul class="dropdown" style="width:fit-content !important;"> 
                                <li><a href="">ASUS</a></li>
                                <li><a href="">ACER</a></li>
                                <li><a href="">DELL</a></li>
                                <li><a href="">MSI</a></li>
                            </ul>                           
                        </li> 
                        <li><a href="bao-hanh.php">BẢO HÀNH</a></li> <!-- css -->
                        <li class="reset">
                            <a href="tin-tuc.php">TIN TỨC</a>
                            <ul class="dropdown">
                                <li><a href="">CÔNG NGHỆ</a></li>
                                <li><a href="">TUYỂN DỤNG</a></li>
                            </ul>                           
                        </li> <!-- css -->
                        <li><a href="lien-he.php">LIÊN HỆ</a></li> <!-- css -->
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div id="fb-root"></div>
    <script   script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="B3LInnqr"></script>