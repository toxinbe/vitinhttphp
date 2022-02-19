<?php
session_start();
if(isset($_SESSION["email"])){
    unset($_SESSION["email"]);
    unset($_SESSION["hoTen"]);
    unset($_SESSION["soDienThoai"]);
    unset($_SESSION["diaChi"]);
    unset($_SESSION["mand"]);

    header("Location: ../view/login.php");
    exit();
}
?>