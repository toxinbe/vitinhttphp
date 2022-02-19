<?php
class DonHang
{
    private $madh; 
    private $ngaydat; 
    private $tinhtrang; //0:chờ xác nhận  1:đang xử lý 2:đã hoàn thành 3:hủy
    private $hinhthucthanhtoan; //1: tien mat 2:chuyen khoang
    private $tongtien;
    private $mand; 
    private $ghichu; 
    public function __construct()
    {
        $this->madh = null;
        $this->ngaydat = null;
        $this->tinhtrang = null;
        $this->hinhthucthanhtoan = null;
        $this->tongtien = null;
        $this->mand = null;
        $this->ghichu = null;
    }
    public function NguoiDung($madh, $ngaydat, $tinhtrang, $hinhthucthanhtoan, $tongtien, $mand, $ghichu)
    {
        $this->madh = $madh;
        $this->ngaydat = $ngaydat;
        $this->tinhtrang = $tinhtrang;
        $this->hinhthucthanhtoan = $hinhthucthanhtoan;
        $this->tongtien = $tongtien;       
        $this->mand = $mand;
        $this->ghichu = $ghichu;
    }

    public function queryThemDonHang()
    {
        $query = "INSERT INTO donhang (ngaydat, tinhtrang, hinhthucthanhtoan, tongtien, mand, ghichu)
                VALUES (:ngaydat, :tinhtrang, :hinhthucthanhtoan, :tongtien, :mand, :ghichu)";
        return $query;
    }
    public function queryTimTheoMadh()
    {
        $query = "SELECT * FROM donhang WHERE madh=:madh";
        return $query;
    }
    public function queryTimTheoNgayDat()
    {
        $query = "SELECT * FROM donhang WHERE ngaydat=:ngaydat";
        return $query;
    }
    public function queryLayDanhSachDonHang() {
        $query="SELECT * FROM donhang";
        return $query;
    }

    public function querySua() {
        $query="UPDATE donhang
        SET tinhtrang = :tinhtrang
        WHERE madh = :madh";
        return $query;
    }
      //set
      public function set_madh($madh)
      {
          $this->madh = (int)$madh;
      }
      public function set_ngaydat($ngaydat)
      {
          $this->ngaydat = $ngaydat;
      }
      public function set_tinhtrang($tinhtrang)
      {
          $this->tinhtrang = (int)$tinhtrang;
      }
      public function set_hinhthucthanhtoan($hinhthucthanhtoan)
      {
          $this->hinhthucthanhtoan = (int)$hinhthucthanhtoan;
      }
      public function set_tongtien($tongtien)
      {
          $this->tongtien = (double)$tongtien;
      }
      public function set_mand($mand)
      {
          $this->mand = (int)$mand;
      }      
      public function set_ghichu($ghichu)
      {
          $this->ghichu = $ghichu;
      }
      //get
      public function get_madh()
      {
          return (int)$this->madh;
      }
      public function get_ngaydat()
      {
          return $this->ngaydat;
      }
      public function get_tinhtrang()
      {
          return (int)$this->tinhtrang;
      }
      public function get_hinhthucthanhtoan()
      {
          return (int)$this->hinhthucthanhtoan;
      }
      public function get_tongtien()
      {
          return (double)$this->tongtien;
      }
      public function get_mand()
      {
          return (int)$this->mand;
      }
      public function get_ghichu()
      {
          return $this->ghichu;
      }
}
?>