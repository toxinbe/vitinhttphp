<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <?php include 'layout/head.php';?>
    <link rel="stylesheet" href="styles/style-login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <?php
    session_start();
  if(!isset($_SESSION['sql']))     $_SESSION['sql']="123";
  ?>
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img style="width:20%;margin:30px 0 10px;" src="../img/logo1.png" id="icon" alt="User Icon"/>
    </div>

    <!-- Login Form -->
    <form action="xulylogin.php" method="post">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mật khẩu">
      <input type="submit" class="fadeIn fourth" value="Đăng Nhập">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Quên mật khẩu?</a>
    </div>

  </div>
</div>
  </body>
</html>