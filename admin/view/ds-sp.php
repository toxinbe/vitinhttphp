<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <?php
    include '../controller/check.php';
    include 'layout/head.php'; ?>
</head>

<body class="h-100">
    <?php
    // include 'layout/accent-color.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <?php include 'layout/sidebar.php'; ?>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    <?php include 'layout/navbar.php'; ?>
                    <!-- / .main-navbar -->
                </div>
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->
                    <div class="page-header row no-gutters py-4">
                        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                            <span class="text-uppercase page-subtitle">Quản lý</span>
                            <h3 class="page-title">Sản Phẩm</h3>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <div class="col-12">
                        <div class="card card-small mb-4">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="m-0">Danh sách sản phẩm</h6>
                                    </div>
                                    <div class="col-md-6" style="text-align:right">
                                        <a href="them-sp.php" class="mb-2 btn btn-success mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-plus"></i> Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-sp">
                                <div class="card-body p-0 pb-3 text-center">
                                    <table class="table mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-0">Mã sản phẩm</th>
                                                <th scope="col" class="border-0">Hình ảnh</th>
                                                <th scope="col" class="border-0">Tên sản phẩm</th>
                                                <th scope="col" class="border-0 none">Danh mục</th>
                                                <th scope="col" class="border-0 none">Bảo hành</th>
                                                <th scope="col" class="border-0">Số lượng (Cái)</th>
                                                <th scope="col" class="border-0">Giá (đ)</th>
                                                <th scope="col" class="border-0">Tùy chỉnh</th>
                                            </tr>
                                        </thead>
                                        <tbody><?php
                                                include '../model/database.php';
                                                include '../model/sanpham.php';
                                                include '../model/danhmucsp.php';
                                                $db = new Database();
                                                $SanPham = new SanPham();
                                                $query = $SanPham->queryLayDanhSachSanPham();
                                                $arrSanPham = $db->timDanhSach($query);
                                                if (count($arrSanPham) > 0) {
                                                    foreach ($arrSanPham as $sp) {
                                                        echo '
                                <tr>
                                <td>SP' . $sp['masp'] . '</td>
                                <td><img class="hinh-anh" src="../../view/img/uploads/' . $sp['hinh'] . '"></td>
                                <td>' . $sp['tensp'] . '</td>
                                <td>';
                                                        $DanhMucSP = new DanhMucSP();
                                                        $query = $DanhMucSP->queryTimDanhMucSPTheoMa();
                                                        $param = array(":madmsp"=>$sp['madmsp']);
                                                        $dmsp = $db->timMotDoiTuong($query,$param);
                                                        if ($dmsp!=null) {
                                                            echo $dmsp['ten'];
                                                        }
                                                        echo '</td>
                                <td class="none">' . $sp['baohanh'] . ' tháng</td>                          
                                <td>' . $sp['soluong'] . '</td>                          
                                <td>' . number_format($sp['dongia'], 0, ",", ".") . '</td>                          
                                <td>
                                <a href="sua-sp.php?masp=' . $sp['masp'] . '" class="mb-2 btn btn-info mr-2 btn-font">
                                  <i class="fas fa-edit"></i><p>&nbspSửa</p>
                                </a>
                                <a href="#" onclick="xacNhanXoa(' . $sp['masp'] . ')" class="mb-2 btn btn-danger mr-2 btn-font">
                                <i class="fas fa-times"></i><p>&nbspXóa</p>
                                </a>
                                </td>                          
                                </tr>
                                ';
                                                    }
                                                }
                                                $db->huyKetNoiDB();
                                                ?></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'layout/footer.php'; ?>
            </main>
        </div>
    </div>
    <?php include 'layout/script.php'; ?>
</body>

</html>