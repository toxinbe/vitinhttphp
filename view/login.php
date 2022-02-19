<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
  <?php include 'layout/head.php'; ?>
</head>

<body>
  <?php include 'layout/header-menu.php'; ?>
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
  if (isset($_SESSION["email"])) {
    echo '
      <div class="container" style="margin-top:30px;">
      <div class="reset" style="text-align:center">
          <h4>T&T Computer Xin Chào!</h4>';
    if (isset($_SESSION["hoTen"])) {
      echo '<h2>' . strip_tags($_SESSION["hoTen"]) . '</h2>';
    } else {
      echo '<h2>' . strip_tags($_SESSION["email"]) . '</h2>';
    }
    echo '
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
                          <div class="col-md-10"><input class="form-input" style="margin:0;" type="email" name="email" value="' . strip_tags($_SESSION["email"]) . '"disabled></div>
                      </div>
                      <hr style="margin:30px 0; width:100%;">
                      <form action="../controller/xulydoimk.php" method="post">
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
                  <form action="../controller/xulythongtin-kh.php" method="post">
                        <div class="row reset thay-mk">
                          <div class="col-md-4" style="line-height:47px"><i class="fas fa-id-card"></i> Họ và Tên</div>';
    if (isset($_SESSION["hoTen"])) {
      echo '<div class="col-md-8"><input class="form-input txt-dc" type="text" name="hoVaTen" value="' . strip_tags($_SESSION["hoTen"]) . '"></div>';
    } else {
      echo '<div class="col-md-8"><input class="form-input txt-dc" type="text" name="hoVaTen"></div>';
    }
    echo '
                        </div>
                        <div class="row reset thay-mk">
                          <div class="col-md-4" style="line-height:47px;"><i style="padding:0 4.5px !important;" class="fas fa-mobile-alt"></i> Số điện thoại</div>';
    if (isset($_SESSION["soDienThoai"])) {
      echo '<div class="col-md-8"><input class="form-input txt-dc" type="text" name="soDienThoai" value="' . strip_tags($_SESSION["soDienThoai"]) . '"></div>';
    } else {
      echo '<div class="col-md-8"><input class="form-input txt-dc" type="text" name="soDienThoai"></div>';
    }
    echo '
                        </div>
                        <div class="row reset thay-mk">
                          <div class="col-md-4" style="line-height:47px"><i style="padding:0 3.375px !important;" class="fas fa-map-marker-alt"></i> Địa chỉ</div>';
    if (isset($_SESSION["diaChi"])) {
      echo '<div class="col-md-8"><input class="form-input txt-dc" type="text" name="diaChi" value="' . strip_tags($_SESSION["diaChi"]) . '"></div>';
    } else {
      echo '<div class="col-md-8"><input class="form-input txt-dc" type="text" name="diaChi"></div>';
    }
    echo '
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

                                              include_once '../admin/model/donhang.php';
                                              include_once '../admin/model/chitietdonhang.php';
                                              include_once '../admin/model/sanpham.php';
                                              include_once '../admin/model/database.php';
                                              include_once '../admin/controller/hamtienich.php';
                                              $db = new Database();
                                              $DonHang = new DonHang();
                                              $query = $DonHang->queryLayDanhSachDonHang(); //tim ctdh  && $DanhSachDonHang['mand']= $_SESSION['mand'] 
                                              $DanhSachDonHang = $db->timDanhSach($query);
                                              if ($DanhSachDonHang != null) {
                                                foreach ($DanhSachDonHang as $dh) {
                                                  echo '<form action="../controller/xulydonhang.php?madh=' . $dh['madh'] . '" method="post" enctype="multipart/form-data">';
                                                  if ($dh['mand'] == $_SESSION['mand']) {
                                                    $flagDH = 0;
                                                    $ChiTietDonHang = new ChiTietDonHang();
                                                    $query = $ChiTietDonHang->queryLayDanhSachChiTietDonHang(); //tim ctdh 
                                                    $DanhSachChiTietDonHang = $db->timDanhSach($query);                                                    
                                                    if ($DanhSachChiTietDonHang != null) {
                                                      foreach ($DanhSachChiTietDonHang as $ctdh) {
                                                        if ($ctdh['madh'] == $dh['madh']) {
                                                          $masp = $ctdh['masp'];
                                                          $SanPham = new SanPham();
                                                          $query = $SanPham->queryTimSanPhamTheoMa();
                                                          $param = array(":masp" => $masp);
                                                          $sanpham = $db->timMotDoiTuong($query, $param);
                                                          if ($sanpham != null) {
                                                            if ($flagDH == 0) {
                                                              echo ' <td>#' . $dh['madh'] . '</td>';
                                                              $flagDH++;
                                                            } else {
                                                              echo ' <td style="border-top: 0px"></td>';
                                                            }
                                                            echo '
                                                            <td><img class="hinh-anh" src="../view/img/uploads/' . $sanpham['hinh'] . '"></td>
                                                            <td class="reset">
                                                            <p>' . $sanpham['tensp'] . '</p>
                                                            <p style="color:#777;font-size:14px;">Mã SP: ' . $ctdh['masp'] . '</p>
                                                            <p>x' . $ctdh['soluong'] . '</p>
                                                            </td>                      
                                                            <td style="text-align: right;padding-right:10px">' . number_format($ctdh['soluong'] * $ctdh['giaban'], 0, ",", ".") . 'đ</td>
                                                            
                                                            <input type="text" hidden  name="tinhtrang" value="'.$dh["tinhtrang"].'">
                                                            
                                                            </tr>';
                                                          }
                                                        }
                                                      }
                                                    }
                                                    echo '<tr style="border-bottom: 2px solid #ccc">
                                                          
                                                          ';
                                                          if($dh['tinhtrang']=="0"){
                                                            echo'<td colspan="2" style="font-size:14px;">
                                                            <button class="huy-don-hang" name="btnHuy" value="huy" type="submit">Hủy đơn hàng</button>
                                                            </td>
                                                            <td class="none"><button style="background-color:#ffb400; padding-top:8px; padding-bottom:8px; font-size: 15px; color:black;" type="button" class="mb-2 btn btn-sm btn-outline-warning mr-1 btn-font">'.hienThiTinhTrangDonHang($dh['tinhtrang']).'</button></td>
                                                            ';  
                                                        }else if($dh['tinhtrang']=="1"){
                                                            echo'<td colspan="2" style="font-size:14px;">
                                                            </td>
                                                            <td class="none"><button style="background-color:#00b8d8; padding-top:8px; padding-bottom:8px; font-size: 15px; color:black;" type="button" class="mb-2 btn btn-sm btn-outline-success mr-1 btn-font">'.hienThiTinhTrangDonHang($dh['tinhtrang']).'</button></td>';
                                                        }
                                                        else if($dh['tinhtrang']=="2"){
                                                            echo'<td colspan="2" style="font-size:14px;">
                                                            </td>
                                                            <td class="none"><button style="background-color:#17c671; padding-top:8px; padding-bottom:8px; font-size: 15px; color:black;" type="button" class="mb-2 btn btn-sm btn-outline-success mr-1 btn-font">'.hienThiTinhTrangDonHang($dh['tinhtrang']).'</button></td>';
                                                        }
                                                        else if($dh['tinhtrang']=="3"){
                                                            echo'<td colspan="2" style="font-size:14px;">
                                                            </td>
                                                            <td class="none"><button style="background-color:#c4183c; padding-top:8px; padding-bottom:8px; font-size: 15px; color:white;" type="button" class="mb-2 btn btn-sm btn btn-outline-danger mr-1 btn-font">'.hienThiTinhTrangDonHang($dh['tinhtrang']).'</button></td>';
                                                        } 
                                                          echo '
                                                          <td  style="text-align: right;font-size:22px;color:#f00">
                                                          <p>' . number_format($dh['tongtien'], 0, ",", ".") . 'đ</p><br><br>
                                                          </td>
                                                          </tr>
                                                                                                      ';
                                                  }
                                                  echo '</form>';
                                                }
                                              }
                                                echo '</tbody>
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
  } else {
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
                        <form id="frmDangNhap" action="../controller/xulylogin.php" name="dangNhap" method="post">
                                <h4>Đăng nhập vào tài khoản cá nhân</h4>
                                <input class="form-input" type="email" id="txtEmailDangNhap" name="txtEmail" placeholder="Email" required>
                                <input class="form-input" type="password" id="txtPasswordDangNhap" name="txtPassword" placeholder="Mật khẩu (Gồm 6 - 28 ký tự)" required>
                                <a href="quen-mat-khau.php">Quên mật khẩu?</a>
                                <button value="Đăng nhập" id="btnDangNhap" name="dangNhap" class="form-input" type="submit">ĐĂNG NHẬP</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="dangky">
                          <form id="frmDangKy" name="dangKy" action="../controller/xulydangky.php" method="post">
                                  <h4>Đăng ký tài khoản cá nhân mới</h4>
                                  <input class="form-input" type="email" id="txtEmailDangKy" name="txtEmail" placeholder="Email" required>
                                  <input class="form-input" type="password" id="txtPasswordDangKy" name="txtPassword" placeholder="Mật khẩu (Gồm 6 - 28 ký tự)" required>
                                  <input class="form-input" type="password" id="txtRePasswordDangKy" name="txtRePassword" placeholder="Nhập lại mật khẩu" required>
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
  <?php include 'layout/footer.php'; ?>
  
</body>

</html>