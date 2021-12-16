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
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <?php
                if(isset($_SESSION["tongSoLuongMua"])){
                    if($_SESSION["tongSoLuongMua"]>0){
                    echo'
                    <div class="row">
                    <div class="col-md-1"></div>                        
                    <div class="col-md-10">
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <form method="post" action="xulygiohang.php">
                                    <table cellspacing="0" class="shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-remove">&nbsp;</th>
                                                <th class="product-thumbnail">Hình Ảnh</th>
                                                <th class="product-name">Tên Sản Phẩm</th>
                                                <th class="product-price">Đơn Giá</th>
                                                <th class="product-quantity">Số Lượng</th>
                                                <th class="product-subtotal">Thành Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                            for($i=0; $i<count($_SESSION["maSanPham"]);$i++){
                                                if($_SESSION["soLuongMua"][$i]>0){
                                                    echo'                                        <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a title="Remove this item" class="remove"><button value="'.$_SESSION["maSanPham"][$i].'" name="xoaSanPham" type="submit"><i class="fas fa-times"></i></button>
                                                        </a> 
                                                    </td>
        
                                                    <td class="product-thumbnail">
                                                        <a href="chi-tiet-san-pham.php"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/'.$_SESSION["tenHinh"][$i].'.jpg"></a>
                                                    </td>
        
                                                    <td class="product-name">
                                                        <a href="chi-tiet-san-pham.php">'.$_SESSION["tenSanPham"][$i].'</a> 
                                                    </td>
        
                                                    <td class="product-price">
                                                        <span class="amount">'.number_format($_SESSION["donGia"][$i],0,",",".").'đ</span> 
                                                    </td>
        
                                                    <td class="product-quantity">
                                                        <div class="quantity buttons_added">
                                                            <input type="number" size="4" class="input-text qty text" title="Qty" name="soLuongMua'.$_SESSION["maSanPham"][$i].'" value="'.$_SESSION["soLuongMua"][$i].'" min="1" step="1">
                                                        </div>
                                                    </td>
        
                                                    <td class="product-subtotal">                                                
                                                        <span class="amount">'.number_format($_SESSION["donGia"][$i]*$_SESSION["soLuongMua"][$i],0,",",".").'đ</span> 
                                                    </td>
                                                    </tr>';
                                                    }   
                                                }
                                              echo '<tr>
                                                <td class="actions reset" colspan="6" style="text-align: right">                                                  
                                                    <input type="submit" value="Cập Nhật" name="capNhatGioHang" class="button">
                                                    <!-- <a href="thanh-toan.php" class="checkout-button button alt wc-forward">Thanh Toán</a> -->
                                                    <input style="margin-left:10px;" type="submit" value="Thanh Toán" name="thanhToanGioHang" class="checkout-button button alt wc-forward">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
        
                                
        
                            </div>                        
                        </div>                    
                    </div>
                    <div class="col-md-1"></div>                        
                </div>
                    ';
                    }else{
                    echo'
                    <div class="row">
                        <div class="col-md-1"></div>                        
                        <div class="col-md-10" style="text-align:center;">
                            <a style="width:fit-content;" href="index.php">
                                <i style="font-size:100px;" class="fas fa-cart-plus"></i>
                            </a>
                        </div>
                        <div class="col-md-1"></div>                        
                    </div>';
                    }

                }else{
                    echo'
                    <div class="row">
                        <div class="col-md-1"></div>                        
                        <div class="col-md-10" style="text-align:center;">
                            <a style="width:fit-content;" href="index.php">
                                <i style="font-size:100px;" class="fas fa-cart-plus"></i>
                            </a>
                        </div>
                        <div class="col-md-1"></div>                        
                    </div>';
                }
            ?>
            <div class="latest-product" style="margin-top:100px">
                <h2 class="related-products-title" style="margin-bottom:0">SẢN PHẨM LIÊN QUAN</h2>
                        <div class="product-carousel">
                                <?php
                                    for($i=0;$i<12;$i++){
                                        echo '<div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/phim-2.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> XEM CHI TIẾT</a>
                                            </div>
                                        </div>

                                        <h2><a href="">Phím Cơ Dare-U</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>750.000đ</ins> <del>850.000đ</del>
                                        </div> 
                                    </div>';
                                    }
                                ?>
                        </div>
                    </div>
        </div>
    </div>
    
    <?php include 'layout/footer.php';?>
  </body>
</html>