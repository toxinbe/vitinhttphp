<?php
    include_once '../admin/model/sanpham.php';
    class xulygiohang{
        public function __construct($order_action){
            switch($order_action){
                case "add":
                    $product_masp=$_POST["product_masp"];
                    $product_tensp=$_POST["product_tensp"];
                    $product_dongia=$_POST["product_dongia"]; 
                    $product_hinh=$_POST["product_hinh"];              
                    $product=new SanPham();
                    $product->SanPham($product_masp,$product_tensp, "", "",1, $product_dongia,"",$product_hinh);
                    
                   if(!empty($_SESSION["cart_item"])){
                    if(array_key_exists( $product_masp,$_SESSION["cart_item"])){
                        $num=$_SESSION["cart_item"][$product_masp]->get_soluong();
                        $_SESSION["cart_item"][$product_masp]->set_soluong($num +1);
                    }else{
                        $_SESSION["cart_item"][$product_masp]=$product;
                    }
                   }else{
                    $_SESSION["cart_item"][$product_masp]=$product;
                   }
                       echo'
                        <script>
                            //window.alert("Đã thêm vào giỏ hàng!");
                            window.history.back();
                        </script>
                            ';
                            exit();
                    
                    break;
                case "clear":
                    session_start();
                    unset($_SESSION["cart_item"]);
                    header("Location: ../view/index.php");                   
                    break;
                case "remove":
                    $maspremove="";
                    if(is_array($_POST['order_action'])){
                        foreach ($_POST['order_action'] as $key=>$value) {
                            $maspremove=$key;
                        }
                    }  
                    $this->removeSP($maspremove);
                    if(isset($_SESSION["cart_item"])){
                        $data["cart"]=$_SESSION["cart_item"];

                    }
                    
                    include_once '../view/gio-hang.php';
                    
                    break;
                case 'update':

                    $this->updateSP();
                    if(isset($_SESSION["cart_item"])){
                        $data["cart"]=$_SESSION["cart_item"];

                    }
                    
                    include_once '../view/gio-hang.php';
                    break;
            

                case "checkout":
                    if(isset($_SESSION["cart_item"])){
                        $data["cart"]=$_SESSION["cart_item"];
                    }
                    
                    include_once '../view/gio-hang.php';
                    
                    break;
                case "order":                    
                    if(isset($_SESSION["cart_item"])){
                        foreach($_SESSION["cart_item"] as $product){
                            if($product!=null){
                                $masp=$product->get_masp();
                                $tensp=$product->get_tensp();
                                $madmsp=$product->get_madmsp();
                                $baohanh=$product->get_baohanh();
                                $soluong=$product->get_soluong();
                                $dongia=$product->get_dongia();
                                $mota=$product->get_mota();
                                $hinh=$product->get_hinh();
                                $_SESSION["giohang"][$masp]['masp']=$masp;
                                $_SESSION["giohang"][$masp]['tensp']=$tensp;
                                $_SESSION["giohang"][$masp]['madmsp']=$madmsp;
                                $_SESSION["giohang"][$masp]['baohanh']=$baohanh;
                                $_SESSION["giohang"][$masp]['soluong']=$soluong;
                                $_SESSION["giohang"][$masp]['dongia']=$dongia;
                                $_SESSION["giohang"][$masp]['mota']=$mota;
                                $_SESSION["giohang"][$masp]['hinh']=$hinh;
                            }
                        }
                    }
                    header("Location: ../view/thanh-toan.php");                   
                    break;
                case "thanhtoan":                    
                    if(isset($_SESSION["cart_item"])){
                        $data["cart"]=$_SESSION["cart_item"];    
                    }
                    include_once '../view/thanh-toan.php';
                    break;
                default:
                    $product=new SanPham();
                    $data["product"]=$this->getAllSanpham($product);
                    var_dump($data);
                    die();
                break;
            }
        }

        public function getAllSanpham($product){
            return $product ->getAllSanpham();
        }
        public function removeSP($maspremove)
        {
            error_reporting(0);
            session_start();         
            $product_masp=$maspremove;
        if (!empty($_SESSION["cart_item"])) {
            foreach ($_SESSION["cart_item"] as $select) {
                if ($select->get_masp() == $product_masp)
                    unset($_SESSION["cart_item"][$product_masp]);     
            }
        }
        }
        public function updateSP()
        {
            error_reporting(0);
            session_start();
            $product_soluong=$_POST["product_soluong"];
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $select) {
                    foreach ($product_soluong as $key => $value) { //key= masp, value=soluong

                        if ($select->get_masp() == $key) {
                            $_SESSION["cart_item"][$select->get_masp()]->set_soluong((int)$value);
                        }
                    }                    
                }
            }
        }               
    }
    session_start();
    $order_action="";
    if(isset($_POST['order_action'])){
        $order_action=$_POST['order_action'];
        if(is_array($order_action)){
            foreach ($order_action as $key => $value) {
                $order_action=$value;
            }
        }
    }else if(isset($_GET['action'])){
        $order_action=$_GET['action'];
    }
    $orderController=new xulygiohang($order_action);

?>