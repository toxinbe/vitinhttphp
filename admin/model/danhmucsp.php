<?php
class DanhMucSP
{
    private $madmsp; //int 10 ky tu
    private $cap;  //int 1 ky tu
    private $ten; //string 20 ky tu
    private $madmspcha; //int 10 ky tu
    public function __construct()
    {
        $this->madmsp = null;
        $this->cap = null;
        $this->ten = null;
        $this->madmspcha = null;
    }
    public function DanhMucSP($madmsp, $cap, $ten, $madmspcha)
    {
        $this->madmsp = $madmsp;
        $this->cap = $cap;
        $this->ten = $ten;
        $this->madmspcha = $madmspcha;
    }
    public function queryTimDanhMucSPTheoMa()
    {
        $query = "SELECT * FROM danhmucsp WHERE madmsp=:madmsp ";
        return $query;
    }
    public function queryLayDanhSach()
    {
        $query = "SELECT * FROM danhmucsp";
        return $query;
    }
    //set
    public function set_madmsp($madmsp)
    {
        $this->madmsp = (int)$madmsp;
    }
    public function set_cap($cap)
    {
        $this->cap = (int)$cap;
    }
    public function set_ten($ten)
    {
        $this->ten = $ten;
    }
    public function set_madmspcha($madmspcha)
    {
        $this->madmspcha = (int)$madmspcha;
    }
    //get
    public function get_madmsp()
    {
        return (int)$this->madmsp;
    }
    public function get_cap()
    {
        return (int)$this->cap;
    }
    public function get_ten()
    {
        return $this->ten;
    }
    public function get_madmspcha()
    {
        return (int)$this->madmspcha;
    }
}?>
