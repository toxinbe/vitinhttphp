<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <?php 
    include '../controller/check.php';
    include 'layout/head.php';?>
    <link rel="stylesheet" href="styles/style-doimk.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img style="width:20%;margin:30px 0 10px;" src="../../view/img/logo1.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="../controller/xulylogin.php" method="post">
                <input type="password" class="fadeIn third" name="oldpassword" placeholder="Mật khẩu cũ" required
                    pattern="(?=^.{6,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                    title="Gồm 6 - 32 ký tự. Chứa chữ cái thường, chữ cái in hoa, số và không chứa ký tự đặc biệt">
                <input type="password" class="fadeIn third" name="newpassword" placeholder="Mật khẩu mới" required
                    pattern="(?=^.{6,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                    title="Gồm 6 - 32 ký tự. Chứa chữ cái thường, chữ cái in hoa, số và không chứa ký tự đặc biệt">
                <input type="password" class="fadeIn third" name="renewpassword" placeholder="Nhập lại mật khẩu mới"
                    required pattern="(?=^.{6,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                    title="Gồm 6 - 32 ký tự. Chứa chữ cái thường, chữ cái in hoa, số và không chứa ký tự đặc biệt">
                <input type="submit" class="fadeIn fourth" name="btnDoiMatKhau" value="Thay Đổi">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a href="tong-quan.php" class="fadeIn fourth underlineHover"><i class="fas fa-arrow-left"></i> Trở
                    về</a>
            </div>

        </div>
    </div>
</body>

</html>