<?php
include "ham.php";
if(count($_POST)>0){
    include '../admin/model/database.php';
    include '../admin/model/nguoidung.php';
    include '../admin/controller/hamtienich.php';
    $db = new Database();
    $txtEmail = $_POST['txtEmail'];
    $txtPassword = $_POST['txtPassword'];
    $txtRePassword = $_POST['txtRePassword'];
    checkEmail($txtEmail);
    checkPassword($txtPassword);
    if ($txtPassword != $txtRePassword) {
        echo '<script>
        window.alert("Mật khẩu và nhập lại mật khẩu cần phải trùng khớp nhau!");
        window.history.back();
        </script>';
        die();
    }
    $NguoiDung = new NguoiDung();
    $queryTimEmailUser = $NguoiDung->queryTimEmailUser(); //tìm thông tin tài khoản
    $param = array(":email"=>$txtEmail);
    $nguoidung = $db->timMotDoiTuong($queryTimEmailUser,$param);
    if ($nguoidung != null) {
        echo '<script>
        window.alert("Email đã tồn tại!");
        window.history.back();
        </script>';
        die();
    }
    $txtPassword = md5($txtPassword);
    $param = array(":email"=>$txtEmail, ":matkhau"=>$txtPassword, ":hoten"=>"",":sodienthoai"=>"",":diachi"=>"", ":loai"=>1,":trangthai"=>1); //mã tự tăng nên không điền, admin loại 0, trạng thái hoạt động 1
    $queryDangKy = $NguoiDung->queryDangKy();
    $flag = $db->themXoaSua($queryDangKy,$param); //them vao database thanh cong thi tra ve true
    if ($flag) {
        session_start();
        $_SESSION['email'] = $txtEmail;
        
        $queryTimEmailUser = $NguoiDung->queryTimEmailUser(); //tìm thông tin tài khoản
        $param = array(":email"=>$txtEmail);
        $nguoidung = $db->timMotDoiTuong($queryTimEmailUser,$param);
        $_SESSION['mand'] = $nguoidung['mand'];

        echo '<script>
        window.alert("Đăng ký thành công!");
        window.history.back();
        </script>';
        die();
    }
    echo '<script>
      window.alert("Đăng ký thất bại!");
      window.history.back();
      </script>';
    die();
}
?>