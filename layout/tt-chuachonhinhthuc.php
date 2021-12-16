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
                                            
                                <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
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
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thanh Toán</a>
          </li>
        </ul>
        <div class="col-md-2"></div>
        <div class="tab-content col-md-8">                  
          <div role="tabpanel" class="tab-pane fade in active" id="home">
                <form action="xulythanhtoan.php" method="post">
                  <h4>Chọn hình thức thanh toán</h4>
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title radio">
                          <label class="form-label" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1"><input style="height:12px;" type="radio" name="hinhThucThanhToan" value="1" checked="checked"> Thanh toán tiền mặt khi nhận hàng</label>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title radio">
                                  <label class="form-label" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2"><input style="height:12px;" type="radio" name="hinhThucThanhToan" value="2"> Thanh toán chuyển khoản</label>

                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body reset" style="text-align:center">
                          <h4>Thông tin chuyển khoản</h4>
                          <img style="width:100%; margin:5px 0;" src="https://www.sacombank.com.vn/Style%20Library/2018/images/Sacombank-Logo.png">
                          <p>Ngân hàng TMCP Sài Gòn Thương Tín</p>
                          <p>STK: 0601 9342 3100</p>
                          <p>NGUYỄN HOÀNG TIẾN</p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title radio disabled">
                                  <label class="form-label" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3"><input style="height:12px;" type="radio" name="hinhThucThanhToan" value="3" disabled> Thanh toán ví điện tử Momo</label>

                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">                                
                      </div>
                    </div>
                  </div> 
                  <button class="form-input" type="submit">THANH TOÁN</button>
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
