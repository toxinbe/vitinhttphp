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
                                                                      
                                                          <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
                                                              <div class="text-center bs-wizard-stepnum">Thông tin giao hàng</div>
                                                              <div class="progress">
                                                                  <div class="progress-bar"></div>
                                                              </div>
                                                              <a href="#" class="bs-wizard-dot"></a>
                                                          </div>
                                                                      
                                                          <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
                                                              <div class="text-center bs-wizard-stepnum">Hình thức thanh toán</div>
                                                              <div class="progress">
                                                                  <div class="progress-bar"></div>
                                                              </div>
                                                              <a href="#" class="bs-wizard-dot"></a>
                                                          </div>
                                                                      
                                                          <div class="col-xs-3 bs-wizard-step active"><!-- active -->
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
                  
                  

                          <div class="container">
                          <div class="thong-bao reset">
                            <div class="row">
                              <div class="col-md-1"></div>
                              <div class="col-md-10" style="border: 2px solid #ccc; text-align:justify;">
                                
                    <!-- ***************** -->
                                <div class="row">
                                  <div class="col-md-5" style="padding: 35px; padding-right:0;">
                                   <?php include 'layout/svg.php';?>
                                    </div>
                                  <div class="col-md-7 reset" style="padding-top: 60px; font-family:'Raleway';font-weight:bold;text-align:center;">
                                    <h1>ĐẶT HÀNG THÀNH CÔNG!</h1>
                                    <br>
                                    <h3 style="font-style:italic;">Cảm ơn bạn đã đặt hàng tại T&T Computer</h3>
                                    <br>
                                    <br>
                                    <p style="font-size:18px;">Theo dõi đơn hàng bằng mã</p>
                                    <div class="row" style="margin-top:5px;">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4"  style="padding:5px;font-size:40px; background-color:#5a88ca;">
                                        <p>XXXXX</p>
                                      </div>
                                      <div class="col-md-4"></div>
                                    </div>
                                    <br><br>
                                    <div style="padding:0 20px;font-weight: bold;">
                                      <p><i class="fas fa-exclamation-triangle"></i> Lưu ý: Nhằm giúp việc xử lý đơn hàng nhanh hơn nữa, T&T Computer sẽ liên hệ qua SĐT hoặc Email cho bạn để xác nhận đơn hàng</p>
                                    </div>
                                  </div>
                                </div>
                    <!-- ***************** -->
                    
                              </div>
                              <div class="col-md-1"></div>
                            </div>
                          </div>
                        </div>
                          <br><br>
                          <?php
                          unset($_SESSION["xacThucThongTin"]);
                          unset($_SESSION["hinhThucThanhToan"]);
                          unset($_SESSION["tongSoLuongMua"]);
                          unset($_SESSION["maSanPham"]);
                          unset($_SESSION["tenHinh"]);
                          unset($_SESSION["tenSanPham"]);
                          unset($_SESSION["donGia"]);
                          unset($_SESSION["soLuongMua"]);
                          ?>