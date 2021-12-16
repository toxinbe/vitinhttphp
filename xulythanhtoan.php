<?php
include "ham.php";
if(count($_POST)>0){
    session_start();
    //chon thon tin giao hang
    if(isset($_POST['hinhThucThanhToan'])){
        if($_POST['hinhThucThanhToan']==1||$_POST['hinhThucThanhToan']==2){
            $_SESSION["xacThucThongTin"]="Đã xác thực";
            $_SESSION["hinhThucThanhToan"]="Đã thanh toán";
        }
        header("Location: thanh-toan.php");
        exit();
    }
    //co thong tin dia chi va xac thuc lai
    if(isset($_POST['xacThucThongTin'])){
        if(isset($_POST['hoVaTen']) && isset($_POST['soDienThoai']) && isset($_POST['diaChi'])){
            $hoVaTen = $_POST['hoVaTen'];
            $soDienThoai = $_POST['soDienThoai'];
            $diaChi = $_POST['diaChi'];
            if($hoVaTen!=null && $soDienThoai!=null && $diaChi!=null){
                $viTriKhachHangTrongDS=timViTriKhachHangTrongDS($_SESSION['email'],$_SESSION['dangKy']);

                $_SESSION["hoTen"]=$hoVaTen;
                $_SESSION["soDienThoai"]=$soDienThoai;
                $_SESSION["diaChi"]=$diaChi;
            
                if($viTriKhachHangTrongDS>=0){
                    $_SESSION['dangKy'][$viTriKhachHangTrongDS]['hoTen']=$hoVaTen; // ds kh
                    $_SESSION['dangKy'][$viTriKhachHangTrongDS]['soDienThoai']=$soDienThoai;
                    $_SESSION['dangKy'][$viTriKhachHangTrongDS]['diaChi']=$diaChi;
                }
                $_SESSION["xacThucThongTin"]="Đã xác thực";                
            }
        }            
    header("Location: thanh-toan.php");
    exit();
    }
}
?>