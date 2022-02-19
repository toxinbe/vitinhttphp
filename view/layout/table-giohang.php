<div class="row" style="border-bottom: 1px solid #ccc; margin:10px 0 0;line-height: 26px;padding-bottom:5px">
              <div class="col-md-8 reset" style="padding-left:10px;">
                Giỏ hàng
              </div>
              <div class="col-md-4 reset" style="text-align:right;">
                <a id="sua-giohang" href="../controller/xulygiohang.php?action=checkout">Sửa</a>
              </div>                           
            </div>
            <?php
            if(isset($_SESSION["giohang"])){
              if(count($_SESSION["giohang"])>0){
                $_SESSION['tongtien']=0;
                foreach($_SESSION["giohang"] as $product){
                    echo '<div class="row" style="margin:10px 0 0; border-bottom: 1px solid #ccc;padding-bottom:5px">
                    <div class="col-md-6"><a href="">'.$product['tensp'].'</a></div>
                    <div class="col-md-2">x'.$product['soluong'].'</div>
                    <div class="col-md-4" style="text-align:right">'.number_format($product['soluong']*$product['dongia'],0,",",".").'đ</div>
                    </div>';
                    $_SESSION['tongtien']+=$product['soluong']*$product['dongia'];
                }
                echo '                
            <div class="row" style="margin:10px 0 0;padding-bottom:10px">
            <div class="col-md-6" style="line-height:31px;">Tổng:</div>
            <div class="col-md-6" style="text-align:right;font-size:22px;font-weight:bold;color:#f00;padding:0;">'.number_format($_SESSION['tongtien'],0,",",".").'đ</div>
          </div>
                ';
              }
            }
            ?>
