<?php
if (count($_GET) > 0) {
    if ($_GET['action'] == "logout") {
        session_start();
        unset($_SESSION["Login"]);
        header("Location: ../view/");
        exit();
    }
}
if (count($_POST) > 0) {
    include '../model/database.php';
    include '../model/nguoidung.php';
    include 'hamtienich.php';
    $db = new Database();
    if (isset($_POST['btnLogin'])) {//dang nhap ************************************************
        $txtEmail = $_POST['txtEmail'];
        $txtPassword = $_POST['txtPassword'];
        checkEmail($txtEmail);
        checkPassword($txtPassword);
        $NguoiDung = new NguoiDung();
        $query = $NguoiDung->queryTimEmailAdmin(); //tìm thông tin tài khoản
        $param = array(":email"=>$txtEmail);
        $nguoidung = $db->timMotDoiTuong($query,$param);
        if ($nguoidung == null) {
            echo '<script>
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
        $txtPassword = md5($txtPassword);
        if ($txtPassword != $nguoidung['matkhau']) {
            echo '<script>
            window.alert("Mật khẩu không đúng!");
            window.history.back();
            </script>';
            die();
        }
        session_start();
        $_SESSION['Login'] = $txtEmail;
        header("Location: ../view/tong-quan.php");
        exit();
    }
    if (isset($_POST['btnDangKy'])) {//dang ky ************************************************
        $txtEmail = $_POST['txtEmail'];
        $txtPassword = $_POST['txtPassword'];
        $txtRePassword = $_POST['txtRePassword'];
        checkEmail($txtEmail);
        checkPassword($txtPassword);
        if ($txtPassword != $txtRePassword) {
            echo '<script>
            window.alert("Mật khẩu và nhập lại mật khẩu cần phải trùng khớp nhau!");
            window.history.back();
            </script>';
            die();
        }
        $NguoiDung = new NguoiDung();
        $query = $NguoiDung->queryTimEmailAdmin(); //tìm thông tin tài khoản
        $param = array(":email"=>$txtEmail);
        $nguoidung = $db->timMotDoiTuong($query,$param);
        if ($nguoidung != null) {
            echo '<script>
            window.alert("Email đã tồn tại!");
            window.history.back();
            </script>';
            die();
        }
        $txtPassword = md5($txtPassword);
        $query = $NguoiDung->queryDangKy();
        $param = array(":email"=>$txtEmail, ":matkhau"=>$txtPassword, ":hoten"=>"",":sodienthoai"=>"",":diachi"=>"", ":loai"=>0,":trangthai"=>1); //mã tự tăng nên không điền, admin loại 0, trạng thái hoạt động 1
        $flag = $db->themXoaSua($query,$param); //them vao database thanh cong thi tra ve true
        if ($flag) {
            session_start();
            $_SESSION['Login'] = $txtEmail;
            echo '<script>
            window.alert("Đăng ký thành công!");
            window.location.href = "../view/tong-quan.php";
            </script>';
            die();
        }
        echo '<script>
          window.alert("Đăng ký thất bại!");
          window.history.back();
          </script>';
        die();
    }
    if(isset($_POST['btnDoiMatKhau'])){//doi mat khau ************************************************
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
        $email=$_SESSION['Login'];
        $NguoiDung = new NguoiDung();
        $query = $NguoiDung->queryTimEmailAdmin(); //tìm thông tin tài khoản
        $param = array(":email"=>$email);
        $nguoidung = $db->timMotDoiTuong($query,$param);
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
        $query=$NguoiDung->queryDoiMatKhauAdmin();
        $param = array(":mand"=>$nguoidung['mand'], ":matkhau"=>$newpassword);
        $flag=$db->themXoaSua($query,$param);//doi mat khau vao database thanh cong thi tra ve true
        if($flag){
          echo'<script>
          window.alert("Đổi mật khẩu thành công!");
          window.location.href = "../view/tong-quan.php";
            </script>';
          die();
        }
        echo'<script>
        window.alert("Đổi mật khẩu thất bại!");
        window.history.back();
            </script>';
        die();
    }
}
?>
