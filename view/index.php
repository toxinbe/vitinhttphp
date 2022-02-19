<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <?php include 'layout/head.php'; ?>
</head>

<body>
    <?php include 'layout/header-menu.php'; ?>
    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li class="banner-tt">
                    <img src="img/h4-slide.png" alt="Slide">
                </li>
                <li class="banner-tt">
                    <img src="img/h4-slide2.png" alt="Slide">
                </li>
                <li class="banner-tt">
                    <img src="img/h4-slide3.png" alt="Slide">
                </li>
            </ul>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-sync"></i>
                        <p>Bảo Hành 1 Đổi 1</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-shipping-fast"></i>
                        <p>Giao Hàng Miễn Phí</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-credit-card"></i>
                        <p>Thanh Toán An Toàn</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fas fa-gift"></i>
                        <p>Quà Tặng Hấp Dẫn</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Tất cả sản phẩm</h2>
                        <div class="product-carousel">
                            <?php
                            include_once '../admin/model/database.php';
                            include_once '../admin/model/sanpham.php';
                            include_once '../admin/model/danhmucsp.php';
                            $db = new Database();
                            $SanPham = new SanPham();
                            $DanhMucSP = new DanhMucSP();
                            $query = $SanPham->queryLayDanhSachSanPham();
                            $arrSanPham = $db->timDanhSach($query);
                            if (count($arrSanPham) > 0) {
                                foreach ($arrSanPham as $sp) {
                                    $SanPham->set_dongia($sp['dongia']);
                                    echo '<div class="single-product">
                                        <form action="../controller/xulygiohang.php" method="POST">
                                            <div class="product-f-image">
                                                <img src="../view/img/uploads/' . $sp['hinh'] . '" alt="">
                                                <div class="product-hover">
                                                    <button type="submit" name="order_action" value="add"  class="add-to-cart-link" id="them-gio-hang"><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</button>
                                                    <a href="chi-tiet-san-pham.php?masp=' . $sp['masp'] . '" class="view-details-link"><i class="fa fa-link"></i> XEM CHI TIẾT</a>
                                                </div>
                                            </div>                                
                                            <h2><a href="chi-tiet-san-pham.php?masp=' . $sp['masp'] . '">' . $sp['tensp'] . '</a></h2>                                
                                            <div class="product-carousel-price">
                                                <ins>' . number_format($sp['dongia'], 0, ",", ".") . 'đ</ins> <del>' . number_format($SanPham->giaChuaGiam(), 0, ",", ".") . 'đ</del>
                                                <input type="text" hidden name="product_masp" value="'.$sp["masp"].'">
                                                <input type="text" hidden  name="product_tensp" value="'.$sp["tensp"].'">
                                                <input type="text" hidden name="product_dongia" value="'.$sp["dongia"].'">
                                                <input type="text" hidden name="product_hinh" value="'.$sp["hinh"].'"> 
                                            </div>
                                        </form>
                                        </div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Máy Bộ</h2>
                        <div class="product-carousel">
                            <?php
                            if (count($arrSanPham) > 0) {
                                foreach ($arrSanPham as $sp) {
                                    $SanPham->set_dongia($sp['dongia']);
                                    $query = $DanhMucSP->queryTimDanhMucSPTheoMa();
                                    $param = array(":madmsp"=>$sp['madmsp']);
                                    $dmsp = $db->timMotDoiTuong($query,$param);
                                    if ($dmsp != null) {
                                        if ($dmsp['madmspcha'] == "1") { //
                                            echo '<div class="single-product">
                                            <form action="../controller/xulygiohang.php" method="POST">
                                            <div class="product-f-image">
                                                <img src="../view/img/uploads/' . $sp['hinh'] . '" alt="">
                                                <div class="product-hover">
                                                    <button type="submit" name="order_action" value="add"  class="add-to-cart-link" id="them-gio-hang"><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</button>
                                                    <a href="chi-tiet-san-pham.php?masp=' . $sp['masp'] . '" class="view-details-link"><i class="fa fa-link"></i> XEM CHI TIẾT</a>
                                                </div>
                                            </div>                                
                                            <h2><a href="chi-tiet-san-pham.php?masp=' . $sp['masp'] . '">' . $sp['tensp'] . '</a></h2>                                
                                            <div class="product-carousel-price">
                                                <ins>' . number_format($sp['dongia'], 0, ",", ".") . 'đ</ins> <del>' . number_format($SanPham->giaChuaGiam(), 0, ",", ".") . 'đ</del>
                                                <input type="text" hidden name="product_masp" value="'.$sp["masp"].'">
                                                <input type="text" hidden  name="product_tensp" value="'.$sp["tensp"].'">
                                                <input type="text" hidden name="product_dongia" value="'.$sp["dongia"].'">
                                                <input type="text" hidden name="product_hinh" value="'.$sp["hinh"].'">
                                            </div>
                                            </form> 
                                        </div>';
                                        }
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Laptop</h2>
                        <div class="product-carousel">
                            <?php
                            if (count($arrSanPham) > 0) {
                                foreach ($arrSanPham as $sp) {
                                    $SanPham->set_dongia($sp['dongia']);
                                    $query = $DanhMucSP->queryTimDanhMucSPTheoMa();
                                    $param = array(":madmsp"=>$sp['madmsp']);
                                    $dmsp = $db->timMotDoiTuong($query,$param);
                                    if ($dmsp != null) {
                                        if ($dmsp['madmspcha'] == "3") { //
                                            echo '<div class="single-product">
                                            <form action="../controller/xulygiohang.php" method="POST">
                                            <div class="product-f-image">
                                                <img src="../view/img/uploads/' . $sp['hinh'] . '" alt="">
                                                <div class="product-hover">
                                                    <button type="submit" name="order_action" value="add"  class="add-to-cart-link" id="them-gio-hang"><i class="fa fa-shopping-cart"></i> THÊM GIỎ HÀNG</button>
                                                    <a href="chi-tiet-san-pham.php?masp=' . $sp['masp'] . '" class="view-details-link"><i class="fa fa-link"></i> XEM CHI TIẾT</a>
                                                </div>
                                            </div>                                
                                            <h2><a href="chi-tiet-san-pham.php?masp=' . $sp['masp'] . '">' . $sp['tensp'] . '</a></h2>                                
                                            <div class="product-carousel-price">
                                                <ins>' . number_format($sp['dongia'], 0, ",", ".") . 'đ</ins> <del>' . number_format($SanPham->giaChuaGiam(), 0, ",", ".") . 'đ</del>
                                                <input type="text" hidden name="product_masp" value="'.$sp["masp"].'">
                                                <input type="text" hidden  name="product_tensp" value="'.$sp["tensp"].'">
                                                <input type="text" hidden name="product_dongia" value="'.$sp["dongia"].'">
                                                <input type="text" hidden name="product_hinh" value="'.$sp["hinh"].'">
                                            </div>
                                            </form> 
                                        </div>';
                                        }
                                    }
                                }
                            }
                            $db->huyKetNoiDB();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr><br><br><br>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/brand1.png" alt="">
                            <img src="img/brand2.png" alt="">
                            <img src="img/brand3.png" alt="">
                            <img src="img/brand4.png" alt="">
                            <img src="img/brand5.png" alt="">
                            <img src="img/brand6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div> <!-- End brands area -->
    <?php include 'layout/footer.php'; ?>
</body>

</html>