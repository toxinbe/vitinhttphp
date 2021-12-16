<?php
include "ham.php";
if(count($_POST)>0){
    session_start();
    
    if(isset($_POST['dangNhap'])){
        $test=kiemTraLogin($_POST,$_SESSION['dangKy']);
        if( $test!=0){
            $email = $_POST['email'];
            if( $test==1){

                $viTriKhachHangTrongDS=timViTriKhachHangTrongDS($email,$_SESSION['dangKy']);

                
                if(isset($_SESSION['dangKy'][$viTriKhachHangTrongDS]['hoTen'])){
                    $hoTen=$_SESSION['dangKy'][$viTriKhachHangTrongDS]['hoTen']."";
                    $_SESSION["hoTen"]=$hoTen;
                }
                if(isset($_SESSION['dangKy'][$viTriKhachHangTrongDS]['soDienThoai'])){
                    $soDienThoai=$_SESSION['dangKy'][$viTriKhachHangTrongDS]['soDienThoai']."";
                    $_SESSION["soDienThoai"]=$soDienThoai;
                }
                if(isset($_SESSION['dangKy'][$viTriKhachHangTrongDS]['diaChi'])){
                    $diaChi=$_SESSION['dangKy'][$viTriKhachHangTrongDS]['diaChi']."";
                    $_SESSION["diaChi"]=$diaChi;
                }
            }else if( $test==2){
            }else if( $test==3){
                $_SESSION["hoTen"]="Trương Ngọc Tòn";
                $_SESSION["soDienThoai"]="0901234567";
                $_SESSION["diaChi"]="180 Cao Lỗ, P4, Q8, Tp HCM";
            }
            $_SESSION["email"]=$email;
        }else{
		echo'
        	<script>
            	window.alert("Email không tồn tại!");
        	</script>
        	';
	}	
    }
    echo'
<script>
    window.history.back();
</script>
    ';    
    exit();
}
?>