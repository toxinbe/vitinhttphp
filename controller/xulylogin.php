<?php
include "ham.php";
if(count($_POST)>0){
    include '../admin/model/database.php';
    include '../admin/model/nguoidung.php';
    include '../admin/controller/hamtienich.php';
    $db = new Database();
    if(isset($_POST['dangNhap'])){
        $txtEmail = $_POST['txtEmail'];
        $txtPassword = $_POST['txtPassword'];
        checkEmail($txtEmail);
        checkPassword($txtPassword);
        $NguoiDung = new NguoiDung();
        $queryTimEmailUser = $NguoiDung->queryTimEmailUser(); //tìm thông tin tài khoản
        $param = array(":email"=>$txtEmail);
        $nguoidung = $db->timMotDoiTuong($queryTimEmailUser,$param);
        if ($nguoidung == null) {
            echo '<script>
            window.alert("Email không tồn tại!");
            window.history.back();
            </script>';
            die();
        }else if((int)$nguoidung['trangthai']==0){
            echo '<script>
            window.alert("Tài khoản đang bị khóa!");
            window.history.back();
            </script>';
            die();
        }
      
        $txtPassword = md5($txtPassword);
        if ($txtPassword != $nguoidung['matkhau']) {
            echo '<script>
            window.alert("Mật khẩu không đúng!");
            window.history.back();
            </script>';
            die();
        }
        session_start();
        $_SESSION['email'] = $txtEmail;
        $_SESSION['hoTen']= $nguoidung['hoten'];
        $_SESSION['soDienThoai']= $nguoidung['sodienthoai'];
        $_SESSION['diaChi']= $nguoidung['diachi'];
        $_SESSION['mand'] = $nguoidung['mand'];
        echo'
            <script>
                window.history.back();
            </script>
            ';    
        exit();
    }
}
?>