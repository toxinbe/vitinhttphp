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
                            <h3 class="page-title">Xem thông tin Chi Tiết Đơn Hàng</h3>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <div class="col-12">
                        <div class="card card-small mb-4">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="m-0">Thông Tin</h6>
                                    </div>
                                    <div class="col-md-6" style="text-align:right">
                                        <a href="ds-dh.php" class="mb-2 btn btn-primary mr-2 btn-font"
                                            style="margin:0 !important;"><i class="fas fa-arrow-left"></i> Trở về</a>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item p-3">
                                <?php
                                if (isset($_GET['madh'])) {
                                $maDonHangCanXem = strip_tags($_GET['madh']);
                                include '../model/database.php';
                                include '../model/donhang.php';
                                include '../model/nguoidung.php';
                                include '../controller/hamtienich.php';                                
                                $db = new Database();
                                $DonHang = new DonHang();                                
                                $query = $DonHang->queryTimTheoMadh(); //tim dh 
                                $param = array(":madh"=>$maDonHangCanXem);
                                $DonHangCanXem = $db->timMotDoiTuong($query,$param);
                                if ($DonHangCanXem != null){
                                    // var_dump($DonHangCanXem);die;
                                    $maNguoiDungCanXem= $DonHangCanXem['mand'];                            
                                    $NguoiDung =new NguoiDung();
                                    $query = $NguoiDung->queryTimTheoMand();
                                    $param = array(":mand"=>$maNguoiDungCanXem);
                                    $NguoiDungCanXem = $db->timMotDoiTuong($query,$param);
                                    if($NguoiDungCanXem != null){

                                    echo '
                                    <form action="../controller/xuly-dh.php?madh=' . $DonHangCanXem['madh'] . '" method="post">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="feMaDonHang">Mã đơn hàng</label>
                                                        <input type="text" class="form-control" id="feMaDonHang"
                                                            value="'.$DonHangCanXem['madh'].'" disabled>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="feHoTen">Tên khách hàng</label>
                                                        <input type="text" class="form-control" id="feHoTen"
                                                            placeholder="Họ và Tên" value="'.$NguoiDungCanXem['hoten'].'" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="feNgayTaoDon">Ngày tạo đơn</label>
                                                        <input type="text" class="form-control" id="feNgayTaoDon"
                                                            value="'.$DonHangCanXem['ngaydat'].'" disabled>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="feSoDienThoai">Số điện thoại</label>
                                                        <input type="text" class="form-control" id="feSoDienThoai"
                                                            placeholder="Số điện thoại" value="'.$NguoiDungCanXem['sodienthoai'].'" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-3">
                                                    <div class="form-group col-md-6">
                                                        <label for="feTrangThai">Trạng thái</label>
                                                        <select id="feTrangThai" class="form-control" value="'.$DonHangCanXem['tinhtrang'].'" name="tinhtrang">
                                                            <option value="'.$DonHangCanXem['tinhtrang'].'" selected>'.hienThiTinhTrangDonHang($DonHangCanXem['tinhtrang']).'</option>
                                                            <option value="0">Chờ xác nhận  </option>
                                                            <option value="1">Đang xử lý</option>
                                                            <option value="2">Đã hoàn thành</option>
                                                            <option value="3" >Đã Hủy</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="feDiaChi">Địa chỉ</label>
                                                        <input type="text" class="form-control" id="feDiaChi"
                                                            placeholder="Địa chỉ" value="'.$NguoiDungCanXem['diachi'].'" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="feGhiChu">Ghi chú</label>
                                                        <textarea style="padding-top:9.5px;padding-bottom:9.5px;"
                                                            class="form-control" name="feGhiChu" rows="5"
                                                            placeholder="Ghi chú..." disabled>'.$DonHangCanXem['ghichu'].'</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div style="text-align:right;">                                                            
                                                            <button name="btnLuu" value="luu" type="submit"
                                                                class="btn btn-mb-2 btn btn-info mr-2 btn-font"
                                                                style="margin:0 !important;"><i class="fas fa-edit"></i>
                                                                Lưu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>';
                                    }
                                }
                            }
                                ?>
                                </li>
                            </ul>

                            <div class="card-body p-0 pb-3 text-center">
                                <table class="table mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th scope="col" class="border-0">Mã sản phẩm</th>
                                            <th scope="col" class="border-0">Tên sản phẩm</th>
                                            <th scope="col" class="border-0">Số lượng</th>
                                            <th scope="col" class="border-0">Giá</th>
                                            <th scope="col" class="border-0">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_GET['madh'])) {
                                            $maDonHangCanXem = strip_tags($_GET['madh']);
                                            include '../model/chitietdonhang.php';
                                            include '../model/sanpham.php';                                
                                            
                                            $ChiTietDonHang = new ChiTietDonHang();                                
                                            $query = $ChiTietDonHang->queryLayDanhSachChiTietDonHang(); //tim ctdh 
                                            $DanhSachChiTietDonHang = $db->timDanhSach($query);
                                            if ($DanhSachChiTietDonHang != null){
                                                $tongtien=0;
                                                foreach($DanhSachChiTietDonHang as $ctdh){
                                                    $masp= $ctdh['masp'];                            
                                                    $SanPham =new SanPham();
                                                    $query = $SanPham->queryTimSanPhamTheoMa();
                                                    $param = array(":masp"=>$masp);
                                                    $sanpham = $db->timMotDoiTuong($query,$param);                                                    
                                                    if($sanpham != null&& $ctdh['madh']==$DonHangCanXem['madh']){
                                                        $arrThanhTien=$ctdh['soluong']*$ctdh['giaban'];
                                                        $tongtien += ($ctdh['soluong']*$ctdh['giaban']);
                                                        echo '
                                                        <tr>
                                                        <td>'.$masp.'</td>
                                                        <td>'.$sanpham['tensp'].'</td>
                                                        <td>'.$ctdh['soluong'].'</td>                          
                                                        <td>'.number_format($ctdh['giaban'],0,",",".").'</td>                          
                                                        <td>'.number_format($arrThanhTien,0,",",".").'</td>                                 
                                                        </tr>
                                                        
                                                        ';
                                                    }
                                                }
                                                echo '
                                                <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>                          
                                                        <td style:"font-weight: bold;">Tổng tiền:</td>                          
                                                        <td>'.number_format($tongtien,0,",",".").'</td>                                 
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
                <?php include 'layout/footer.php';?>
            </main>
        </div>
    </div>
    <?php include 'layout/script.php';?>
</body>

</html>