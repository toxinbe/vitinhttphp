<?php
include "ham.php";
if(count($_POST)>0){
    include '../admin/model/database.php';
    include '../admin/model/nguoidung.php';
    include '../admin/controller/hamtienich.php';
    $db = new Database();

    $oldpassword = $_POST["oldpassword"];
    $newpassword = $_POST["newpassword"];
    $renewpassword = $_POST["renewpassword"];
    checkPassword($oldpassword);
    checkPassword($newpassword);
    if($oldpassword==$newpassword){
        echo'<script>
        window.alert("Mật khẩu mới cần phải khác mật khẩu cũ!");
        window.history.back();
        </script>';
        die();
    }
    if($newpassword!=$renewpassword){
        echo'<script>
        window.alert("Mật khẩu mới và nhập lại mật khẩu mới cần phải trùng khớp nhau!");
        window.history.back();
        </script>';
        die();
    }
    session_start();
    $email=$_SESSION['email'];
    $NguoiDung=new NguoiDung();
    $queryTimEmailUser=$NguoiDung->queryTimEmailUser();//tìm thông tin tài khoản
    $param = array(":email"=>$email);
    $nguoidung=$db->timMotDoiTuong($queryTimEmailUser,$param);
    if($nguoidung==null){
        echo'<script>
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
    $oldpassword = md5($oldpassword);
    $newpassword = md5($newpassword);
    if($oldpassword!=$nguoidung['matkhau']){
        echo'<script>
        window.alert("Mật khẩu cũ không đúng!");
        window.history.back();
        </script>';
        die(); 
    }
    $param = array(":mand"=>$nguoidung['mand'], ":matkhau"=>$newpassword);
    $queryDoiMatKhauUser=$NguoiDung->queryDoiMatKhauUser();
    $flag=$db->themXoaSua($queryDoiMatKhauUser,$param);//doi mat khau vao database thanh cong thi tra ve true
    if($flag){
      echo'<script>
      window.alert("Đổi mật khẩu thành công!");
      window.history.back();
        </script>';
      die();
    }
    echo'<script>
    window.alert("Đổi mật khẩu thất bại!");
    window.history.back();
        </script>';
    die();
}
?>