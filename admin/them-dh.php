<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <?php 
    include 'layout/check.php';
    include 'layout/head.php';?>
  </head>
  <body class="h-100">
        <?php 
    // include 'layout/accent-color.php';
    ?>
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <?php include 'layout/sidebar.php';?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <?php include 'layout/navbar.php';?>
            <!-- / .main-navbar -->
          </div>
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Quản lý</span>
                <h3 class="page-title">Xem thông tin Đơn Hàng</h3>
              </div>
            </div>
            <!-- End Page Header -->
              <div class="col-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <div class="row">
                      <div class="col-md-6">
                        <h6 class="m-0">Thông Tin</h6>
                      </div>
                      <div class="col-md-6" style="text-align:right">
                        <a href="ds-dh.php" class="mb-2 btn btn-primary mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-arrow-left"></i> Trở về</a>
                      </div>
                    </div>
                  </div>

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">

                    <form>
                      <div class="row">
                        <div class="col-8">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feMaDonHang">Mã đơn hàng</label>
                                <input type="text" class="form-control" id="feMaDonHang" value="DH01" disabled> </div>
                              <div class="form-group col-md-6">
                                <label for="feHoTen">Tên khách hàng</label>
                                <input type="text" class="form-control" id="feHoTen"placeholder="Họ và Tên"> </div>                              
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feNgayTaoDon">Ngày tạo đơn</label>
                                <input type="date" class="form-control" id="feNgayTaoDon" value="<?php echo date("Y-m-d");?>">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="feSoDienThoai">Số điện thoại</label>
                                <input type="text" class="form-control" id="feSoDienThoai" placeholder="Số điện thoại">
                              </div>                              
                            </div>
                            <div class="form-row mb-3">
                              <div class="form-group col-md-6">
                                <label for="feTrangThai">Trạng thái</label>
                                <select id="feTrangThai" class="form-control">
                                    <option value="1" selected>Đã lên đơn</option>
                                    <option value="2">Đang đi giao</option>
                                    <option value="3">Đã hoàn thành</option>
                                  </select>                              </div>
                              <div class="form-group col-md-6">
                                <label for="feDiaChi">Địa chỉ</label>
                                <input type="text" class="form-control" id="feDiaChi" placeholder="Địa chỉ">
                              </div>                              
                            </div>                
                        </div>
                        <div class="col-4">
                          <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feGhiChu">Ghi chú</label>
                                <textarea style="padding-top:9.5px;padding-bottom:9.5px;" class="form-control" name="feGhiChu" rows="5" placeholder="Ghi chú"></textarea>
                              </div>
                          </div>
                          <div class="form-row" >
                            <div class="form-group col-md-12">
                              <div style="text-align:right;">
                                <button type="submit" class="btn btn-mb-2 btn btn-secondary mr-2 btn-font"><i class="fas fa-undo"></i> Nhập lại</button>
                                <button type="submit" class="btn btn-mb-2 btn btn-success mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-plus"></i> Thêm</button>
                              </div>   
                            </div>                         
                          </div>
                        </div>
                      </div>
                      </form>

                    </li>
                  </ul>

                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Mã sản phẩm</th>
                          <th scope="col" class="border-0">Tên sản phẩm</th>
                          <th scope="col" class="border-0">Số lượng</th>
                          <th scope="col" class="border-0">Giá</th>
                          <th scope="col" class="border-0">Thành tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $arrMaSP=array("SP01","SP02","SP02");
                        $arrTenSP=array("PC Gaming","PC Streamer","Laptop Lập Trình");
                        $arrSoLuong=array(10,1,100);
                        $arrGia=array(10000000,25000000,9999999);
                        for($i=0;$i<count($arrMaSP);$i++) {
                          $arrThanhTien=$arrGia[$i]*$arrSoLuong[$i];
                          echo '
                          <tr>
                          <td>'.$arrMaSP[$i].'</td>
                          <td>'.$arrTenSP[$i].'</td>
                          <td>'.$arrSoLuong[$i].'</td>                          
                          <td>'.number_format($arrGia[$i],0,",",".").'</td>                          
                          <td>'.number_format($arrThanhTien,0,",",".").'</td>                                 
                          </tr>
                          ';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          <?php include 'layout/footer.php';?>
        </main>
      </div>
    </div>
<?php include 'layout/script.php';?>
  </body>
</html>