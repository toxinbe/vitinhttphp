<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <?php include '../view/layout/head.php'; ?>
</head>

<body>
    <?php include '../view/layout/header-menu.php'; ?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Máy Bộ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <?php
            include_once '../admin/model/database.php';
            include_once '../admin/model/sanpham.php';
            include_once '../admin/model/danhmucsp.php';
            $db = new Database();
            $SanPham = new SanPham();
            $DanhMucSP = new DanhMucSP();
            $queryLayDanhSachSanPham = $SanPham->queryLayDanhSachSanPham();
            $arrSanPham = $db->timDanhSach($queryLayDanhSachSanPham);
            if (count($arrSanPham) > 0) {
                foreach ($arrSanPham as $sp) {
                    $SanPham->set_dongia($sp['dongia']);
                    $query = $DanhMucSP->queryTimDanhMucSPTheoMa();
                    $param = array(":madmsp"=>$sp['madmsp']);
                    $dmsp = $db->timMotDoiTuong($query,$param);
                    if ($dmsp != null) {
                        if ($dmsp['madmspcha'] == "1") { //
                            echo '<div class="col-md-3 col-sm-6">';
                            echo '<form action="../controller/xulygiohang.php" method="POST">';
                            echo '  <div class="single-shop-product san-pham">';
                            echo '      <div class="product-upper">';
                            echo '          <a href="chi-tiet-san-pham.php?masp='.$sp['masp'].'"><img src="../view/img/uploads/' . $sp['hinh'] . '" alt=""></a>';
                            echo '      </div>';
                            echo '      <h2><a href="chi-tiet-san-pham.php?masp='.$sp['masp'].'">' . $sp['tensp'] . '</a></h2>';
                            echo '      <div class="product-carousel-price">';
                            echo '          <ins>' . number_format($sp['dongia'], 0, ",", ".") . 'đ</ins> <del>' . number_format($SanPham->giaChuaGiam(), 0, ",", ".") . 'đ</del>';
                            echo '      </div>  ';
                            echo '      <div class="product-option-shop">';
                            echo '          <button type="submit" name="order_action" value="add" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" ">Thêm giỏ hàng</button>';
                            echo '      <input type="text" hidden name="product_masp" value="'.$sp["masp"].'">
                                        <input type="text" hidden  name="product_tensp" value="'.$sp["tensp"].'">
                                        <input type="text" hidden name="product_dongia" value="'.$sp["dongia"].'">
                                        <input type="text" hidden name="product_hinh" value="'.$sp["hinh"].'">';
                            echo '      </div>';
                            echo '  </div>';
                            echo '</form>';
                            echo '</div>';
                        }
                    }
                }
            }
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include '../view/layout/footer.php'; ?>
</body>

</html>