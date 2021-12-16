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
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Máy Bộ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">                   
                    
                    <?php include 'layout/sidebar.php';?>

                </div>
                
<?php
$arrMaSP=array("SP01","SP02","SP03");
$arrTenHinh=array("pc-gaming","pc-streamer","laptop-3");
$arrTenSP=array("PC Gaming","PC Streamer","Laptop Lập Trình");
$arrLoai=array("PC","PC","Laptop");
$arrHang=array("T&T","T&T","Asus");
$arrBaoHanh=array(6,12,24);
$arrSoLuong=array(10,0,3);
$arrGia=array(10000000,25000000,9999999);
$SALE=1.25;
$TEST=0;
echo'
<div class="col-md-8">
<div class="product-content-right">
    <div class="product-breadcroumb">
        <a href="index.php">Trang Chủ</a>
        <a href="may-bo.php">'.$arrLoai[$TEST].'</a>
        <a href="chi-tiet-san-pham.php">'.$arrTenSP[$TEST].'</a>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="product-images">
                <div class="product-main-img">
                    <img src="img/'.$arrTenHinh[$TEST].'.jpg" alt="">
                </div>
                
                <div class="product-gallery">
                    <img src="img/'.$arrTenHinh[$TEST].'.jpg" alt="">
                    <img src="img/'.$arrTenHinh[$TEST].'.jpg" alt="">
                    <img src="img/'.$arrTenHinh[$TEST].'.jpg" alt="">
                </div>
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="product-inner">
                <form action="xulygiohang.php" method="post" class="cart">

                    <h2 class="product-name ten-sp">'.$arrTenSP[$TEST].'</h2>
                    <div class="product-inner-category">
                        <p>Mã: '.$arrMaSP[$TEST].'</p>
                    </div>
                    <div class="product-inner-category">
                        <p>Loại: <a href="may-bo.php">'.$arrLoai[$TEST].'</a></p>
                        <p>Hãng: '.$arrHang[$TEST].'</p>
                        <p>Bảo hành: '.$arrBaoHanh[$TEST].' tháng</p>';
                        if($arrSoLuong[$TEST]>0){
                            echo '<p>Tình trạng: <span style="color:#0f0;">Còn hàng</span></p>';
                        }else{
                            echo '<p>Tình trạng: <span style="color:#f00;">Hết hàng</span></p>';
                        }
                    echo'</div> 
                    <div class="product-inner-price gia">
                        <ins>'.number_format($arrGia[$TEST],0,",",".").'đ</ins> <del>'.number_format($arrGia[$TEST]*$SALE,0,",",".").'đ</del>
                    </div>    
                
                    <div class="quantity">
                        <input style="display: none;" type="text" name="maSanPham" value="'.$arrMaSP[$TEST].'">
                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="soLuongMua" min="1" step="1">
                    </div>
                    <button class="add_to_cart_button" type="submit">Thêm Giỏ Hàng</button>
                </form>   

                
                <div role="tabpanel">
                    <ul class="product-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông Tin</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bình Luận</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="reset">
                            <ul class="thong-so"><h4>Thông số kỹ thuật:</h4>
                                <li>CPU: </li>
                                <li>MAIN: </li>
                                <li>RAM: </li>
                                <li>VGA: </li>
                                <li>SSD: </li>
                                <li>HDD: </li>
                                <li>NGUỒN: </li>
                                <li>CASE: </li>
                            </ul><br>
                            <ul class="thong-so"><h4>Quà tặng:</h4>
                                <li>PHÍM: </li>
                                <li>CHUỘT: </li>
                                <li>TAI NGHE: </li>
                            </ul><br>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <div class="reset">
                            <h3>Bình luận</h3>
                            </div>';
                            include 'layout/cmt-sp.php';
                            echo '
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    
    <div class="related-products-wrapper">
        <h2 class="related-products-title">SẢN PHẨM TƯƠNG TỰ</h2>
        <div class="related-products-carousel">';

            for($i=0;$i<12;$i++){
                echo '<div class="single-product">
                <div class="product-f-image">
                    <img src="img/pc-gaming.jpg" alt="">
                    <div class="product-hover">
                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</a>
                        <a href="" class="view-details-link"><i class="fa fa-link"></i> XEM CHI TIẾT</a>
                    </div>
                </div>

                <h2><a href="">PC Gaming</a></h2>

                <div class="product-carousel-price">
                    <ins>10.000.000đ</ins> <del>12.345.678đ</del>
                </div> 
            </div>';
            }

            echo '                                     
        </div>
    </div>
</div>                    
</div>

';
?>

            </div>
        </div>
    </div>


   <?php include 'layout/footer.php';?>
  </body>
</html>