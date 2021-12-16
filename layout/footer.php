<div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-about-us">                    
                        <h2><img src="img/logo2.png"></h2>
                        <h4>Vi Tính <span>T&T</span> - Gaming PC & Laptop</h4>
                        <p><i style="padding:0 1.75px !important;" class="fas fa-map-marker-alt"></i> Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM</p>
                        <p><i style="padding:0 2.625px !important;" class="fas fa-mobile-alt"></i> Hotline: 090.xxx.xnxx (Mr.Tòn)</p>
                        <p><i class="fas fa-envelope"></i> Email: dh51805750@student.stu.edu.vn</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/ToxinBE/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/toxinbe61/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC3kWhVCQ_Z4fny88E_Q98EA" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Hotline Tư Vấn</h2>
                        <ul>
                            <li><i class="fas fa-mobile-alt"></i> Phòng Kinh Doanh: <p class="footer-lienhe">090.xxx.xnxx (Mr.Tiến)</p></li>
                            <li><i class="fas fa-mobile-alt"></i> Chăm Sóc Khách Hàng: <p class="footer-lienhe">090.xxx.xnxx (Mr.Tòn)</p></li>
                            <li><i class="fas fa-mobile-alt"></i> Bảo Hành: <p class="footer-lienhe">090.xxx.xnxx (Mr.Tiến)</p></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-menu">
                    <h2 class="footer-wid-title">Thời Gian Làm Việc</h2>
                        <ul>
                            <li><i class="fas fa-store"></i> Showroom<p class="footer-lienhe">8h30 - 19h00 (Mỗi ngày)</p></li>
                            <li><i style="padding:0 1.4px !important;" class="fas fa-tools"></i> Bảo Hành<p class="footer-lienhe">10h00 - 15h00 (T2-T6)</p></li>
                        </ul>                          
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>&copy;<?php echo date("Y");?> Trương Ngọc Toàn & Nguyễn Hoàng Tiến</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS form CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    <script>
                            $(document).ready(function () {
                              //dang nhap
                              $("#txtEmailDangNhap").focus(function () {
                                $("#txtEmailDangNhap").attr('style', 'box-shadow: none;');
                                $("#btnDangNhap").removeAttr('disabled');
                              });                              
                              $("#txtPasswordDangNhap").focus(function () {
                                $("#txtPasswordDangNhap").attr('style', 'box-shadow: none;');
                                $("#btnDangNhap").removeAttr('disabled');
                              });
                              $("#txtEmailDangNhap").blur(function () {
                                  var email = $("#txtEmailDangNhap").val();
                                  var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                  if (!filter.test(email) && email!="") {                         
                                    $("#txtEmailDangNhap").attr('style', 'box-shadow: 0 0 3px #f00;');
                                    $("#btnDangNhap").attr('disabled','');
                                  }else{
                                    $("#txtEmailDangNhap").attr('style', 'box-shadow: none;');
                                    $("#btnDangNhap").removeAttr('disabled');
                                  }
                              });
                              $("#txtPasswordDangNhap").blur(function () {
                                  var password = $("#txtPasswordDangNhap").val();
                                  if ((password.length>=6 &&password.length<=28) || password=="") {                                    
                                    $("#txtPasswordDangNhap").attr('style', 'box-shadow: none;');
                                    $("#btnDangNhap").removeAttr('disabled');
                                  }else{
                                    $("#txtPasswordDangNhap").attr('style', 'box-shadow: 0 0 3px #f00;');
                                    $("#btnDangNhap").attr('disabled','');
                                  }
                              });
                              //dang ky
                              $("#txtEmailDangKy").focus(function () {
                                $("#txtEmailDangKy").attr('style', 'box-shadow: none;');
                                $("#btnDangKy").removeAttr('disabled');
                              });                              
                              $("#txtPasswordDangKy").focus(function () {
                                $("#txtPasswordDangKy").attr('style', 'box-shadow: none;');
                                $("#btnDangKy").removeAttr('disabled');
                              });                              
                              $("#txtRePasswordDangKy").focus(function () {
                                $("#txtRePasswordDangKy").attr('style', 'box-shadow: none;');
                                $("#btnDangKy").removeAttr('disabled');
                              });
                              $("#txtEmailDangKy").blur(function () {
                                  var email = $("#txtEmailDangKy").val();
                                  var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                  if (!filter.test(email) && email!="") {                            
                                    $("#txtEmailDangKy").attr('style', 'box-shadow: 0 0 3px #f00;');
                                    $("#btnDangKy").attr('disabled','');
                                  }else{
                                    $("#txtEmailDangKy").attr('style', 'box-shadow: none;');
                                    $("#btnDangKy").removeAttr('disabled');
                                  }
                              });
                              $("#txtPasswordDangKy").blur(function () {
                                  var password = $("#txtPasswordDangKy").val();
                                  if ((password.length>=6 &&password.length<=28) || password=="") {                                    
                                    $("#txtPasswordDangKy").attr('style', 'box-shadow: none;');
                                    $("#btnDangKy").removeAttr('disabled');
                                  }else{
                                    $("#txtPasswordDangKy").attr('style', 'box-shadow: 0 0 3px #f00;');
                                    $("#btnDangKy").attr('disabled','');
                                  }
                              });
                              $("#txtRePasswordDangKy").blur(function () {
                                  var password = $("#txtPasswordDangKy").val();
                                  var repassword = $("#txtRePasswordDangKy").val();                                 
                                  if ((repassword==password && repassword.length>=6 &&repassword.length<=28) || repassword=="") {                                    
                                    $("#txtRePasswordDangKy").attr('style', 'box-shadow: none;');
                                    $("#btnDangKy").removeAttr('disabled');
                                  }else{
                                    $("#txtRePasswordDangKy").attr('style', 'box-shadow: 0 0 3px #f00;');
                                    $("#btnDangKy").attr('disabled','');
                                  }
                              });
                              //sdt thanh toan
                              $("#txtSoDienThoai").focus(function () {
                                $("#txtSoDienThoai").attr('style', 'box-shadow: none;');
                                $("#btnSoDienThoai").removeAttr('disabled');
                              });
                              $("#txtSoDienThoai").blur(function () {
                                  var sdt = $("#txtSoDienThoai").val();
                                  var filter = /^([0-9\s\-\+\(\)]*)$/;
                                  if ((!filter.test(sdt) || sdt.length!=10 || sdt[0]!="0" )&& sdt!="") {
                                    $("#txtSoDienThoai").attr('style', 'box-shadow: 0 0 3px #f00;');
                                    $("#btnSoDienThoai").attr('disabled','');
                                  }else{
                                    $("#txtSoDienThoai").attr('style', 'box-shadow: none;');
                                    $("#btnSoDienThoai").removeAttr('disabled');
                                  }
                              });
                          });
    </script>