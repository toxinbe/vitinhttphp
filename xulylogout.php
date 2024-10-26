<?php
session_start();
if(isset($_SESSION["email"])){
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    unset($_SESSION["hoTen"]);
    unset($_SESSION["soDienThoai"]);
    unset($_SESSION["diaChi"]);

    header("Location: login.php");
    exit();
}
?>