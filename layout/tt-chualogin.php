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
                                          <div class="col-xs-3 bs-wizard-step active">
                                              <div class="text-center bs-wizard-stepnum">Đăng nhập tài khoản</div>
                                              <div class="progress">
                                                  <div class="progress-bar"></div>
                                              </div>
                                              <a href="#" class="bs-wizard-dot"></a>
                                          </div>
                                                      
                                          <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
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
                      <a href="#dangnhap" aria-controls="dangnhap" role="tab" data-toggle="tab">Đăng Nhập</a>
                    </li>
                    <li role="presentation">
                      <a href="#dangky" aria-controls="dangky" role="tab" data-toggle="tab">Đăng Ký</a>
                    </li>
                  </ul>
                  <div class="col-md-2"></div>
                  <div class="tab-content col-md-8">
                    <div role="tabpanel" class="tab-pane fade in active" id="dangnhap">
                    <form action="xulylogin.php" method="post">
                            <h4>Đăng nhập vào tài khoản cá nhân</h4>
                            <input class="form-input" type="email" id="txtEmailDangNhap" name="email" placeholder="Email" required>
                            <input class="form-input" type="password" id="txtPasswordDangNhap" name="password" placeholder="Mật khẩu (Gồm 6 - 28 ký tự)" required>
                            <a href="quen-mat-khau.php">Quên mật khẩu?</a>
                            <button value="Đăng nhập" id="btnDangNhap" name="dangNhap" class="form-input" type="submit">ĐĂNG NHẬP</button>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="dangky">
                    <form action="xulydangky.php" method="post">
                              <h4>Đăng ký tài khoản cá nhân mới</h4>
                              <input class="form-input" type="email" id="txtEmailDangKy" name="email" placeholder="Email" required>
                              <input class="form-input" type="password" id="txtPasswordDangKy" name="password" placeholder="Mật khẩu (Gồm 6 - 28 ký tự)" required>
                              <input class="form-input" type="password" id="txtRePasswordDangKy" name="repassword" placeholder="Nhập lại mật khẩu" required>
                              <div class="checkbox">
                                <label class="form-label"><input style="height:12px;" type="checkbox" name="dieuKhoan" id="dieuKhoan-id" value="1" required> Tôi đồng ý với <a href="#">điều khoản đăng ký</a></label>
                              </div>
                              <button id="btnDangKy" name="btnDangKy" class="form-input" type="submit">ĐĂNG KÝ</button>
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