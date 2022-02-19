<?php
include "ham.php";
if (count($_POST) > 0) {
    include '../admin/model/database.php';
    include '../admin/model/nguoidung.php';
    include '../admin/model/donhang.php';
    include '../admin/model/chitietdonhang.php';
    include '../admin/controller/hamtienich.php';
    $db = new Database();
    session_start();
    //chon thon tin giao hang
    if (isset($_POST['hinhThucThanhToan'])) {
        if ($_POST['hinhThucThanhToan'] == 1 || $_POST['hinhThucThanhToan'] == 2) {
            $_SESSION["xacThucThongTin"] = "Đã xác thực";
            $_SESSION["hinhThucThanhToan"]=$_POST['hinhThucThanhToan'];
            $email = $_SESSION['email'];
            $NguoiDung = new NguoiDung();
            $queryTimEmailUser = $NguoiDung->queryTimEmailUser(); //tìm thông tin tài khoản
            $param = array(":email" => $email);
            $nguoidung = $db->timMotDoiTuong($queryTimEmailUser, $param);
            if ($nguoidung == null) {
                echo '<script>
        window.alert("Email không tồn tại!");
        window.history.back();
        </script>';
                die();  
            }
            $mand=$nguoidung['mand'];
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $ngayDat=date("h:i:sa d/m/Y");
            $DonHang=new DonHang();
            $queryThemDonHang = $DonHang->queryThemDonHang();
            // :ngaydat, :tinhtrang, :hinhthucthanhtoan, :tongtien, :mand, :ghichu
            $param = array(":ngaydat" => $ngayDat, ":tinhtrang" => 0, ":hinhthucthanhtoan" => $_SESSION["hinhThucThanhToan"], ":tongtien" => $_SESSION['tongtien'], ":mand" =>$mand , ":ghichu" => "");
            $flag = $db->themXoaSua($queryThemDonHang, $param);
            if ($flag) {
                $_SESSION["hinhThucThanhToan"] = $_POST['hinhThucThanhToan'];
                //tim mdh
                $DonHang = new DonHang();
                $queryTimTheoNgayDat = $DonHang->queryTimTheoNgayDat(); //tìm thông tin tài khoản
                $param = array(":ngaydat" => $ngayDat);
                $donhang = $db->timMotDoiTuong($queryTimTheoNgayDat, $param);
                $madh=$donhang['madh'];
                foreach($_SESSION["giohang"] as $product){
                    if($product!=null){
                        //(:masp, :madh, :giaban, :soluong)";
                        $ChiTietDonHang=new ChiTietDonHang();
                        $queryThemChiTietDonHang = $ChiTietDonHang->queryThemChiTietDonHang();
                        $param = array(":masp" => $product['masp'], ":madh" => $madh, ":giaban" => $product['dongia'], ":soluong" => $product['soluong']);
                        $db->themXoaSua($queryThemChiTietDonHang, $param);  
                    }
                }
                $_SESSION["xacThucThongTin"] = $madh;
                header("Location: ../view/thanh-toan.php");
                die();
            }
            unset($_SESSION['hinhThucThanhToan']);
            echo '<script>
            window.alert("Chọn hình thức thanh toán thất bại");
            </script>';    
            header("Location: ../view/thanh-toan.php");
            exit();
        }
    }
    //co thong tin dia chi va xac thuc lai
    if (isset($_POST['xacThucThongTin'])) {
        if (isset($_POST['hoVaTen']) && isset($_POST['soDienThoai']) && isset($_POST['diaChi'])) {
            $email = $_SESSION['email'];
            $hoVaTen = $_POST['hoVaTen'];
            $soDienThoai = $_POST['soDienThoai'];
            $diaChi = $_POST['diaChi'];
            $NguoiDung = new NguoiDung();
            $queryTimEmailUser = $NguoiDung->queryTimEmailUser(); //tìm thông tin tài khoản
            $param = array(":email" => $email);
            $nguoidung = $db->timMotDoiTuong($queryTimEmailUser, $param);
            if ($nguoidung == null) {
                echo '<script>
        window.alert("Email không tồn tại!");
        window.history.back();
        </script>';
                die();
            }
            // $NguoiDung->NguoiDung($nguoidung['mand'], $nguoidung['email'], $nguoidung['matkhau'],$hoVaTen,$soDienThoai,$diaChi,1,1);
            $queryDoiThongTinUser = $NguoiDung->queryDoiThongTinUser();
            $param = array(":mand" => $nguoidung['mand'], ":hoten" => $hoVaTen, ":sodienthoai" => $soDienThoai, ":diachi" => $diaChi);
            $flag = $db->themXoaSua($queryDoiThongTinUser, $param);
            if ($flag) {
                $_SESSION['hoTen'] = $hoVaTen;
                $_SESSION['soDienThoai'] = $soDienThoai;
                $_SESSION['diaChi'] = $diaChi;
                $_SESSION["xacThucThongTin"] = "Đã xác thực";
                header("Location: ../view/thanh-toan.php");
                die();
            }
            unset($_SESSION['hoTen']);
            unset($_SESSION['soDienThoai']);
            unset($_SESSION['diaChi']);
            echo '<script>
        window.alert("Điền thông tin thất bại!");
        </script>';    
            header("Location: ../view/thanh-toan.php");
            exit();
        }
        
    var_dump($_SESSION);
    die;
    }
}
