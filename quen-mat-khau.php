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
                        <h2><i class="fas fa-user"></i></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     if(isset($_SESSION['nhanMaXacThuc'])){
        echo '
          <div class="container" style="margin-top: 30px;">
          <div class="row">
            <div class="col-md-3"></div>          
              
              <div class="col-md-6">
              <div role="tabpanel">
                      <ul class="product-tab" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#datlaimatkhau" aria-controls="datlaimatkhau" role="tab" data-toggle="tab">Đặt Lại Mật Khẩu</a>
                        </li>
                      </ul>
                      <div class="col-md-2"></div>
                      <div class="tab-content col-md-8">
                        <div role="tabpanel" class="tab-pane fade in active" id="datlaimatkhau">
                        <form action="xulyquenmk.php" method="post">
                                <h4>Đặt lại mật khẩu cho tài khoản cá nhân</h4>
                                <input class="form-input" type="password" name="password" placeholder="Mật khẩu">
                                <input class="form-input" type="password" name="repassword" placeholder="Nhập lại mật khẩu">
                                <input class="form-input" type="text" name="maXacThuc" placeholder="Nhập mã xác thực (Gồm 4 chữ số)">
                                <button value="Đặt lại mật khẩu" name="datLaiMatKhau" class="form-input" type="submit">Đặt lại mật khẩu</button>
                            </form>
                        </div>
                      </div>
                      <div class="col-md-2"></div>
                    </div>    
            </div>
              
            <div class="col-md-3"></div>
          </div>
        </div> 
          ';
        unset($_SESSION['nhanMaXacThuc']);
      }
      else{
          echo '    <div class="container" style="margin-top: 30px;">
          <div class="row">
            <div class="col-md-3"></div>          
              
              <div class="col-md-6">
              <div role="tabpanel">
                      <ul class="product-tab" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#datlaimatkhau" aria-controls="datlaimatkhau" role="tab" data-toggle="tab">Đặt Lại Mật Khẩu</a>
                        </li>
                      </ul>
                      <div class="col-md-2"></div>
                      <div class="tab-content col-md-8">
                        <div role="tabpanel" class="tab-pane fade in active" id="datlaimatkhau">
                        <form action="xulyquenmk.php" method="post">
                                <h4>Đặt lại mật khẩu cho tài khoản cá nhân</h4>
                                <input class="form-input" type="email" name="email" placeholder="Email">
                                <button value="Nhận mã xác thực" name="nhanMaXacThuc" class="form-input" type="submit">Nhận mã xác thực</button>
                            </form>
                        </div>
                      </div>
                      <div class="col-md-2"></div>
                    </div>    
            </div>              
            <div class="col-md-3"></div>
          </div>
        </div>
          ';
      }
    ?>
    <?php include 'layout/footer.php';?>
  </body>
</html>