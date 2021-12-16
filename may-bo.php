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
                <?php
                for($i=0;$i<12;$i++){
                    echo '<div class="col-md-3 col-sm-6">';
                    echo '  <div class="single-shop-product san-pham">';
                    echo '      <div class="product-upper">';
                    echo '          <a href="chi-tiet-san-pham.php"><img src="img/pc-gaming.jpg" alt=""></a>';
                    echo '      </div>';
                    echo '      <h2><a href="chi-tiet-san-pham.php">Máy bộ chơi game</a></h2>';
                    echo '      <div class="product-carousel-price">';
                    echo '          <ins>10.000.000đ</ins> <del>12.500.000đ</del>';
                    echo '      </div>  ';
                    echo '      <div class="product-option-shop">';
                    echo '          <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Thêm giỏ hàng</a>';
                    echo '      </div>';                       
                    echo '  </div>';
                    echo '</div>';
                }
                ?>                
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


   <?php include 'layout/footer.php';?>
  </body>
</html>