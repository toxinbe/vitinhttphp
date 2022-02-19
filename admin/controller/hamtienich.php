<?php
function checkEmail($email)
{
  $pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
  if (!preg_match($pattern, $email)) { //sai thì thông báo và chuyển về trang trước đó
    echo '<script>
        window.alert("Sai Email!");
        window.history.back();
        </script>';
    die();
  }
}
function checkPassword($password)
{
  $pattern = "/(?=^.{6,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
  if (!preg_match($pattern, $password)) { //sai thì thông báo và chuyển về trang trước đó
    echo '<script>
        window.alert("Sai mật khẩu!\n(Gồm 6 - 32 ký tự. Chứa chữ cái thường, chữ cái in hoa, số và không chứa ký tự đặc biệt)");
        window.history.back();
        </script>';
    die();
  }
}
function checkInputTenSanPham($tenSanPham)
{
  if ($tenSanPham > "") return true;
  return false;
}
function checkInputBaoHanh($baoHanh)
{
  if ($baoHanh == 1 || $baoHanh == 3 || $baoHanh == 6 || $baoHanh == 12 || $baoHanh == 24 || $baoHanh == 36) return true;
  return false;
}
function checkInputSoLuong($soLuong)
{
  if ($soLuong < 1000000000 && $soLuong > 0) return true;
  return false;
}
function checkInputGiaSanPham($giaSanPham)
{
  if ($giaSanPham >= 0) return true;
  return false;
}
function xoaFile($fileHinhName)
{
  $path = "../../view/img/uploads/" . $fileHinhName;
  if (file_exists($path)) return unlink($path);
  return false;
}
function checkFile($fileHinh)
{
  // Kiểm tra có dữ liệu fileupload trong $_FILES không
  // Nếu không có thì dừng
  if (!isset($fileHinh)) {
    return "Dữ liệu không đúng cấu trúc";
  }

  // Kiểm tra dữ liệu có bị lỗi không
  if ($fileHinh['error'] != 0) {
    return "Dữ liệu upload bị lỗi";
  }

  // Đã có dữ liệu upload, thực hiện xử lý file upload

  //Thư mục bạn sẽ lưu file upload
  $target_dir    = "../../view/img/uploads/";
  //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
  $target_file   = $target_dir . basename($fileHinh["name"]);

  $allowUpload   = true;

  //Lấy phần mở rộng của file (jpg, png, ...)
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

  // Cỡ lớn nhất được upload (bytes)
  $maxfilesize   = 512000;

  ////Những loại file được phép upload
  $allowtypes    = array('jpg', 'png', 'JPG', 'PNG');

  //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
  $check = getimagesize($fileHinh["tmp_name"]);
  if ($check !== false) {
    //   echo "Đây là file ảnh - " . $check["mime"] . ".";
    $allowUpload = true;
  } else {
    $allowUpload = false;
    return "Không phải file ảnh";
  }

  // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
  if ($fileHinh["size"] > $maxfilesize) {
    $allowUpload = false;
    return 'Không được upload ảnh lớn hơn ' . ($maxfilesize / 1024) . ' (KB)';
  }


  // Kiểm tra kiểu file
  if (!in_array($imageFileType, $allowtypes)) {
    $allowUpload = false;
    return "Chỉ được upload các định dạng JPG, PNG";
  }

  // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
  // Bạn có thể phát triển code để lưu thành một tên file khác
  if (file_exists($target_file) && !isset($fileHinh['ghiDe'])) {
    $allowUpload = false;
    return "Tên file đã tồn tại trên server, không được ghi đè";
  }

  if ($allowUpload) {
    // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
    if (move_uploaded_file($fileHinh["tmp_name"], $target_file)) {
      return "Đã upload thành công";
    } else {
      return "Có lỗi xảy ra khi upload file";
    }
  } else {
    return "Không upload được file, có thể do file lớn, kiểu file không đúng";
  }
}
function hienThiDiaChi($diaChi)
{
  $soLuongKyTu = strlen($diaChi);
  $tam = "";
  $demTu = 0;
  for ($j = 0; $j < $soLuongKyTu; $j++) {
    if ($diaChi[$j] == " " && $demTu < 5) {
      $demTu++;
    } else if ($demTu == 5) {
      $tam[$j] = ".";
      $tam[$j + 1] = ".";
      $tam[$j + 2] = ".";
      break;
    }
    $tam[$j] = $diaChi[$j];
  }
  return $tam;
}
function hienThiLoaiNguoiDung($loai)
{
  $loai=(int)$loai;
  $ketQua="";
  if($loai==0) return $ketQua="Quản trị viên";
  else if($loai==1) return $ketQua="Khách hàng";
  return $ketQua;
}
function hienThiTrangThaiNguoiDung($trangThai)
{
  $trangThai=(int)$trangThai;
  $ketQua="";
  if($trangThai==0) return $ketQua="Đang bị khóa";
  else if($trangThai==1) return $ketQua="Đang hoạt động";
  return $ketQua;
}
function hienThiTinhTrangDonHang($tinhtrang)
{
  $tinhtrang=(int)$tinhtrang;
  $ketQua="";
  if($tinhtrang==0) return $ketQua="Chờ xác nhận";
  else if($tinhtrang==1) return $ketQua="Đang xử lý";
  else if($tinhtrang==2) return $ketQua="Đã hoàn thành";
  else if ($tinhtrang==3) return $ketQua="Đã Hủy";
  return $ketQua;
}
function hienHinhThucThanhToan($hinhthucthanhtoan)
{
  $hinhthucthanhtoan=(int)$hinhthucthanhtoan;
  $ketQua="";
  if($hinhthucthanhtoan==1) return $ketQua="Tiền mặt";
  else if($hinhthucthanhtoan==2) return $ketQua="Chuyển Khoản";

  return $ketQua;
}
?>