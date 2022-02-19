<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <?php
    include 'layout/head.php'; ?>
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
                <input type="email" id="email" class="fadeIn third" name="txtEmail" placeholder="Email" required>
                <input type="password" id="password" class="fadeIn third" name="txtPassword" placeholder="Mật khẩu" required pattern="(?=^.{6,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Gồm 6 - 32 ký tự. Chứa chữ cái thường, chữ cái in hoa, số và không chứa ký tự đặc biệt">
                <input type="password" id="repassword" class="fadeIn third" name="txtRePassword" placeholder="Nhập lại mật khẩu" required pattern="(?=^.{6,32}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Gồm 6 - 32 ký tự. Chứa chữ cái thường, chữ cái in hoa, số và không chứa ký tự đặc biệt">
                <input type="submit" class="fadeIn fourth" name="btnDangKy" value="Đăng ký">
            </form>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a href="../view/" class="fadeIn fourth underlineHover"><i class="fas fa-arrow-left"></i> Trở về</a>
            </div>
        </div>
    </div>
</body>

</html>