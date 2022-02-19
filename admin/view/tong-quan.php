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
                            <h3 class="page-title">Tổng Quan</h3>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <!-- Small Stats Blocks -->
                    <div class="row">
                        <div class="col-lg col-md-6 col-sm-6 mb-4">
                            <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                    <div class="d-flex flex-column m-auto">
                                        <div class="stats-small__data text-center">
                                            <span class="stats-small__label text-uppercase">Người Dùng</span>
                                            <h6 class="stats-small__value count my-3">2,390</h6>
                                        </div>
                                        <div class="stats-small__data">
                                            <span
                                                class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                                        </div>
                                    </div>
                                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md-6 col-sm-6 mb-4">
                            <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                    <div class="d-flex flex-column m-auto">
                                        <div class="stats-small__data text-center">
                                            <span class="stats-small__label text-uppercase">Sản Phẩm</span>
                                            <h6 class="stats-small__value count my-3"><?php
                        include '../model/database.php';
                        include '../model/sanpham.php';
                        $db = new Database();
                        $SanPham=new SanPham();
                        $query=$SanPham->queryLayDanhSachSanPham();
                        $arrSanPham=$db->timDanhSach($query);
                        $tongSoLuong=0;
                        if(count($arrSanPham)>0){
                          foreach($arrSanPham as $sp) {
                            $tongSoLuong+=(int)$sp['soluong'];
                          }
                        }
                        echo $tongSoLuong;
                        ?></h6>
                                        </div>
                                        <!-- <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                      </div> -->
                                    </div>
                                    <!-- <canvas height="120" class="blog-overview-stats-small-2"></canvas> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md-6 col-sm-6 mb-4">
                            <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                    <div class="d-flex flex-column m-auto">
                                        <div class="stats-small__data text-center">
                                            <span class="stats-small__label text-uppercase">Đơn Hàng</span>
                                            <h6 class="stats-small__value count my-3">8,147</h6>
                                        </div>
                                        <div class="stats-small__data">
                                            <span
                                                class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>
                                        </div>
                                    </div>
                                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md-6 col-sm-6 mb-4">
                            <div class="stats-small stats-small--1 card card-small">
                                <div class="card-body p-0 d-flex">
                                    <div class="d-flex flex-column m-auto">
                                        <div class="stats-small__data text-center">
                                            <span class="stats-small__label text-uppercase">Bài Viết</span>
                                            <h6 class="stats-small__value count my-3">2,413</h6>
                                        </div>
                                        <div class="stats-small__data">
                                            <span
                                                class="stats-small__percentage stats-small__percentage--decrease">12.4%</span>
                                        </div>
                                    </div>
                                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Small Stats Blocks -->
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card card-small mb-4">
                                <div class="card-header border-bottom">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="m-0">Đơn hàng đang chờ xử lý</h6>
                                        </div>
                                        <div class="col-md-6" style="text-align:right">
                                            <!-- <a href="them-dh.php" class="mb-2 btn btn-success mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-plus"></i> Thêm</a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="table-sp">

                                    <div class="card-body p-0 pb-3 text-center">
                                        <table class="table mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col" class="border-0">Mã đơn hàng</th>
                                                    <th scope="col" class="border-0">Ngày tạo đơn</th>
                                                    <th scope="col" class="border-0">Tên khách hàng</th>
                                                    <th scope="col" class="border-0 none">Trạng thái</th>
                                                    <th scope="col" class="border-0">Thanh toán</th>
                                                    <th scope="col" class="border-0">Khách phải trả</th>
                                                </tr>
                                            </thead>
                                            <tbody><?php

                                        include '../model/nguoidung.php';
                                        include '../model/donhang.php';
                                        include '../controller/hamtienich.php';                                         
                                       
                                        $donhang = new DonHang();
                                        $query = $donhang->queryLayDanhSachDonHang();
                                        $arrDonHang = $db->timDanhSach($query);
                                        if (count($arrDonHang) > 0){
                                            foreach ($arrDonHang as $dh){
                                                $maNguoiDungCanXem= $dh['mand'];                            
                                                $NguoiDung =new NguoiDung();
                                                $query = $NguoiDung->queryTimTheoMand();
                                                $param = array(":mand"=>$maNguoiDungCanXem);
                                                $NguoiDungCanXem = $db->timMotDoiTuong($query,$param);
                                                if($NguoiDungCanXem != null){
                                                    if($dh['tinhtrang']=="0"){                                                    
                                                        echo '
                                                        <tr>
                                                        <td class="block"><button type="button" class="mb-2 btn btn-sm btn-outline-warning mr-1 btn-font">'.$dh['madh'].'</button><p class="none">DH'.$dh['madh'].'</p></td>
                                                        <td>'.$dh['ngaydat'].'</td>
                                                        <td>'.$NguoiDungCanXem['hoten'].'</td>';                                                        
                                                            echo'<td class="none"><button type="button" class="mb-2 btn btn-sm btn-outline-warning mr-1 btn-font">'.hienThiTinhTrangDonHang($dh['tinhtrang']).'</button></td>';                                                                                   
                                                        if($dh['hinhthucthanhtoan']=="1"){
                                                            echo'<td>'.hienHinhThucThanhToan($dh['hinhthucthanhtoan']).'</td>';
                                                            
                                                        }else if($dh['hinhthucthanhtoan']=="2"){
                                                            echo'<td >'.hienHinhThucThanhToan($dh['hinhthucthanhtoan']).'</td>';
                                                            
                                                        }
                                                        echo '                        
                                                        <td>'.number_format($dh['tongtien'],0,",",".").'đ</td>                       
                                                        </tr>
                                                        ';
                                                    }
                                                    }
                                                }
                                            }
                                        
                                        $db->huyKetNoiDB(); 
                                    ?></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card card-small">
                                <div class="card-header border-bottom">
                                    <h6 class="m-0">Sản phẩm bán chạy</h6>
                                </div>
                                <div class="table-sp">

                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-small list-group-flush">
                                            <li class="list-group-item d-flex px-3 font15">
                                                <span class="text-semibold text-fiord-blue">PC Gaming</span>
                                                <span
                                                    class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                                            </li>
                                            <li class="list-group-item d-flex px-3 font15">
                                                <span class="text-semibold text-fiord-blue">PC Streamer</span>
                                                <span
                                                    class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                                            </li>
                                            <li class="list-group-item d-flex px-3 font15">
                                                <span class="text-semibold text-fiord-blue">Laptop Lập Trình</span>
                                                <span
                                                    class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                                            </li>
                                            <li class="list-group-item d-flex px-3 font15">
                                                <span class="text-semibold text-fiord-blue">PC Đồ Họa</span>
                                                <span
                                                    class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                                            </li>
                                            <li class="list-group-item d-flex px-3 font15">
                                                <span class="text-semibold text-fiord-blue">PC Văn Phòng</span>
                                                <span
                                                    class="ml-auto text-right text-semibold text-reagent-gray">827</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer border-top">
                                        <div class="row" style="zoom:1.25;">
                                            <div class="col">
                                                <select class="custom-select custom-select-sm">
                                                    <option selected>Hôm nay</option>
                                                    <option value="1">Tuần này</option>
                                                    <option value="2">Tháng này</option>
                                                    <option value="3">Năm nay</option>
                                                </select>
                                            </div>
                                            <div class="col text-right view-report">
                                                <a href="#">Xem báo cáo <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- noidung -->
                </div>
                <?php include 'layout/footer.php';?>
            </main>
        </div>
    </div>
    <?php include 'layout/script.php';?>
</body>

</html>