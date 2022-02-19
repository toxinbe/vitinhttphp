<?php
class ChiTietDonHang
{
    private $mactdh; 
    private $masp; 
    private $madh; 
    private $giaban; 
    private $soluong;
    public function __construct()
    {
        $this->mactdh = null;
        $this->masp = null;
        $this->tinhtrang = null;
        $this->hinhthucthanhtoan = null;
        $this->tongtien = null;
        $this->mand = null;
        $this->ghichu = null;
    }
    public function NguoiDung($mactdh, $masp, $madh, $giaban, $soluong)
    {
        $this->mactdh = $mactdh;
        $this->masp = $masp;
        $this->madh = $madh;
        $this->giaban = $giaban;
        $this->soluong = $soluong;       
    }

    public function queryThemChiTietDonHang()
    {
        $query = "INSERT INTO chitietdh (masp, madh, giaban, soluong)
                VALUES (:masp, :madh, :giaban, :soluong)";
        return $query;
    }
    public function queryTimTheoMa()
    {
        $query = "SELECT * FROM chitietdh WHERE mactdh=:mactdh";
        return $query;
    }
    public function queryTimDanhSachChiTietDonHangTheoMaDH()
    {
        $query = "SELECT * FROM chitietdh WHERE madh=:madh";
        return $query;
    }
    public function queryLayDanhSachChiTietDonHang() {
        $query="SELECT * FROM chitietdh";
        return $query;
    }
      //set
      public function set_mactdh($mactdh)
      {
          $this->madmactdhh = (int)$mactdh;
      }
      public function set_masp($masp)
      {
          $this->masp = (int)$masp;
      }
      public function set_madh($madh)
      {
          $this->madh = (int)$madh;
      }
      public function set_giaban($giaban)
      {
          $this->giaban = (double)$giaban;
      }
      public function set_soluong($soluong)
      {
          $this->soluong = (int)$soluong;
      }
     
      
      //get
      public function get_mactdh()
      {
          return (int)$this->mactdh;
      }
      public function get_masp()
      {
          return (int)$this->masp;
      }
      public function get_madh()
      {
          return (int)$this->madh;
      }
      public function get_giaban()
      {
          return (double)$this->giaban;
      }
      public function get_soluong()
      {
          return (int)$this->soluong;
      }
}
?>