<?php
//*************************************
if (count($_POST) > 0 || count($_GET) > 0) {
  include '../model/database.php';
  include '../model/donhang.php';
  
  $db = new Database();
    if (isset($_POST['btnLuu'])) {//xử lý khóa người dùng
        $madh =$_GET['madh'];
        $tinhtrang= $_POST['tinhtrang'];                
        $donhang = new DonHang();
        $query = $donhang->querySua();
        $param = array(":madh"=>$madh, ":tinhtrang"=>$tinhtrang);
        $flag = $db->themXoaSua($query,$param);
        // var_dump($query,$param);die;
        $db->huyKetNoiDB();
        if ($flag) {
            echo '<script>
                window.alert("Lưu thành công!");
                window.history.back();
                </script>';
            die();
          }
    }
}?>