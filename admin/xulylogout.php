<?php
session_start();
if(isset($_SESSION["password"])){
    unset($_SESSION["password"]);
    header("Location: index.php");
    exit();
}
?>