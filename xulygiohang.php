<?php
include "ham.php";
if(count($_POST)>0){
    session_start();
    
    
    if(isset($_POST['xoaSanPham'])){
        $maSanPham=$_POST['xoaSanPham'];
        $viTriSP=timViTriSPtrongGioHang($maSanPham,$_SESSION["maSanPham"]);
        if($viTriSP>-1){
            $_SESSION["tongSoLuongMua"]-=$_SESSION["soLuongMua"][$viTriSP];
            $_SESSION["soLuongMua"][$viTriSP]=0;
        }
        header("Location: gio-hang.php");
        exit();
    } 
    if(isset($_POST['capNhatGioHang'])){
        capNhatSoLuongCuaTungSanPhamTrongGioHang($_POST,$_SESSION);
        header("Location: gio-hang.php");
        exit();
    }
    if(isset($_POST['thanhToanGioHang'])){
        capNhatSoLuongCuaTungSanPhamTrongGioHang($_POST,$_SESSION);
        header("Location: thanh-toan.php");
        exit();
    }

    $arrMaSP=array("SP01","SP02","SP03");
    $arrTenHinh=array("pc-gaming","pc-streamer","laptop-3");
    $arrTenSP=array("PC Gaming","PC Streamer","Laptop Lập Trình");
    $arrLoai=array("PC","PC","Laptop");
    $arrHang=array("T&T","T&T","Asus");
    $arrBaoHanh=array(6,12,24);
    $arrSoLuong=array(10,0,3);
    $arrGia=array(10000000,25000000,9999999);    
    $maSanPhamChonMua=$_POST['maSanPham'];
    $soLuongMua=$_POST['soLuongMua'];

    if(!isset($_SESSION["maSanPham"])){
        $_SESSION["maSanPham"]=array();
    }
    $soLoaiSanPhamDangCoTrongGio=count($_SESSION["maSanPham"]);
    if(!isset($_SESSION["tongSoLuongMua"])){
        $_SESSION["tongSoLuongMua"]=0;
    }

    $viTriSP=timViTriSPtrongGioHang($maSanPhamChonMua,$_SESSION["maSanPham"]);
    if($viTriSP>-1){
        $_SESSION['soLuongMua'][$viTriSP]=$soLuongMua;
        $_SESSION["tongSoLuongMua"]=$soLuongMua;
    }else{
        $viTriSP=timViTriSPtrongDS($maSanPhamChonMua,$arrMaSP);
        if($viTriSP>-1){
            $_SESSION["maSanPham"][$soLoaiSanPhamDangCoTrongGio]=$arrMaSP[$viTriSP];
            $_SESSION["tenHinh"][$soLoaiSanPhamDangCoTrongGio]=$arrTenHinh[$viTriSP];
            $_SESSION["tenSanPham"][$soLoaiSanPhamDangCoTrongGio]=$arrTenSP[$viTriSP];
            $_SESSION["donGia"][$soLoaiSanPhamDangCoTrongGio]=$arrGia[$viTriSP];
            if(!isset( $_SESSION['soLuongMua'][$soLoaiSanPhamDangCoTrongGio])){
                $_SESSION['soLuongMua'][$soLoaiSanPhamDangCoTrongGio]=0;
            }
            $_SESSION['soLuongMua'][$soLoaiSanPhamDangCoTrongGio]=$soLuongMua;
            $_SESSION["tongSoLuongMua"]=$soLuongMua;
        }
    }
    echo'
<script>
    window.alert("Đã thêm vào giỏ hàng!");
    window.history.back();
</script>
    ';
    exit();
}
?>