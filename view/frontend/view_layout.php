<?php ob_start(); ?>
<!DOCTYPE html>
<html en="vi">
<head>
    <title>DKT Store</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">

    <link rel="canonical" href="index.html">
    <link rel="shortcut icon"
          href="../../public/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361"
          type="image/x-icon"/>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='../../public/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <script src='../../public/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361'
            type='text/javascript'></script>
    <script src='../../public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361'
            type='text/javascript'></script>
    <script src='../../public/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='../../public/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361'
          rel='stylesheet' type='text/css'/>
    <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body class="index">
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1780127515631166";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<header id="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"><span><i class="fa fa-phone"></i> (04) 6674 2332</span>
                    <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 customer">
                    <?php
                    if (isset($_SESSION["customer_id"]) === false) { ?>
                        <a href="index.php?controller=login"><i class="fa fa-user"></i> ????ng nh???p</a>
                        <a href="index.php?controller=register"><i class="fa fa-user-plus"></i> ????ng k??</a>
                    <?php } else { ?>
                        <a href="index.php?controller=customer&act=edit&id=<?php if(isset($_SESSION['customer_id']) ) echo $_SESSION["customer_id"] ?>"><i class="fa fa-user"></i>User</a>
                        <a href="index.php?controller=logout"><i class="fa fa-user"></i>Logout</a>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="mid-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo "><a href="index.html"> <img
                            src="./../public/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361"
                            alt="DKT Store" title="DKT Store" class="img-responsive"> </a></div>
                <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                    <script type="text/javascript">
                        function search() {
                            key = document.getElementById("key").value;
                            location.href = "index.php?controller=search&key=" + key;
                            return false;
                        }
                    </script>
                    <form method="post" action="">
                        <input type="text" value="" placeholder="Nh???p t??? kh??a t??m ki???m..." id="key"
                               class="input-control">
                        <button type="submit"><i class="fa fa-search" onclick="return search();"></i></button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                    <?php
                    if (file_exists("controller/frontend/controller_order_layout.php"))
                        include "controller/frontend/controller_order_layout.php";
                    ?>
                </div>
            </div>
        </div>

        <div class="bottom-header">
            <div class="container">
                <div class="clearfix">
                    <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                        <li class="active"><a href="index.php">Trang ch???</a></li>
                        <li><a href="index.php?controller=product">S???n ph???m</a></li>
                        <li><a href="index.php?controller=gioithieu">Gi???i thi???u</a></li>
                        <li><a href="index.php?controller=news">Tin t???c</a></li>
                        <li><a href="index.php?controller=lienhe">Li??n h???</a></li>
                    </ul>
                    <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i
                            class="fa fa-bars"></i> </a>
                    <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                        <li class="active"><a href="index.php">Trang ch???</a></li>
                        <li><a href="index.php?controller=product">S???n ph???m</a></li>
                        <li><a href="index.php?controller=gioithieu">Gi???i thi???u</a></li>
                        <li><a href="index.php?controller=tintuc">Tin t???c</a></li>
                        <li><a href="index.php?controller=lienhe">Li??n h???</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>
<div class="content">
    <div class="container">
        <h1 style="display:none;">DKT Store</h1>

        <div class="row">
            <div class="col-xs-12 col-md-3">
                <!-- category product -->
                <aside class="aside-category">
                    <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh m???c s???n ph???m</h3>
                    <ul class="list-unstyled">
                        <?php
                        if (file_exists("controller/frontend/controller_category_product.php"))
                            include "controller/frontend/controller_category_product.php";
                        ?>


                    </ul>

                </aside>
                <!-- end category product -->
                <!-- end support -->
                <div class="online_support block">
                    <div class="new_title">
                        <h2>H??? tr??? tr???c tuy???n</h2>
                    </div>
                    <div class="block-content">
                        <div class="sp_1">
                            <p>T?? v???n b??n h??ng 1</p>
                            <p>Mrs. Dung: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p>T?? v???n b??n h??ng 2</p>
                            <p>Mr. Tu???n: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p>Email li??n h???</p>
                            <p>support@mail.com</p>
                        </div>
                    </div>
                </div>
                <!-- end support online -->
                <!-- hot news -->
                <div class="home-blog">
                    <h2 class="title"><span>Tin t???c</span></h2>
                    <div class="row">
                        <div class="owl-home-blog owl-home-blog-sidebar">
                            <!-- list hot news -->

                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <?php
                            if (file_exists("controller/frontend/controller_hotnews.php"))
                                include "controller/frontend/controller_hotnews.php";
                            ?>
                            <!-- end list hot news -->
                        </div>
                    </div>
                </div>
                <!-- end hot news -->
                <!-- adv -->
                <img src="../../public/frontend/images/banner03d5.jpg">
                <!-- end adv -->

            </div>
            <div class="col-xs-12 col-md-9">
                <!-- main -->
                <div class="owl-slider">
                    <div class="item">
                        <!-- ============================ -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active"><img src="../../public/frontend/images/la.jpg"
                                                              alt="Los Angeles"></div>
                                <div class="item"><img src="../../public/frontend/images/slideshow1221b.jpg"
                                                       alt="Los Angeles"></div>
                                <div class="item"><img src="../../public/frontend/images/chicago.jpg" alt="Chicago">
                                </div>
                                <div class="item"><img src="../../public/frontend/images/ny.jpg" alt="New York"></div>
                            </div>

                            <!-- Left and right controls -->
                        </div>
                        <!-- ============================ -->
                    </div>
                </div>
                <?php
                if (file_exists("controller/frontend/$controller"))
                    include "controller/frontend/$controller";
                ?>


                <!-- end main -->
            </div>
        </div>
        <!-- adv -->
        <div class="widebanner"><a href="#"><img
                    src="../../public/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361"
                    alt="#" class="img-responsive"></a></div>
        <!-- end adv -->

    </div>
</div>
<div class="privacy">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="image"><img
                        src="../../public/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361"
                        alt="Giao h??ng mi???n ph??" title="Giao h??ng mi???n ph??" class="img-responsive"></div>
                <div class="info">
                    <h3>Giao h??ng mi???n ph??</h3>
                    <p>Mi???n ph?? giao h??ng trong n???i th??nh H?? N???i</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"><img
                        src="../../public/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361"
                        class="img-responsive" alt="Khuy???n m???i" title="Khuy???n m???i"></div>
                <div class="info">
                    <h3>Khuy???n m???i</h3>
                    <p>Khuy???n m???i s???n ph???m n???u ????n h??ng tr??n 1.000.000??</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"><img
                        src="../../public/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361"
                        class="img-responsive" alt="Ho??n tr??? l???i ti???n" title="Ho??n tr??? l???i ti???n"></div>
                <div class="info">
                    <h3>Ho??n tr??? l???i ti???n</h3>
                    <p>N???u s???n ph???m kh??ng ?????m b???o ch???t l?????ng ho???c s???n ph???m kh??ng ????ng mi??u t???</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <h3>V??? ch??ng t??i</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Trang ch???</a></li>
                        <li><a href="gioi-thieu">Gi???i thi???u</a></li>
                        <li><a href="tin-tuc">Tin t???c</a></li>
                        <li><a href="gioi-thieu">Li??n h???</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>H?????ng d???n</h3>
                    <ul class="list-unstyled">
                        <li><a href="huo-ng-da-n-mua-ha-ng">H?????ng d???n mua h??ng</a></li>
                        <li><a href="huong-dan">Giao nh???n v?? thanh to??n</a></li>
                        <li><a href="do-i-tra-va-ba-o-ha-nh">?????i tr??? v?? b???o h??nh</a></li>
                        <li><a href="account/register">????ng k?? th??nh vi??n</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Ch??nh s??ch</h3>
                    <ul class="list-unstyled">
                        <li><a href="chinh-sach">Ch??nh s??ch thanh to??n</a></li>
                        <li><a href="chi-nh-sa-ch-va-n-chuye-n">Ch??nh s??ch v???n chuy???n</a></li>
                        <li><a href="chi-nh-sa-ch-do-i-tra">Ch??nh s??ch ?????i tr???</a></li>
                        <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Ch??nh s??ch b???o h??nh</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>??i???u kho???n</h3>
                    <ul class="list-unstyled">
                        <li><a href="dieu-khoan">??i???u kho???n s??? d???ng</a></li>
                        <li><a href="die-u-khoa-n-giao-di-ch">??i???u kho???n giao d???ch</a></li>
                        <li><a href="di-ch-vu-tie-n-i-ch">D???ch v??? ti???n ??ch</a></li>
                        <li><a href="quye-n-so-hu-u-tri-tue">Quy???n s??? h???u tr?? tu???</a></li>
                    </ul>
                </div>
            </div>
            <div class="payments-method"><img
                    src="../../public/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361"
                    alt="Ph????ng th???c thanh to??n" title="Ph????ng th???c thanh to??n"></div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5"> ?? B???n quy???n thu???c v??? Avent Team</div>
                <div class="col-xs-12 col-sm-7">
                    <ul class="list-unstyled">
                        <li><a href="index.html">Trang ch???</a></li>
                        <li><a href="gioi-thieu">Gi???i thi???u</a></li>
                        <li><a href="tin-tuc">Tin t???c</a></li>
                        <li><a href="lien-he">Li??n h???</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src='../../public/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361'
        type='text/javascript'></script>
<script src='../../public/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361'
        type='text/javascript'></script>
<div class="ajax-error-modal modal">
    <div class="modal-inner">
        <div class="ajax-error-title">L???i</div>
        <div class="ajax-error-message"></div>
    </div>
</div>
<div class="ajax-success-modal modal">
    <div class="overlay"></div>
    <div class="content col-xs-12">
        <div class="ajax-left"><img class="ajax-product-image" alt="&nbsp;" src="#"
                                    style="max-width:65px; max-height:100px"/></div>
        <div class="ajax-right">
            <p class="ajax-product-title"></p>
            <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> ???? ???????c th??m v??o gi???
                h??ng.</p>
            <div class="actions">
                <!--                <button class="button" onclick="window.location='cart'">??i t???i gi??? h??ng</button>-->
                <!--                <button class="button" onclick="window.location='checkout'">Thanh to??n</button>-->
            </div>
        </div>
        <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a></div>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
