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
                            <h3 class="page-title">Bài Viết</h3>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <div class="col-12">
                        <div class="card card-small mb-4">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="m-0">Danh sách bài viết</h6>
                                    </div>
                                    <div class="col-md-6" style="text-align:right">
                                        <a href="them-bv.php" class="mb-2 btn btn-success mr-2 btn-font"
                                            style="margin:0 !important;"><i class="fas fa-plus"></i> Thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-sp">

                                <div class="card-body p-0 pb-3 text-center">
                                    <table class="table mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th scope="col" class="border-0">Hình ảnh</th>
                                                <th scope="col" class="border-0">Tiêu đề</th>
                                                <th scope="col" class="border-0">Chủ đề</th>
                                                <th scope="col" class="border-0">Tác giả</th>
                                                <th scope="col" class="border-0">Ngày đăng</th>
                                                <th scope="col" class="border-0">Tùy chỉnh</th>
                                            </tr>
                                        </thead>
                                        <tbody><?php
                        $arrTenHinh=array("windows-11","ky-thuat-vien","giu-xe");
                        $arrTieuDe=array("Di truyền từ Windows 10, Windows 11 tạo hàng ngàn thư mục trống vô nghĩa.","Tuyển nhân viên kỹ thuật lắp ráp máy vi tính.","Tuyển nhân viên giữ xe lương cao bằng sếp.");
                        $arrChuDe=array("Công nghệ","Tuyển dụng","Tuyển dụng");
                        $arrTacGia=array("Admin","Admin","Admin");
                        $arrNgayDang=array("06/11/2021","18/09/2021","01/01/2021");
                        $tam="";
                        for($i=0;$i<count($arrTacGia);$i++) {
                          echo '
                          <tr>
                          <td><img class="hinh-anh" src="../../view/img/'.$arrTenHinh[$i].'.jpg"></td>
                          ';
                          $soLuongKyTu=strlen($arrTieuDe[$i]);
                          $tam="";
                          $demTu=0;
                            for($j=0;$j<$soLuongKyTu;$j++){
                              if($arrTieuDe[$i][$j]==" "&&$demTu<5){
                                $demTu++;
                              }else if($demTu==5){
                                $tam[$j]=".";
                                $tam[$j+1]=".";
                                $tam[$j+2]=".";
                                break;
                              }
                              $tam[$j]=$arrTieuDe[$i][$j];
                            }
                          echo '<td><a href="sua-bv.php">'.$tam.'</a></td>
                          <td>'.$arrChuDe[$i].'</td>
                          <td>'.$arrTacGia[$i].'</td>
                          <td>'.$arrNgayDang[$i].'</td>
                          <td>                   
                          <a href="sua-bv.php" class="mb-2 btn btn-info mr-2 btn-font">
                            <i class="fas fa-edit"></i><p>&nbspSửa</p>
                          </a>
                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i><p>&nbspXóa</p>
                          </button>
                          </td>                          
                          </tr>
                          ';
                        }
                        ?></tbody>
                                    </table>
                                </div>
                            </div>
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