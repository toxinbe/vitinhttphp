<?php
    session_start();
    if(!isset($_SESSION['Login'])) header("Location: ../view/");
?>