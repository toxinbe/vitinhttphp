<?php
//*************************************
if (count($_POST) > 0 || count($_GET) > 0) {
  include '../model/database.php';
  include '../model/sanpham.php';
  include '../model/danhmucsp.php';
  include 'hamtienich.php';
  $db = new Database();
  if (isset($_GET['action'])) {
    if ($_GET['action'] == "xoa" && isset($_GET['masp'])) { //xu ly xoa ************************************************
      $maSanPhamCanXoa = $_GET['masp'];
      $SanPham = new SanPham();
      $query = $SanPham->queryTimSanPhamTheoMa(); //tim sp can xoa
      $param = array(":masp"=>$maSanPhamCanXoa);
      $sp = $db->timMotDoiTuong($query,$param);
      if ($sp == null) {
        echo '<script>
          window.alert("Không tìm thấy sản phẩm cần xóa!");
          window.history.back();
          </script>';
        die();
      }
      $query = $SanPham->queryXoa();
      $param = array(":masp"=>$maSanPhamCanXoa);
      $flag = $db->themXoaSua($query,$param);
      $db->huyKetNoiDB();
      if ($flag) {
        if ($sp['hinh'] > "") xoaFile($sp['hinh']);
        echo '<script>
          window.alert("Xóa sản phẩm thành công!");
          window.history.back();
          </script>';
        die();
      }
      echo '<script>
          window.alert("Xóa sản phẩm thất bại!");
          window.history.back();
          </script>';
      die();
    }
  }
  if (isset($_POST['btnThem'])) { //xu ly them ************************************************
    $txtTenSanPham = strip_tags($_POST['txtTenSanPham']);
    $cbxDanhMuc = (int)strip_tags($_POST['cbxDanhMuc']);
    $cbxBaoHanh = (int)strip_tags($_POST['cbxBaoHanh']);
    $numSoLuong = (int)strip_tags($_POST['numSoLuong']);
    $numGia = (double)strip_tags($_POST['numGia']);
    $txtMoTa = strip_tags($_POST['txtMoTa']); //co the bo trong
    $fileHinh = $_FILES['fileHinh'];

    if (!checkInputTenSanPham($txtTenSanPham)) {
      echo '<script>
        window.alert("Chưa nhập tên sản phẩm!");
        window.history.back();
        </script>';
      die();
    }
    $SanPham = new SanPham();
    $query = $SanPham->queryTimSanPhamTheoTen();
    $param = array(":tensp"=>$txtTenSanPham);
    $sp = $db->timMotDoiTuong($query,$param);
    if ($sp != null) {
      echo '<script>
        window.alert("Tên sản phẩm đã tồn tại!");
        window.history.back();
        </script>';
      die();
    }
    $DanhMucSP = new DanhMucSP();
    $query = $DanhMucSP->queryTimDanhMucSPTheoMa();
    $param = array(":madmsp"=>$cbxDanhMuc);
    $dmsp = $db->timMotDoiTuong($query,$param);
    if($dmsp==null){
      echo '<script>
        window.alert("Nhập sai danh mục!");
        window.history.back();
        </script>';
      die();
    }
    if (!checkInputBaoHanh($cbxBaoHanh)) { //kiểm tra nhập bậy thời gian bảo hành
      echo '<script>
        window.alert("Nhập sai thời gian bảo hành!");
        window.history.back();
        </script>';
      die();
    }
    //1.000.000.000
    if (!checkInputSoLuong($numSoLuong)) {
      echo '<script>
        window.alert("Nhập sai số lượng!");
        window.history.back();
        </script>';
      die();
    }
    if (!checkInputGiaSanPham($numGia)) {
      echo '<script>
        window.alert("Nhập sai giá bán!");
        window.history.back();
        </script>';
      die();
    }
    $ketQuaUpload = checkFile($fileHinh);
    if ($ketQuaUpload != "Đã upload thành công") { //upload file thất bại va thong bao loi
      echo '<script>
        window.alert("' . $ketQuaUpload . '");
        window.history.back();
        </script>';
      die();
    }
    $query = $SanPham->queryThem();
    $param = array(":tensp"=>$txtTenSanPham,":madmsp"=>$cbxDanhMuc,":baohanh"=>$cbxBaoHanh,":soluong"=>$numSoLuong,":dongia"=>$numGia,":mota"=>$txtMoTa,":hinh"=>$fileHinh['name']);
    $flag = $db->themXoaSua($query,$param); //them vao database thanh cong thi tra ve true
    $db->huyKetNoiDB();
    if ($flag) {
      echo '<script>
          window.alert("Thêm sản phẩm thành công!");
          window.history.back();
          </script>';
      die();
    }
    echo '<script>
          window.alert("Thêm sản phẩm thất bại!");
          window.history.back();
          </script>';
    die();
  }

  if (isset($_POST['btnSua'])) { //xu ly sua ************************************************
    $maSanPhamCanSua = $_GET['masp'];
    $txtTenSanPham = strip_tags($_POST['txtTenSanPham']);
    $cbxDanhMuc = (int)strip_tags($_POST['cbxDanhMuc']);
    $cbxBaoHanh = (int)strip_tags($_POST['cbxBaoHanh']);
    $numSoLuong = (int)strip_tags($_POST['numSoLuong']);
    $numGia = (double)strip_tags($_POST['numGia']);
    $txtMoTa = strip_tags($_POST['txtMoTa']); //co the bo trong
    $fileHinh = $_FILES['fileHinh'];

    if (!checkInputTenSanPham($txtTenSanPham)) {
      echo '<script>
        window.alert("Chưa nhập tên sản phẩm!");
        window.history.back();
        </script>';
      die();
    }
    $DanhMucSP = new DanhMucSP();
    $query = $DanhMucSP->queryTimDanhMucSPTheoMa();
    $param = array(":madmsp"=>$cbxDanhMuc);
    $dmsp = $db->timMotDoiTuong($query,$param);
    if($dmsp==null){
      echo '<script>
        window.alert("Nhập sai danh mục!");
        window.history.back();
        </script>';
      die();
    }
    if (!checkInputBaoHanh($cbxBaoHanh)) { //kiểm tra nhập bậy thời gian bảo hành
      echo '<script>
        window.alert("Nhập sai thời gian bảo hành!");
        window.history.back();
        </script>';
      die();
    }
    //1.000.000.000
    if (!checkInputSoLuong($numSoLuong)) {
      echo '<script>
        window.alert("Nhập sai số lượng!");
        window.history.back();
        </script>';
      die();
    }
    if (!checkInputGiaSanPham($numGia)) {
      echo '<script>
        window.alert("Nhập sai giá bán!");
        window.history.back();
        </script>';
      die();
    }
    if ($fileHinh['size'] > 0) { //có sửa hình thì kiểm tra hình upload
      $ketQuaUpload = checkFile($fileHinh);
      if ($ketQuaUpload != "Đã upload thành công") { //upload file thất bại va thong bao loi
        echo '<script>
          window.alert("' . $ketQuaUpload . '");
          window.history.back();
          </script>';
        die();
      }
    }
    $SanPham = new SanPham();
    $query = $SanPham->queryTimSanPhamTheoMa();
    $param = array(":masp"=>$maSanPhamCanSua);
    $sp = $db->timMotDoiTuong($query,$param);
    if ($sp == null) {
      echo '<script>
        window.alert("Không tìm thấy sản phẩm cần sửa!");
        window.history.back();
        </script>';
      die();
    }
    if (isset($ketQuaUpload)) { //kiem tra xem co sua lai hinh san pham khong neu co xoa anh cu
      xoaFile($sp['hinh']); //xoa hinh cu
      $sp['hinh'] = $fileHinh['name'];
    }   
    $query = $SanPham->querySua();
    $param = array(":masp"=>$maSanPhamCanSua,":tensp"=>$txtTenSanPham,":madmsp"=>$cbxDanhMuc,":baohanh"=>$cbxBaoHanh,":soluong"=>$numSoLuong,":dongia"=>$numGia,":mota"=>$txtMoTa,":hinh"=>$sp['hinh']);
    $flag = $db->themXoaSua($query,$param);//sua vao database thanh cong thi tra ve true
    $db->huyKetNoiDB();
    if ($flag) {
      echo '<script>
          window.alert("Sửa sản phẩm thành công!");
          window.history.back();
          </script>';
      die();
    }
    echo '<script>
          window.alert("Sửa sản phẩm thất bại!");
          window.history.back();
          </script>';
    die();
  }
}
?>