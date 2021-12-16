<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <?php include 'layout/head.php';?>
  </head>
  <body>
 <?php include 'layout/header-menu.php';?>    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li class="banner-tt">
						<img src="img/h4-slide.png" alt="Slide">						
					</li>
					<li class="banner-tt">
                        <img src="img/h4-slide2.png" alt="Slide">						
					</li>
					<li class="banner-tt">
                        <img src="img/h4-slide3.png" alt="Slide">						
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-sync"></i>
                        <p>Bảo Hành 1 Đổi 1</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-shipping-fast"></i>
                        <p>Giao Hàng Miễn Phí</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-credit-card"></i>
                        <p>Thanh Toán An Toàn</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-gift"></i>
                        <p>Quà Tặng Hấp Dẫn</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Máy Bộ</h2>
                        <div class="product-carousel">
                            <?php
                             for($i=0;$i<7;$i++){
                                echo '<div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/pc-gaming.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</a>
                                        <a href="chi-tiet-san-pham.php" class="view-details-link"><i class="fa fa-link"></i> XEM CHI TIẾT</a>
                                    </div>
                                </div>                                
                                <h2><a href="chi-tiet-san-pham.php">PC Gaming</a></h2>                                
                                <div class="product-carousel-price">
                                    <ins>10.000.000đ</ins> <del>12.500.000đ</del>
                                </div> 
                            </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Laptop</h2>
                        <div class="product-carousel">
                            <?php
                             for($i=0;$i<7;$i++){
                                echo '<div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/laptop-2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</a>
                                        <a href="chi-tiet-san-pham1.php" class="view-details-link"><i class="fa fa-link"></i> XEM CHI TIẾT</a>
                                    </div>
                                </div>
                                
                                <h2><a href="chi-tiet-san-pham1.php">Laptop Lập Trình</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>9.999.999đ</ins> <del>12.499.999đ</del>
                                </div> 
                            </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr><br><br><br>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div> <!-- End brands area -->
   <?php include 'layout/footer.php';?>
  </body>
</html>