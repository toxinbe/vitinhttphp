<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <?php 
    include 'layout/check.php';
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
                <h3 class="page-title">Danh Mục</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row" style="margin:0;padding:0;">
            <div class="col-xl-6">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <div class="row">
                      <div class="col-md-6">
                        <h6 class="m-0">Danh mục sản phẩm</h6>
                      </div>
                      <div class="col-md-6" style="text-align:right">
                        <a href="" class="mb-2 btn btn-success mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-plus"></i> Thêm</a>
                      </div>
                    </div>
                  </div>
                  <div class="table-sp">                  
                    
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0" style="width:11%;">Sắp xếp</th>
                          <th scope="col" class="border-0" colspan="10" style="text-align:left">Tên danh mục</th>
                          <th scope="col" class="border-0" style="text-align:right;padding-right: 70px!important">Tùy chỉnh</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width:11%;"><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">0</button></td>
                          <td colspan="10" style="text-align:left">PC</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                          
                        </tr>
                        <tr>
                          <td style="width:11%;"></td>
                          <td style="width:11%;"><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">1</button></td>
                          <td colspan="9" style="text-align:left">T&T</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                          
                        </tr>
                        <tr>
                          <td><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">0</button></td>
                          <td colspan="10" style="text-align:left">Laptop</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                                              
                        </tr>
                        <tr>
                          <td style="width:11%;"></td>
                          <td style="width:11%;"><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">1</button></td>
                          <td colspan="9" style="text-align:left">Asus</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                          
                        </tr>
                        <tr>
                          <td style="width:11%;"></td>
                          <td style="width:11%;"><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">1</button></td>
                          <td colspan="9" style="text-align:left">Acer</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                          
                        </tr>
                        <tr>
                          <td style="width:11%;"></td>
                          <td style="width:11%;"><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">1</button></td>
                          <td colspan="9" style="text-align:left">Dell</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                          
                        </tr>
                        <tr>
                          <td style="width:11%;"></td>
                          <td style="width:11%;"><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">1</button></td>
                          <td colspan="9" style="text-align:left">Msi</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                          
                        </tr>
                        </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <div class="row">
                      <div class="col-md-6">
                        <h6 class="m-0">Danh mục bài viết</h6>
                      </div>
                      <div class="col-md-6" style="text-align:right">
                        <a href="" class="mb-2 btn btn-success mr-2 btn-font" style="margin:0 !important;"><i class="fas fa-plus"></i> Thêm</a>
                      </div>
                    </div>
                  </div>
                  <div class="table-sp">                  
                    
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0" style="width:11%;">Sắp xếp</th>
                          <th scope="col" class="border-0" colspan="10" style="text-align:left">Tên danh mục</th>
                          <th scope="col" class="border-0" style="text-align:right;padding-right: 70px!important">Tùy chỉnh</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td style="width:11%;"><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">0</button></td>
                          <td colspan="10" style="text-align:left">Công nghệ</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                          
                        </tr>
                        <tr>
                          <td><button type="button" class="mb-2 btn btn-sm btn-outline-light mr-1">0</button></td>
                          <td colspan="10" style="text-align:left">Tuyển dụng</td>
                          <td style="text-align:right">
                                                  <a href="" class="mb-2 btn btn-success mr-2 btn-font"><i class="fas fa-plus"></i> Thêm cấp con</a>

                          <button type="button" class="mb-2 btn btn-danger mr-2 btn-font">
                            <i class="fas fa-times"></i> Xóa
                          </button>
                          </td>                                              
                        </tr>
                        </tbody>
                    </table>
                  </div>
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