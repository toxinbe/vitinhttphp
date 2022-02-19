<?php
include_once 'database.php';
class SanPham{
    private $masp;//int 10 ky tu
    private $tensp;//string 150 ky tu
    private $madmsp;//int 10 ky tu
    private $baohanh;//int 2 ky tu
    private $soluong;//int 10 ky tu
    private $dongia;//double
    private $mota;//string 500 ky tu
    private $hinh;//string 150 ky tu (<ten file hinh>.<kieu hinh>)

    public function __construct() {
        $this->masp = null;
        $this->tensp = null;
        $this->madmsp = null;
        $this->baohanh = null;
        $this->soluong = null;
        $this->dongia = null;
        $this->mota = null;
        $this->hinh = null;
    }
    public function SanPham($masp,$tensp,$madmsp,$baohanh,$soluong,$dongia,$mota,$hinh) {
        $this->masp = $masp;
        $this->tensp = $tensp;
        $this->madmsp = $madmsp;
        $this->baohanh = $baohanh;
        $this->soluong = $soluong;
        $this->dongia = $dongia;
        $this->mota = $mota;
        $this->hinh = $hinh;
    }
    public function getAllSanpham(){
        $data=null;
        $db = new Database();
        $query = "SELECT * FROM sanpham";
        $data = $db->timDanhSach($query);
        $db->huyKetNoiDB();
        return $data;
    }
    
    public function queryThem() {
        $query="INSERT INTO sanpham ( tensp, madmsp, baohanh, soluong, dongia, mota, hinh)
        VALUES (:tensp, :madmsp, :baohanh, :soluong, :dongia, :mota, :hinh)";
        return $query;
    }
    public function querySua() {
        $query="UPDATE sanpham
        SET tensp = :tensp, madmsp = :madmsp, baohanh = :baohanh, soluong = :soluong, dongia = :dongia, mota = :mota,hinh = :hinh
        WHERE masp = :masp";
        return $query;
    }
    public function queryXoa() {
        $query="DELETE FROM sanpham WHERE masp=:masp";
        return $query;
    }
    public function queryTimSanPhamTheoTen() {
        $query="SELECT * FROM sanpham WHERE tensp=:tensp ";
        return $query;
    }public function queryTimKiem() {
        $query="SELECT * FROM sanpham WHERE tensp like :tensp ";
        return $query;
    }
    public function queryTimSanPhamTheoMa() {
        $query="SELECT * FROM sanpham WHERE masp=:masp ";
        return $query;
    }
    public function queryLayDanhSachSanPham() {
        $query="SELECT * FROM sanpham";
        return $query;
    }
    public function giaChuaGiam() {
        return $this->dongia*(1+1/10);
    }
    //set
    public function set_masp($masp) {
        $this->masp = (int)$masp;
    }
    public function set_tensp($tensp) {
        $this->tensp = $tensp;
    }
    public function set_madmsp($madmsp) {
        $this->madmsp = (int)$madmsp;
    }
    public function set_baohanh($baohanh) {
        $this->baohanh = (int)$baohanh;
    }
    public function set_soluong($soluong) {
        $this->soluong = (int)$soluong;
    }
    public function set_dongia($dongia) {
        $this->dongia = (double)$dongia;
    }
    public function set_mota($mota) {
        $this->mota = $mota;
    }
    public function set_hinh($hinh) {
        $this->hinh = $hinh;
    }

    //get
    public function get_masp() {
        return (int)$this->masp;
    }
    public function get_tensp() {
        return $this->tensp;
    }
    public function get_madmsp() {
        return (int)$this->madmsp;
    }
    public function get_baohanh() {
        return (int)$this->baohanh;
    }
    public function get_soluong() {
        return (int)$this->soluong;
    }
    public function get_dongia() {
        return (double)$this->dongia;
    }
    public function get_mota() {
        return $this->mota;
    }
    public function get_hinh() {
        return $this->hinh;
    }
}
?>