<?php
if(count($_POST)>0){
    session_start();
    $oldpassword = $_POST["oldpassword"];
    $newpassword = $_POST["newpassword"];
    $renewpassword = $_POST["renewpassword"];

    if($newpassword!=$renewpassword){
        echo'
        <script>
            window.alert("Nhập lại!");
        </script>
            ';
    }

    if($oldpassword == $_SESSION['sql'] &&$oldpassword>""&&$newpassword>""){
        $_SESSION['password']=$newpassword;            
        echo'
        <script>
            window.alert("Đổi mật khẩu thành công!");
            window.history.back();
        </script>
            ';
    }else{
        echo'
        <script>
            window.alert("Nhập lại!");
        </script>
            ';
    }
    echo'
    <script>
        window.history.back();
    </script>
        ';
    exit();    
}
?>