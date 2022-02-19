<?php
include "ham.php";
if(count($_POST)>0){
    include '../admin/model/database.php';
    include '../admin/model/nguoidung.php';
    include '../admin/controller/hamtienich.php';
    $db = new Database();
    session_start();
    $email= $_SESSION['email'];
    $hoVaTen = $_POST['hoVaTen'];
    $soDienThoai = $_POST['soDienThoai'];
    $diaChi = $_POST['diaChi'];    
    $NguoiDung = new NguoiDung();
    $queryTimEmailUser = $NguoiDung->queryTimEmailUser(); //tìm thông tin tài khoản
    $param = array(":email"=>$email);
    $nguoidung = $db->timMotDoiTuong($queryTimEmailUser,$param);
    if($nguoidung==null){
        echo'<script>
        window.alert("Email không tồn tại!");
        window.history.back();
        </script>';
        die();
    }
    // $NguoiDung->NguoiDung($nguoidung['mand'], $nguoidung['email'], $nguoidung['matkhau'],$hoVaTen,$soDienThoai,$diaChi,1,1);
    $queryDoiThongTinUser=$NguoiDung->queryDoiThongTinUser();
    $param = array(":mand"=>$nguoidung['mand'], ":hoten"=>$hoVaTen,":sodienthoai"=>$soDienThoai,":diachi"=>$diaChi);
    $flag=$db->themXoaSua($queryDoiThongTinUser,$param);
    if($flag){
        $_SESSION['hoTen']= $hoVaTen;
        $_SESSION['soDienThoai']= $soDienThoai;
        $_SESSION['diaChi']= $diaChi;

      echo'<script>
      window.alert("Đổi thông tin thành công!");
      window.history.back();
      </script>';
      die();
    }
    echo'<script>
    window.alert("Đổi thông tin thất bại!");
    window.history.back();
        </script>';
    die();   
}
?>