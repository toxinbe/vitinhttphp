<div class="site-branding-area">
          <div class="container">
              <div class="row">
                  <div class="col-sm-4">
                      <div class="logo">
                          <h1><a href="./"><img src="img/logo2.png"></a></h1>
                      </div>
                  </div>
                  <div class="col-sm-8">
                                                  <div class="step-line">
                                          <div class="row bs-wizard" style="border-bottom:0;">
                                          <div class="col-xs-3 bs-wizard-step complete">
                                              <div class="text-center bs-wizard-stepnum">Đăng nhập tài khoản</div>
                                              <div class="progress">
                                                  <div class="progress-bar"></div>
                                              </div>
                                              <a href="#" class="bs-wizard-dot"></a>
                                          </div>
                                                      
                                          <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                                              <div class="text-center bs-wizard-stepnum">Thông tin giao hàng</div>
                                              <div class="progress">
                                                  <div class="progress-bar"></div>
                                              </div>
                                              <a href="#" class="bs-wizard-dot"></a>
                                          </div>
                                                      
                                          <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                                              <div class="text-center bs-wizard-stepnum">Hình thức thanh toán</div>
                                              <div class="progress">
                                                  <div class="progress-bar"></div>
                                              </div>
                                              <a href="#" class="bs-wizard-dot"></a>
                                          </div>
                                                      
                                          <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                                              <div class="text-center bs-wizard-stepnum">Hoàn tất đặt hàng</div>
                                              <div class="progress">
                                                  <div class="progress-bar"></div>
                                              </div>
                                              <a href="#" class="bs-wizard-dot"></a>
                                          </div>
                                          </div>         
                                      </div>
                  </div>                
              </div>
          </div>
      </div>
       <div class="product-big-title-area" style="margin-bottom:30px;">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="product-bit-title text-center">
                          <h2>Thanh Toán</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
  

          <div class="container table-giohang">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">  
                  <div role="tabpanel">
                    <ul class="product-tab" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông Tin</a>
                      </li>
                    </ul>
                    <div class="col-md-2"></div>
                    <div class="tab-content col-md-8">
                      <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <form action="xulythanhtoan.php" method="post">
                                <h4>Nhập thông tin giao hàng</h4>
                                <?php
                                if(isset($_SESSION["hoTen"])){
                                    echo'<input class="form-input" type="text" name="hoVaTen" value="'.$_SESSION["hoTen"].'" placeholder="Họ và Tên (VD: Nguyễn Văn A)" required>';
                                }else{
                                    echo'<input class="form-input" type="text" name="hoVaTen" placeholder="Họ và Tên (VD: Nguyễn Văn A)" required>';
                                } 
                                if(isset($_SESSION["soDienThoai"])){
                                    echo'<input class="form-input" type="text" id="txtSoDienThoai" name="soDienThoai" value="'.$_SESSION["soDienThoai"].'" placeholder="Số điện thoại (VD: 0901234567)" required>';
                                }else{
                                    echo'<input class="form-input" type="text" id="txtSoDienThoai" name="soDienThoai" placeholder="Số điện thoại (VD: 0901234567)" required>';
                                }
                                if(isset($_SESSION["diaChi"])){
                                    echo'<input class="form-input" type="text" name="diaChi" value="'.$_SESSION["diaChi"].'" placeholder="Địa chỉ (VD: 180 Cao Lỗ, P4, Q8, Tp HCM)" required>';
                                }else{
                                    echo'<input class="form-input" type="text" name="diaChi" placeholder="Địa chỉ (VD: 180 Cao Lỗ, P4, Q8, Tp HCM)" required>';
                                } 
                                ?>                                
                                <button id="btnSoDienThoai" value="Đã xác thực" name="xacThucThongTin" class="form-input" type="submit">BƯỚC TIẾP THEO</button>
                            </form>
                      </div>                  
                    </div>
                    <div class="col-md-2"></div>
                  </div>
  
            </div>
            <div class="col-md-4" style="border: 1px solid #ccc;font-size:16px;">
                <?php include 'layout/table-giohang.php';?>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>