<?php
if(count($_POST)>0){
    $password = $_POST['password'];
    session_start();

    if($password==$_SESSION['sql']){
        $_SESSION['password']=$password;
        header("Location: tong-quan.php");
        exit();
    }else{
        echo'
    <script>
        window.alert("Nhập lại!");
        window.history.back();
    </script>
        ';
    exit();    
    }
}
?>