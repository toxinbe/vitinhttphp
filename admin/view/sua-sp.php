<!doctype html>

<html class="no-js h-100" lang="en">

<head>
    <?php
  include '../controller/check.php';
  include 'layout/head.php'; ?>
</head>

<body class="h-100">
    <?php
  // include 'layout/accent-color.php';
  ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <?php include 'layout/sidebar.php'; ?>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    <?php include 'layout/navbar.php'; ?>
                    <!-- / .main-navbar -->
                </div>
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->
                    <div class="page-header row no-gutters py-4">
                        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                            <span class="text-uppercase page-subtitle">Quản lý</span>
                            <h3 class="page-title">Sửa thông tin Sản Phẩm</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-small mb-4">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="m-0">Thông Tin</h6>
                                    </div>
                                    <div class="col-md-6" style="text-align:right">
                                        <a href="ds-sp.php" class="mb-2 btn btn-primary mr-2 btn-font"
                                            style="margin:0 !important;"><i class="fas fa-arrow-left"></i> Trở về</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-3">
                                    <div class="row">
                                        <div class="col">
                                            <?php
                      if (isset($_GET['masp'])) {
                        $maSanPhamCanSua = strip_tags($_GET['masp']);
                        include '../model/database.php';
                        include '../model/sanpham.php';
                        include '../model/danhmucsp.php';
                        $db = new Database();
                        $SanPham = new SanPham();
                        $query = $SanPham->queryTimSanPhamTheoMa(); //tim sp can xoa
                        $param = array(":masp"=>$maSanPhamCanSua);
                        $SanPhamCanSua = $db->timMotDoiTuong($query,$param);
                        if ($SanPhamCanSua != null) {
                          echo '
                              <form action="../controller/xuly-sp.php?masp=' . $SanPhamCanSua['masp'] . '" method="post" enctype="multipart/form-data">
                          <div class="form-row justify-content-md-center">
                          <div class="form-group col-md-3">
                            <label for="feTenSP">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="txtTenSanPham" id="feTenSP" placeholder="Tên sản phẩm" value="' . $SanPhamCanSua['tensp'] . '" >
                          </div>
                          <div class="form-group col-md-3">
                            <label for="feBaoHanh">Bảo hành</label>
                            <select name="cbxBaoHanh" id="feBaoHanh" class="form-control">                            
                              <option value="' . $SanPhamCanSua['baohanh'] . '" selected>' . $SanPhamCanSua['baohanh'] . ' tháng</option>
                              <option value="1">01 tháng</option>
                              <option value="3">03 tháng</option>
                              <option value="6">06 tháng</option>
                              <option value="12">12 tháng</option>
                              <option value="24">24 tháng</option>
                              <option value="36">36 tháng</option>
                            </select>
                          </div>                                 
                        </div>
                        <div class="form-row justify-content-md-center">
                            <div class="form-group col-md-3">
                              <label for="feSoLuong">Số lượng</label>
                              <input name="numSoLuong" type="number" class="form-control" id="feSoLuong" placeholder="Cái"  value="' . $SanPhamCanSua['soluong'] . '" >
                            </div>
                            <div class="form-group col-md-3">
                              <label for="feDanhMuc">Danh mục</label>
                              <select name="cbxDanhMuc" id="feDanhMuc" class="form-control">';
                          $DanhMucSP = new DanhMucSP();
                          $queryLayDanhSach = $DanhMucSP->queryLayDanhSach();
                          $arrDanhMucSP = $db->timDanhSach($queryLayDanhSach);
                          $db->huyKetNoiDB();
                          if (count($arrDanhMucSP) > 0) {
                            foreach ($arrDanhMucSP as $dmsp) {
                              echo '<option value="' . $dmsp['madmsp'] . '" ';
                              if ($SanPhamCanSua['madmsp'] == $dmsp['madmsp']) echo ' selected ';
                              if ($dmsp['madmspcha'] == null)  echo 'disabled>' . $dmsp['ten'] . '</option>';
                              else echo '>&nbsp;&nbsp;&nbsp;&nbsp;' . $dmsp['ten'] . '</option>';
                            }
                          }
                          echo '                                
                              </select>
                            </div>
                        </div>
                        <div class="form-row justify-content-md-center">
                          <div class="form-group col-md-3">
                                <label for="feGia">Giá</label>
                                <input name="numGia" type="number" class="form-control" id="feGia" placeholder="đ" value="' . $SanPhamCanSua['dongia'] . '" >
                          </div>
                          <div class="form-group col-md-3"></div>
                        </div>
                        <div class="form-row justify-content-md-center">
                              <div class="form-group col-md-6">
                                <label for="feGhiChu">Mô tả</label>
                                <textarea class="form-control" name="txtMoTa" rows="7" placeholder="Mô tả sản phẩm...">' . $SanPhamCanSua['mota'] . '</textarea>
                              </div>                    
                            </div>
                        <div class="form-row justify-content-md-center mb-3">
                          <div class="form-group col-md-6">
                            <label for="feHinhAnh">Hình ảnh</label>
                            <input name="fileHinh" type="file" class="form-control" id="feHinhAnh">
                          </div>                    
                        </div>
                        <div style="text-align:right;">
                          <a value="them" href="" class="btn btn-mb-2 btn btn-secondary mr-2 btn-font"><i class="fas fa-undo"></i> Nhập lại</a>
                          <button name="btnSua" value="sua" type="submit" class="btn btn-mb-2 btn btn-info mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-edit"></i> Sửa</button>
                        </div>
                        </form>
                            ';
                        }
                      }
                      ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include 'layout/footer.php'; ?>
            </main>
        </div>
    </div>
    <?php include 'layout/script.php'; ?>
</body>

</html>