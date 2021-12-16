<?php
include "ham.php";
if(count($_POST)>0){
    session_start();
    $hoTen=$_POST["hoVaTen"];
    $soDienThoai=$_POST["soDienThoai"];
    $diaChi=$_POST["diaChi"];

    $viTriKhachHangTrongDS=timViTriKhachHangTrongDS($_SESSION['email'],$_SESSION['dangKy']);

    $_SESSION["hoTen"]=$hoTen; //phien dang nhap
    $_SESSION["soDienThoai"]=$soDienThoai;
    $_SESSION["diaChi"]=$diaChi;

    if($viTriKhachHangTrongDS>=0){
        $_SESSION['dangKy'][$viTriKhachHangTrongDS]['hoTen']=$hoTen; // ds kh
        $_SESSION['dangKy'][$viTriKhachHangTrongDS]['soDienThoai']=$soDienThoai;
        $_SESSION['dangKy'][$viTriKhachHangTrongDS]['diaChi']=$diaChi;
    }
    echo'
    <script>
        window.alert("Lưu thông tin thành công!");
        window.history.back();
    </script>
        ';
        exit();    
}
?>