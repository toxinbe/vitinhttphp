<?php
include "ham.php";
if(count($_POST)>0){
    session_start();
    $kiemTra=kiemTraDangKy($_POST,$_SESSION["dangKy"]);
    if($kiemTra==0){//email dang ky chua ton tai trong ds kh thi cho phep tiep tuc dang ky
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $viTriKhachHangTrongDS=0;

        if($password!=$repassword){//da kiem tra password va repassword co trung nhau hay khong
            echo'
            <script>
                window.alert("Nhập lại mật khẩu!");
                window.history.back();
            </script>
                ';
            exit();
        }
        if (sizeof($_SESSION["dangKy"])>0){
            $viTriKhachHangTrongDS=sizeof($_SESSION["dangKy"]);
        }
        $_SESSION["dangKy"]["email"]=$email;//them kh vao ds kh
        $_SESSION["dangKy"]["password"]=$password;
        echo'
        <script>
            window.alert("Đăng ký thành công!");
        </script>
        ';
    }else if($kiemTra==1){
        echo'
        <script>
            window.alert("Email đã tồn tại!");
        </script>
        ';
    }
    echo'
    <script>
        window.history.back();
    </script>
        ';
    exit();
}
?>