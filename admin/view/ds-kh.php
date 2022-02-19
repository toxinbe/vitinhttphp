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
                            <h3 class="page-title">Người Dùng</h3>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <div class="col-12">
                        <div class="card card-small mb-4">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="m-0">Danh sách người dùng</h6>
                                    </div>
                                    <!-- <div class="col-md-6" style="text-align:right">
                                        <a href="them-kh.php" class="mb-2 btn btn-success mr-2 btn-font"
                                            style="margin:0 !important;"><i class="fas fa-user-plus"></i> Thêm</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="table-sp">

                                <div class="card-body p-0 pb-3 text-center">
                                    <table class="table mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-0">#</th>
                                                <th scope="col" class="border-0">Email</th>
                                                <th scope="col" class="border-0">Họ Tên</th>
                                                <th scope="col" class="border-0">SĐT</th>
                                                <th scope="col" class="border-0">Địa chỉ</th>
                                                <th scope="col" class="border-0 none">Loại</th>
                                                <th scope="col" class="border-0 none">Trạng thái</th>
                                                <th scope="col" class="border-0">Tùy chỉnh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include '../model/database.php';
                                                include '../model/nguoidung.php';
                                                include '../controller/hamtienich.php';
                                                $db = new Database();
                                                $NguoiDung = new NguoiDung();
                                                $query = $NguoiDung->queryLayDanhSachNguoiDung();
                                                $arrNguoiDung = $db->timDanhSach($query);
                                                if (count($arrNguoiDung) > 0) {
                                                    foreach ($arrNguoiDung as $nd) {
                                                        echo '
                                                        <tr>
                                                        <form action="../controller/xuly-kh.php?mand=' . $nd['mand'] . '" method="post">
                                                        <td class="block">';
                                                        if($nd['trangthai']=="0"){
                                                            echo'<button type="button" class="mb-2 btn btn-sm btn-outline-warning mr-1 btn-font">ID' . $nd['mand'] . '</button>';
                                                        }else if($nd['trangthai']=="1"){
                                                            echo'<button type="button" class="mb-2 btn btn-sm btn-outline-success mr-1 btn-font">ID' . $nd['mand'] . '</button>';
                                                        }
                                                        echo'<p class="none">ID' . $nd['mand'] . '</p>
                                                        </td>
                                                        <td>' . $nd['email'] . '</td>
                                                        <input type="text" hidden name="loai" value="'.$nd["loai"].'">                                                        
                                                        <td>' . $nd['hoten'] . '</td>
                                                        <td>' . $nd['sodienthoai'] . '</td>                          
                                                        <td title="' . $nd['diachi'].'">'. hienThiDiaChi($nd['diachi']) . '</td>
                                                        <td>'.hienThiLoaiNguoiDung($nd['loai']).'</td>';
                                                        if($nd['trangthai']=="0"){
                                                            echo'<td class="none"><button type="button" class="mb-2 btn btn-sm btn-outline-warning mr-1 btn-font">'.hienThiTrangThaiNguoiDung($nd['trangthai']).'</button></td>';
                                                            echo'<td>
                                                            <button name="btnMoKhoa" value="mokhoa" class="mb-2 btn btn-success mr-2 btn-font">
                                                            <i class="fas fa-unlock"></i><p>&nbspMở khóa</p>
                                                             
                                                            </button>
                                                            </td>';
                                                        }else if($nd['trangthai']=="1"){
                                                            echo'<td class="none"><button type="button" class="mb-2 btn btn-sm btn-outline-success mr-1 btn-font">'.hienThiTrangThaiNguoiDung($nd['trangthai']).'</button></td>';
                                                            echo'<td>
                                                            <button name="btnKhoa" value="khoa"  class="mb-2 btn btn-warning mr-2 btn-font">
                                                            <i class="fas fa-lock"></i><p>&nbspKhóa</p>
                                                            </button>
                                                            </td>';
                                                        }
                                                        echo '
                                                        </form>
                                                        </tr>';
                                                    }
                                                }
                                            ?>
                                        </tbody>
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