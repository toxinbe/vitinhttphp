<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <?php include 'layout/head.php';?>
</head>

<body>
    <?php include 'layout/header-menu.php';?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Tin Tức</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <!-- Blog entries-->
            <div class="col-lg-10">
                <!-- Featured blog post-->
                <div class="card mb-4 reset" style="margin:30px 0 20px; text-align:justify">
                    <a href="chi-tiet-tin-tuc.php"><img class="card-img-top" style="width:100%"
                            src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" /></a>
                    <div class="card-body reset" style="padding-top:15px;">
                        <a href="chi-tiet-tin-tuc.php">
                            <h2 class="card-title">Featured Post Title</h2>
                        </a>
                        <div style="margin:10px 0 20px;" class="small text-muted"><a href="#">Admin</a> - January 1,
                            2021</div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <?php
                        for($i=0;$i<4;$i++){
                            echo'<div class="row reset" style="padding:15px; border-bottom: 1px solid #ccc; text-align:justify">
                            <div class="col-md-5">
                                <a href="chi-tiet-tin-tuc.php"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            </div>
                            <div class="col-md-7" style="padding-top:15px;padding-left:15px;">
                                <div class="card-body">
                                    <a href="chi-tiet-tin-tuc.php"><h2 class="card-title h4">Post Title</h2></a>
                                    <div style="margin:10px 0 20px;" class="small text-muted"><a href="#">Admin</a> - January 1, 2021</div>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                </div>
                            </div>
                        </div>';
                        }
                    ?>

                <!-- Pagination-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav>
                                <ul class="pagination">
                                    <li style="font-size:16px"><a href="#"><i class="fas fa-arrow-down"></i> Xem
                                            thêm</a></li>

                                    <!-- <li>
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
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-1"></div>
        </div>
    </div>
    <?php include 'layout/footer.php';?>
</body>

</html>