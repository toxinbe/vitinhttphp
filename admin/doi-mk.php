<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <?php 
    include 'layout/check.php';
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
      <img style="width:20%;margin:30px 0 10px;" src="../img/logo1.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form action="xulydoimk.php" method="post">
      <input type="password" class="fadeIn third" name="oldpassword" placeholder="Mật khẩu cũ">
      <input type="password" class="fadeIn third" name="newpassword" placeholder="Mật khẩu mới">
      <input type="password" class="fadeIn third" name="renewpassword" placeholder="Nhập lại mật khẩu mới">

      <input type="submit" class="fadeIn fourth" value="Thay Đổi">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a href="ds-kh.php" class="fadeIn fourth" style="color:#5a88ca"><i class="fas fa-arrow-left"></i> Trở về</a>
    </div>

  </div>
</div>
  </body>
</html>