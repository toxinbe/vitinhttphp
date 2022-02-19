<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <?php include '../view/layout/head.php';?>
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
                if(isset($_SESSION["cart_item"])){
                    if(count($_SESSION["cart_item"])>0){
                    echo'
                    <div class="row">
                    <div class="col-md-1"></div>                        
                    <div class="col-md-10">
                        <div class="product-content-right">
                            <div class="woocommerce">
                                <form method="post" action="../controller/xulygiohang.php">
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
                                        $tongtien=0;
                                        if(isset($data["cart"])){

                                            foreach($data["cart"] as $product){
                                                if($data["cart"]>0){
                                                    echo'                                
                                                    <tr class="cart_item">
                                                    
                                                    <td class="product-remove">
                                                        <button value="remove" name="order_action['.$product->get_masp().']" type="submit"class="remove"><i class="fas fa-times"></i></button>
                                                        <input type="text" hidden name="product_masp['.$product->get_masp().']" value="'.$product->get_masp().'">
                                                    </td>
        
                                                    <td class="product-thumbnail">
                                                        <a href="chi-tiet-san-pham.php"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="../view/img/uploads/'.$product->get_hinh().'"></a>
                                                    </td>
        
                                                    <td class="pưroduct-name">
                                                        <a href="chi-tiet-san-pham.php">'.$product->get_tensp().'</a> 
                                                    </td>
        
                                                    <td class="product-price">
                                                        <span class="amount">'.number_format($product->get_dongia(),0,",",".").'đ</span> 
                                                    </td>
        
                                                    <td class="product-quantity">
                                                        <div class="quantity buttons_added">
                                                            <input type="number" size="4" class="input-text qty text" title="Qty" name="product_soluong['.$product->get_masp().']" value="'.$product->get_soluong().'" min="1" step="1">
                                                            
                                                        </div>
                                                    </td>
        
                                                    <td class="product-subtotal">                                                
                                                        <span class="amount">'.number_format($product->get_dongia()*$product->get_soluong(),0,",",".").'đ</span> 
                                                    </td>
                                                    
                                                    
                                                    </tr>';
                                                    $tongtien += ($product->get_dongia()*$product->get_soluong());
                                                    
                                                    }   
                                                }
                                        }
                                              echo '
                                              <tr>
                                                <td class="actions reset" colspan="6" style="text-align: right">                                                  
                                                <h5 style="font-weight: bold;">Tổng tiền: '. number_format($tongtien, 0, '', '.') .'VNĐ </h5>
                                                </td>  
                                              </tr>
                                              <tr>                                                                                  
                                                <td class="actions reset" colspan="6" style="text-align: right">                                                  
                                                    <button type="submit" value="update" name="order_action" class="button">Cập Nhật</button>
                                                    <!-- <a href="../controller/xulygiohang.php?action=order" class="checkout-button button alt wc-forward">Thanh Toán</a> --> 
                                                    <button style="margin-left:10px;" type="submit" value="order" name="order_action" class="checkout-button button alt wc-forward">Thanh Toán</button>
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
                            <a style="width:fit-content;" href="../view">
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
                            <a style="width:fit-content;" href="../view">
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
                                            <img src="../view/img/laptop-2.jpg" alt="">
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

    <?php include '../view/layout/footer.php';?>
</body>

</html>