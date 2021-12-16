<?php
include "ham.php";
if(count($_POST)>0){
    session_start();

    if(isset($_POST['nhanMaXacThuc'])){
        $email=$_POST["email"];
        $viTriKhachHangTrongDS=timViTriKhachHangTrongDS($email,$_SESSION['dangKy']);
        if($viTriKhachHangTrongDS>=0){

            $maXacThucRandom=rand(1000,9999);
            $to=$_SESSION['dangKy'][$viTriKhachHangTrongDS]['email'];
            $subject="T&T Computer - Reset password";
            $message = "Mã xác thực: ".$maXacThucRandom;
            $headers = 'From: admin@vitinhtt.tk';
    
            $test=mail($to, $subject, $message, $headers);
            if($test){
                $_SESSION['nhanMaXacThuc']['email']=$email;
                $_SESSION['nhanMaXacThuc']['maXacThuc']=$maXacThucRandom;
                echo'
            <script>
                window.alert("Gửi mã xác thực thành công!");
                window.history.back();
            </script>
                ';
                exit();
            }else{
                echo'
            <script>
                window.alert("Gửi mã xác thực thất bại!");
            </script>
                ';
                exit();
            }

        }
        echo'
    <script>
        window.alert("Email chưa được đăng ký!");
        window.history.back();
    </script>
        ';
    exit();  
    }

    if(isset($_POST['datLaiMatKhau'])){
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $maXacThucNhapVao=$_POST['maXacThuc'];
        $email=$_SESSION['nhanMaXacThuc']['email'];
        $maXacThucRandom=$_SESSION['nhanMaXacThuc']['maXacThuc'];
        $viTriKhachHangTrongDS=timViTriKhachHangTrongDS($email,$_SESSION['dangKy']);
        if($password!=$repassword){//da kiem tra password va repassword co trung nhau hay khong
            echo'
            <script>
                window.alert("Nhập lại mật khẩu!");
                window.history.back();
            </script>
                ';
            exit();
        }
        if($maXacThucNhapVao!=$maXacThucRandom){//da kiem tra password va repassword co trung nhau hay khong
            echo'
            <script>
                window.alert("Sai mã xác thực!");
                window.history.back();
            </script>
                ';
            exit();
        }
        $_SESSION["dangKy"][$viTriKhachHangTrongDS]["email"]=$email;//them kh vao ds kh
        $_SESSION["dangKy"][$viTriKhachHangTrongDS]["password"]=$password;
        echo'
            <script>
                window.alert("Đặt lại mật khẩu thành công!");
                window.history.back();
            </script>
                ';
        exit();
    }
}
?>