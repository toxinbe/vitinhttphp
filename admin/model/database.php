<?php
class Database{
  private $servername;
  private $username;
  private $password;
  private $dbname;
  private static $conn;
  public function __construct(){
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "vitinhtt";
    if(self::$conn==null) $this->ketNoiDB();
    return self::$conn;
  }
  public function __destruct(){
    $this->servername = "";
    $this->username = "";
    $this->password = "";
    $this->dbname = "";
    self::$conn=null;
  }
  private function ketNoiDB(){
        try {
      self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
      // set the PDO error mode to exception
      self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";
      return self::$conn;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
      return false;
    }
  }
  public function huyKetNoiDB(){
    self::$conn = null;
  }
  public function themXoaSua($query, $param = array()){
    if(self::$conn != false){//neu ket noi thanh cong thi thuc hien tap lenh duoi
      $stmt = self::$conn->prepare($query);
      $stmt->execute($param);
      return true;//thanh cong
    }
    return false;//that bai
  }
  public function timDanhSach($query){
    if(self::$conn != false){//neu ket noi thanh cong thi thuc hien tap lenh duoi
      $stmt = self::$conn->prepare($query);
      $stmt->execute();
      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      if($result==true){
        return $stmt->fetchAll();//tim thay tra ve mang danh sach cac doi tuong (tra ve kieu mang)
      }
    }
    return null;//khong tim thay
  }
  public function timMotDoiTuong($query, $param = array()){
    if(self::$conn != false){//neu ket noi thanh cong thi thuc hien tap lenh duoi
      $stmt = self::$conn->prepare($query);
      $stmt->execute($param);
      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $arrDoiTuong=$stmt->fetchAll();
      $dem=count($arrDoiTuong);
      if($result==true && $dem>0){
        return $arrDoiTuong[0];//cau lenh truyen vao se tim 1 doi tuong nen lay doi tuong dau tien trong mang (tra ve kieu mang)
      }
    }
    return null;//khong tim thay
  }public function timKiemSanPham($query, $param = array()){
    if(self::$conn != false){//neu ket noi thanh cong thi thuc hien tap lenh duoi
      $stmt = self::$conn->prepare($query);
      $stmt->execute($param);
      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      if($result==true){
        return $stmt->fetchAll();//cau lenh truyen vao se tim 1 doi tuong nen lay doi tuong dau tien trong mang (tra ve kieu mang)
      }
    }
    return null;//khong tim thay
  }
}
?>