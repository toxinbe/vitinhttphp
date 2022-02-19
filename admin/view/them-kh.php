<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <?php 
    include '../controller/check.php';
    include 'layout/head.php';?>
</head>

<body class="h-100">
    <?php 
    // include 'layout/accent-color.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <?php include 'layout/sidebar.php';?>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    <?php include 'layout/navbar.php';?>
                    <!-- / .main-navbar -->
                </div>
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->
                    <div class="page-header row no-gutters py-4">
                        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                            <span class="text-uppercase page-subtitle">Quản lý</span>
                            <h3 class="page-title">Thêm Người Dùng</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-small mb-4">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="m-0">Thông Tin</h6>
                                    </div>
                                    <div class="col-md-6" style="text-align:right">
                                        <a href="ds-kh.php" class="mb-2 btn btn-primary mr-2 btn-font"
                                            style="margin:0 !important;"><i class="fas fa-arrow-left"></i> Trở về</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-3">
                                    <div class="row">
                                        <div class="col">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="feEmail">Email</label>
                                                        <input type="email" class="form-control" id="feEmail"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="feHoTen">Họ tên</label>
                                                        <input type="text" class="form-control" id="feHoTen"
                                                            placeholder="Họ và Tên">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="fePassword">Mật khẩu</label>
                                                        <input type="password" class="form-control" id="fePassword"
                                                            placeholder="Mật khẩu">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="feSoDienThoai">Số điện thoại</label>
                                                        <input type="text" class="form-control" id="feSoDienThoai"
                                                            placeholder="Số điện thoại">
                                                    </div>
                                                </div>
                                                <div class="form-row mb-3">
                                                    <div class="form-group col-md-6">
                                                        <label for="feRePassword">Nhập lại mật khẩu</label>
                                                        <input type="password" class="form-control" id="feRePassword"
                                                            placeholder="Nhập lại mật khẩu">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="feDiaChi">Địa chỉ</label>
                                                        <input type="text" class="form-control" id="feDiaChi"
                                                            placeholder="Địa chỉ">
                                                    </div>
                                                </div>
                                                <div style="text-align:right;">
                                                    <button type="submit"
                                                        class="btn btn-mb-2 btn btn-secondary mr-2 btn-font"><i
                                                            class="fas fa-undo"></i> Nhập lại</button>
                                                    <button type="submit"
                                                        class="btn btn-mb-2 btn btn-success mr-2 btn-font"
                                                        style="margin:0 !important;"><i class="fas fa-user-plus"></i>
                                                        Thêm</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php include 'layout/footer.php';?>
            </main>
        </div>
    </div>
    <?php include 'layout/script.php';?>
</body>

</html>