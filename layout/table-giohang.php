<div class="row" style="border-bottom: 1px solid #ccc; margin:10px 0 0;line-height: 26px;padding-bottom:5px">
              <div class="col-md-8 reset" style="padding-left:10px;">
                Giỏ hàng
              </div>
              <div class="col-md-4 reset" style="text-align:right;">
                <a id="sua-giohang" href="gio-hang.php">Sửa</a>
              </div>                           
            </div>
            <?php
            if(isset($_SESSION["tongSoLuongMua"])){
              if($_SESSION["tongSoLuongMua"]>0){
                $tongCong=0;
                for($i=0; $i<count($_SESSION["maSanPham"]);$i++){
                  if($_SESSION["soLuongMua"][$i]>0){
                    echo '<div class="row" style="margin:10px 0 0; border-bottom: 1px solid #ccc;padding-bottom:5px">
                    <div class="col-md-6"><a href="">'.$_SESSION["tenSanPham"][$i].'</a></div>
                    <div class="col-md-2">x'.$_SESSION["soLuongMua"][$i].'</div>
                    <div class="col-md-4" style="text-align:right">'.number_format($_SESSION["soLuongMua"][$i]*$_SESSION["donGia"][$i],0,",",".").'đ</div>
                    </div>';
                    $tongCong+=$_SESSION["soLuongMua"][$i]*$_SESSION["donGia"][$i];
                  }
                }
                echo '                
            <div class="row" style="margin:10px 0 0;padding-bottom:10px">
            <div class="col-md-6" style="line-height:31px;">Tổng:</div>
            <div class="col-md-6" style="text-align:right;font-size:22px;font-weight:bold;color:#f00;padding:0;">'.number_format($tongCong,0,",",".").'đ</div>
          </div>
                ';
              }
            }
            ?>
