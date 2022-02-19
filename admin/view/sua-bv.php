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
                            <h3 class="page-title">Sửa thông tin Bài Viết</h3>
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
                                        <a href="ds-bv.php" class="mb-2 btn btn-primary mr-2 btn-font"
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
                                                    <div class="card-body" style="padding-left:5px;padding-right:5px;">
                                                        <input class="form-control form-control-lg mb-3" type="text"
                                                            placeholder="Tiêu đề bài viết"
                                                            value="Tuyển nhân viên giữ xe lương cao bằng sếp">
                                                        <div id="editor-container" style="height:auto;"
                                                            class="add-new-post__editor mb-1"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="feHinhAnh">Hình ảnh</label>
                                                        <input type="file" class="form-control" id="feHinhAnh">
                                                    </div>
                                                </div>
                                                <div class="form-row mb-3">
                                                    <div class="form-group col-md-6">
                                                        <label for="feTenTacGia">Tên tác giả</label>
                                                        <input type="text" class="form-control" id="feTenTacGia"
                                                            placeholder="Tên tác giả" value="Admin">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="feChuDe">Chủ đề</label>
                                                        <select id="feChuDe" class="form-control">
                                                            <option value="0">Chọn ...</option>
                                                            <option value="1">Công nghệ</option>
                                                            <option value="2" selected>Tuyển dụng</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div style="text-align:right;">
                                                    <button type="submit"
                                                        class="btn btn-mb-2 btn btn-secondary mr-2 btn-font"><i
                                                            class="fas fa-undo"></i> Nhập lại</button>
                                                    <button type="submit"
                                                        class="btn btn-mb-2 btn btn-info mr-2 btn-font"
                                                        style="margin:0 !important;"><i class="fas fa-edit"></i>
                                                        Sửa</button>
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