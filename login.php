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
     if(isset($_SESSION["email"])){
      echo'
      <div class="container" style="margin-top:30px;">
      <div class="reset" style="text-align:center">
          <h4>T&T Computer Xin Chào!</h4>';
          if(isset($_SESSION["hoTen"])){
            echo'<h2>'.$_SESSION["hoTen"].'</h2>';
          }else{
            echo'<h2>'.$_SESSION["email"].'</h2>';
          }
          echo'
          <br>
      </div>
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
              <div role="tabpanel">
                <ul class="product-tab" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#taikhoan" aria-controls="taikhoan" role="tab" data-toggle="tab">Tài Khoản</a>
                  </li>
                  <li role="presentation">
                    <a href="#diachi" aria-controls="diachi" role="tab" data-toggle="tab">Địa Chỉ</a>
                  </li>
                  <li role="presentation">
                    <a href="#donhang" aria-controls="donhang" role="tab" data-toggle="tab">Đơn Hàng</a>
                  </li>
                  <!-- <li role="presentation">
                    <a href="login.php">Đăng Xuất</a>
                  </li> -->
                </ul>
                <div class="col-md-2"></div>
                <div class="tab-content">
                  <div role="tabpanel" class="tai-khoan tab-pane fade in active col-md-8" id="taikhoan">
                      <div class="row reset">
                          <div class="col-md-2" style="line-height:47px"><i class="fas fa-envelope"></i> Email</div>
                          <div class="col-md-10"><input class="form-input" style="margin:0;" type="email" name="email" value="'.$_SESSION["email"].'"disabled></div>
                      </div>
                      <hr style="margin:30px 0; width:100%;">
                      <form action="xulydoimk.php" method="post">
                        <p style="text-align:center;font-size:larger">Thay đổi mật khẩu</p>
                        <div class="row reset thay-mk">
                          <div class="col-md-5" style="line-height:47px"><i class="fas fa-unlock"></i> Mật khẩu cũ</div>
                          <div class="col-md-7"><input class="form-input txt-mk" type="password" name="oldpassword"></div>
                        </div>
                        <div class="row reset thay-mk">
                          <div class="col-md-5" style="line-height:47px"><i class="fas fa-lock"></i> Mật khẩu mới</div>
                          <div class="col-md-7"><input class="form-input txt-mk" type="password" name="newpassword"></div>
                        </div>
                        <div class="row reset thay-mk">
                          <div class="col-md-5" style="line-height:47px"><i class="fas fa-lock"></i> Nhập lại mật khẩu mới</div>
                          <div class="col-md-7"><input class="form-input txt-mk" type="password" name="renewpassword"></div>
                        </div>
                        <div style="text-align:center;">
                          <button style="margin:20px 0 0;width:40%;" type="submit">THAY ĐỔI</button>
                        </div>
                      </form>
                  </div>
                  <div role="tabpanel" class="dia-chi tab-pane fade col-md-8" id="diachi">
                  <form action="xulythongtin-kh.php" method="post">
                        <div class="row reset thay-mk">
                          <div class="col-md-4" style="line-height:47px"><i class="fas fa-id-card"></i> Họ và Tên</div>';
                          if(isset($_SESSION["hoTen"])){
                            echo'<div class="col-md-8"><input class="form-input txt-dc" type="text" name="hoVaTen" value="'.$_SESSION["hoTen"].'"></div>';
                          }else{
                            echo'<div class="col-md-8"><input class="form-input txt-dc" type="text" name="hoVaTen"></div>';
                          }                          
                          echo'
                        </div>
                        <div class="row reset thay-mk">
                          <div class="col-md-4" style="line-height:47px;"><i style="padding:0 4.5px !important;" class="fas fa-mobile-alt"></i> Số điện thoại</div>';
                          if(isset($_SESSION["soDienThoai"])){
                            echo'<div class="col-md-8"><input class="form-input txt-dc" type="text" name="soDienThoai" value="'.$_SESSION["soDienThoai"].'"></div>';
                          }else{
                            echo'<div class="col-md-8"><input class="form-input txt-dc" type="text" name="soDienThoai"></div>';
                          }
                          echo'
                        </div>
                        <div class="row reset thay-mk">
                          <div class="col-md-4" style="line-height:47px"><i style="padding:0 3.375px !important;" class="fas fa-map-marker-alt"></i> Địa chỉ</div>';
                          if(isset($_SESSION["diaChi"])){
                            echo'<div class="col-md-8"><input class="form-input txt-dc" type="text" name="diaChi" value="'.$_SESSION["diaChi"].'"></div>';
                          }else{
                            echo'<div class="col-md-8"><input class="form-input txt-dc" type="text" name="diaChi"></div>';
                          } 
                        echo'
                        </div>
                        <div style="text-align:center;">
                          <button style="margin:20px 0 0;width:40%;" type="submit">LƯU</button>
                        </div>
                      </form>
                  </div>
                  <div role="tabpanel" class="don-hang tab-pane fade" id="donhang">
                                      <table class="table">
                                      <thead class="bg-light">
                                        <tr>
                                          <th scope="col" class="border-0">Mã đơn hàng</th>
                                          <th scope="col" class="border-0">Hình ảnh</th>
                                          <th scope="col" class="border-0">Thông tin sản phẩm</th>
                                          <th scope="col" class="border-0" style="text-align: right;padding-right:20px">Thành tiền</th>
                                        </tr>
                                      </thead>
                                      <tbody>';
                                        $arrMaSP=array("123456","147258","654321");
                                        $arrMaSP=array("SP01","SP02","SP03");
                                        $arrTenHinh=array("pc-gaming","pc-streamer","laptop-3");
                                        $arrTenSP=array("PC Gaming","PC Streamer","Laptop Lập Trình");
                                        $arrSoLuong=array(1,2,3);
                                        $arrGia=array(10000000,25000000,9999999);
                                        for($i=0;$i<count($arrMaSP);$i++){
                                          $tongDonHang=0;
                                          $soSanPhamHienThiRandom=rand(1,3);
                                          for($j=0;$j<$soSanPhamHienThiRandom;$j++){
                                            $sanPhamRandom=rand(0,2);
                                            echo '
                                            <tr>';
                                            if($j==0){
                                              echo' <td rowspan="'.($soSanPhamHienThiRandom+1).'">#'.$arrMaSP[$i].'</td>';
                                            }
                                            $tongDonHang+=$arrGia[$sanPhamRandom]*$arrSoLuong[$sanPhamRandom];
                                            echo '
                                            <td><img class="hinh-anh" src="img/'.$arrTenHinh[$sanPhamRandom].'.jpg"></td>
                                            <td class="reset">
                                            <p>'.$arrTenSP[$sanPhamRandom].'</p>
                                            <p style="color:#777;font-size:14px;">Mã SP: '.$arrMaSP[$sanPhamRandom].'</p>
                                            <p>x'.$arrSoLuong[$sanPhamRandom].'</p>
                                            </td>                      
                                            <td style="text-align: right;padding-right:10px">'.number_format($arrGia[$sanPhamRandom]*$arrSoLuong[$sanPhamRandom],0,",",".").'đ</td>
                                            </tr>';
                                          }
                                          echo'<tr style="border-bottom: 2px solid #ccc">
                                            <td colspan="2" style="font-size:14px;">
                                            <button class="huy-don-hang" type="submit">Hủy đơn hàng</button>
                                            </td>
                                            <td  style="text-align: right;font-size:22px;color:#f00">
                                            <p>'.number_format($tongDonHang,0,",",".").'đ</p><br><br>
                                            </td>
                                          </tr>
                                          ';
                                        }                                          
                                        echo'</tbody>
                                    </table>
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
          </div>
          <div class="col-md-2"></div>
      </div>
  </div><br><br><br>
  ';
      }
      else{
          echo '
          <div class="container" style="margin-top: 30px;">
          <div class="row">
            <div class="col-md-3"></div>          
              
              <div class="col-md-6">
              <div role="tabpanel">
                      <ul class="product-tab" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#dangnhap" aria-controls="dangnhap" role="tab" data-toggle="tab">Đăng Nhập</a>
                        </li>
                        <li role="presentation" id="khungDangKy">
                          <a href="#dangky" aria-controls="dangky" role="tab" data-toggle="tab">Đăng Ký</a>
                        </li>
                      </ul>
                      <div class="col-md-2"></div>
                      <div class="tab-content col-md-8">
                        <div role="tabpanel" class="tab-pane fade in active" id="dangnhap">
                        <form id="frmDangNhap" action="xulylogin.php" name="dangNhap" method="post">
                                <h4>Đăng nhập vào tài khoản cá nhân</h4>
                                <input class="form-input" type="email" id="txtEmailDangNhap" name="email" placeholder="Email" required>
                                <input class="form-input" type="password" id="txtPasswordDangNhap" name="password" placeholder="Mật khẩu (Gồm 6 - 28 ký tự)" required>
                                <a href="quen-mat-khau.php">Quên mật khẩu?</a>
                                <button value="Đăng nhập" id="btnDangNhap" name="dangNhap" class="form-input" type="submit">ĐĂNG NHẬP</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="dangky">
                          <form id="frmDangKy" name="dangKy" action="xulydangky.php" method="post">
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
              
            <div class="col-md-3"></div>
          </div>
        </div> 
          ';
      }
    ?>
    <?php include 'layout/footer.php';?>
  </body>
</html>