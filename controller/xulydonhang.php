<?php
//*************************************
if (count($_POST) > 0 || count($_GET) > 0) {
  include '../admin/model/database.php';
  include '../admin/model/donhang.php';
  
  $db = new Database();
    if (isset($_POST['btnHuy'])) {//xử lý hủy đơn hàng
        $maDonHangCanHuy =$_GET['madh'];            
        $tinhtrang =$_POST['tinhtrang'];    
        $donhang = new DonHang();
        $query = $donhang->querySua();
        $param = array(":madh"=>$maDonHangCanHuy,":tinhtrang"=>3);
        $flag = $db->themXoaSua($query,$param);
        $db->huyKetNoiDB();
        if ($flag) {
            echo '<script>
                window.alert("Hủy Đơn Hàng thành công!");
                window.history.back();
                </script>';
            die();
          }
         
    }
  
}
?>