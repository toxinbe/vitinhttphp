<?php
//*************************************
if (count($_POST) > 0 || count($_GET) > 0) {
  include '../model/database.php';
  include '../model/nguoidung.php';
  
  $db = new Database();
    if (isset($_POST['btnKhoa'])) {//xử lý khóa người dùng
        $mand =$_GET['mand'];
        $loai=$_POST['loai'];
        $nguoidung = new NguoiDUng();        
        if($loai == 0){
            echo '<script>
            window.alert("Không thể khóa!");
            window.history.back();
            </script>';
            die();
        }        
        $query = $nguoidung->querySua();
        $param = array(":mand"=>$mand, ":trangthai"=>0);
        $flag = $db->themXoaSua($query,$param);
        // var_dump($query,$param);die;
        $db->huyKetNoiDB();
        if ($flag) {
            echo '<script>
                window.alert("Khóa thành công!");
                window.history.back();
                </script>';
            die();
          }
    }
    if (isset($_POST['btnMoKhoa'])) {//xử lý mở khóa người dùng
        $mand =$_GET['mand'];                
        $nguoidung = new NguoiDUng();
        $query = $nguoidung->querySua();
        $param = array(":mand"=>$mand, ":trangthai"=>1);
        $flag = $db->themXoaSua($query,$param);
        // var_dump($query,$param);die;
        $db->huyKetNoiDB();
        if ($flag) {
            echo '<script>
                window.alert("Mở khóa thành công!");
                window.history.back();
                </script>';
            die();
          }
          echo '<script>
                window.alert("Khóa thất bại!");
                window.history.back();
                </script>';
          die();
    }
  
}
?>