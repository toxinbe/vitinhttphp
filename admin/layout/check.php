<?php
    session_start();
    if (!isset($_SESSION['password'])||$_SESSION['password']!=$_SESSION['sql']||!isset($_SESSION['sql'])){
        header("Location: index.php");
        exit();
    }
?>