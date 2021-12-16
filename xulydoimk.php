<?php
include "ham.php";
if(count($_POST)>0){
    session_start();
    $oldpassword = $_POST["oldpassword"];
    $newpassword = $_POST["newpassword"];
    $renewpassword = $_POST["renewpassword"];

    if($newpassword!=$renewpassword){
        echo'
        <script>
            window.alert("Nhập lại!");
        </script>
            ';
    }
    $viTriKhachHangTrongDS=timViTriKhachHangTrongDS($_SESSION['email'],$_SESSION['dangKy']);

    if($viTriKhachHangTrongDS!=-1 && $_SESSION['dangKy'][$viTriKhachHangTrongDS]['password']==$oldpassword &&$oldpassword>""&&$newpassword>""){
        $_SESSION['dangKy'][$viTriKhachHangTrongDS]['password']=$newpassword;            
        echo'
        <script>
            window.alert("Đổi mật khẩu thành công!");
        </script>
            ';
    }else{
        echo'
        <script>
            window.alert("Nhập lại!");
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