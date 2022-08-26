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
    }(document, 'script', 'facebook-jssdk'));</script>
<header id="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"><span><i class="fa fa-phone"></i> (04) 6674 2332</span>
                    <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 customer">
                    <?php
                    if (isset($_SESSION["c_username"]) === false) { ?>
                        <a href="index.php?controller=login"><i class="fa fa-user"></i> Đăng nhập</a>
                        <a href="index.php?controller=register"><i class="fa fa-user-plus"></i> Đăng ký</a>
                    <?php } else { ?>
                        <a href="index.php?controller=customer&act=edit&id=<?php if(isset($_SESSION['c_username']) == true) echo $_SESSION["c_username"] ?>"><i class="fa fa-user"></i>User</a>
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
                        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key"
                               class="input-control">
                        <button type="submit"><i class="fa fa-search" onclick="return search();"></i></button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                    <div class="wrapper-mini-cart"><span class="icon"><i class="fa fa-shopping-cart"></i></span> <a
                                href="index.php?controller=order"> <span class="mini-cart-count"> 1 </span> sản phẩm <i
                                    class="fa fa-caret-down"></i></a>
                        <div class="content-mini-cart">
                            <div class="has-items">
                                <ul class="list-unstyled">
                                    <li class="clearfix" id="item-1853038">
                                        <div class="image"><a href="index.php?controller=product_detail&id=5"> <img
                                                        alt="Sản phẩm 2"
                                                        src="./../public/upload/product/1494416685000000000010021355-may-tinh-xach-tay-lenovo-ideapad-flex-2-14e284.jpg"
                                                        title="Sản phẩm 2" class="img-responsive"> </a></div>
                                        <div class="info">
                                            <h3><a href="index.php?controller=product_detail&id=5">Sản phẩm 2</a></h3>
                                            <p>1 x 2,000,000₫</p>
                                        </div>
                                        <div><a href="index.php?controller=cart&act=delete&id=5"> <i
                                                        class="fa fa-times"></i></a></div>
                                    </li>
                                </ul>
                                <a href="index.php?controller=checkout" class="button">Thanh toán</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-header">
            <div class="container">
                <div class="clearfix">
                    <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                        <li class="active"><a href="index.php">Trang chủ</a></li>
                        <li><a href="index.php?controller=gioithieu">Giới thiệu</a></li>
                        <li><a href="index.php?controller=news">Tin tức</a></li>
                        <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
                    </ul>
                    <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i
                                class="fa fa-bars"></i> </a>
                    <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                        <li class="active"><a href="index.php">Trang chủ</a></li>
                        <li><a href="index.php?controller=gioithieu">Sản phẩm</a></li>
                        <li><a href="index.php?controller=gioithieu">Giới thiệu</a></li>
                        <li><a href="index.php?controller=tintuc">Tin tức</a></li>
                        <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
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
                    <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
                    <ul class="list-unstyled">
                        <li><a href="san-pham-noi-bat">Sản phẩm nổi bật</a></li>
                        <li><a href="san-pham-khuyen-mai">Sản phẩm khuyến mãi</a></li>
                        <li><a href="dien-thoai-di-dong">Điện thoại di động</a></li>
                        <li><a href="laptop">Laptop</a></li>
                        <li><a href="tivi">Tivi</a></li>
                        <li><a href="tai-nghe">Tai nghe</a></li>
                        <li><a href="am-thanh">Âm thanh</a></li>
                        <li><a href="may-van-phong">Máy văn phòng</a></li>
                    </ul>
                </aside>
                <!-- end category product -->
                <!-- end support -->
                <div class="online_support block">
                    <div class="new_title">
                        <h2>Hỗ trợ trực tuyến</h2>
                    </div>
                    <div class="block-content">
                        <div class="sp_1">
                            <p>Tư vấn bán hàng 1</p>
                            <p>Mrs. Dung: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p>Tư vấn bán hàng 2</p>
                            <p>Mr. Tuấn: (04) 3786 8904</p>
                        </div>
                        <div class="sp_1">
                            <p>Email liên hệ</p>
                            <p>support@mail.com</p>
                        </div>
                    </div>
                </div>
                <!-- end support online -->
                <!-- hot news -->
                <div class="home-blog">
                    <h2 class="title"><span>Tin tức</span></h2>
                    <div class="row">
                        <div class="owl-home-blog owl-home-blog-sidebar">
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"><a href="index.php?controller=news_detail&id=20" class="image">
                                        <img src="../../public/frontend/images/chicago.jpg"
                                             alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="index.php?controller=news_detail&id=20">Mua iPhone 6s và iPhone 6s
                                                Plus chính hãng ở đâu?</a></h3>
                                        <p class="desc">
                                        <p>X-37B c&oacute; thể triển khai như vũ kh&iacute; ti&ecirc;u diệt vệ tinh của
                                            đối phương, hoặc thả vũ kh&iacute; động năng đến bất kỳ vị tr&iacute; n&agrave;o
                                            tr&ecirc;n Tr&aacute;i Đất.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"><a href="index.php?controller=news_detail&id=19" class="image">
                                        <img src="../../public/frontend/images/chicago.jpg"
                                             alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="index.php?controller=news_detail&id=19">Mẹo in văn bản từ iPhone,
                                                iPad không phải ai cũng biết@</a></h3>
                                        <p class="desc">
                                        <p>(D&acirc;n tr&iacute;) - Nếu bạn l&agrave; mẫu người th&iacute;ch sử dụng
                                            iPhone hoặc iPad để l&agrave;m việc, ắt hẳn ch&uacute;ng ta từng c&oacute;
                                            lần muốn in văn bản hoặc t&agrave;i liệu trực tiếp từ thiết bị.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"><a href="index.php?controller=news_detail&id=17" class="image">
                                        <img src="../../public/frontend/images/chicago.jpg"
                                             alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="index.php?controller=news_detail&id=17">Samsung và Oppo tiếp tục
                                                thống trị thị trường đầu năm 2017 tại Việt Nam</a></h3>
                                        <p class="desc">
                                        <p>(D&acirc;n tr&iacute;) - Hầu hết c&aacute;c sản phẩm nằm trong top 10 b&aacute;n
                                            chạy th&aacute;ng 2 v&agrave; nửa đầu th&aacute;ng 3 năm 2017 của c&aacute;c
                                            nh&agrave; b&aacute;n lẻ đều đến từ Samsung v&agrave; Oppo. C&aacute;c
                                            thương hiệu lớn kh&aacute;c dần dần bị thụt l&ugrave;i về sau...</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"><a href="index.php?controller=news_detail&id=16" class="image">
                                        <img src="../../public/frontend/images/chicago.jpg"
                                             alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="index.php?controller=news_detail&id=16">Những dấu hiệu cho thấy
                                                chiếc tủ lạnh nhà bạn đang gặp vấn đề</a></h3>
                                        <p class="desc">
                                        <p>(D&acirc;n tr&iacute;) - Mặc d&ugrave; l&agrave; một thiết bị điện tử với độ
                                            bền cao, thậm ch&iacute; c&oacute; thể l&ecirc;n tới 10-20 năm, nhưng điều đ&oacute;
                                            kh&ocirc;ng c&oacute; nghĩa l&agrave; tủ lạnh kh&ocirc;ng thể hỏng h&oacute;c
                                            hay gặp sự cố.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"><a href="index.php?controller=news_detail&id=15" class="image">
                                        <img src="../../public/frontend/images/chicago.jpg"
                                             alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                             class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="index.php?controller=news_detail&id=15">Oppo khởi chạy chương trình
                                                đặt hàng trước F3 Plus tại Việt Nam@</a></h3>
                                        <p class="desc">
                                        <p>Sau ng&agrave;y ra mắt ch&iacute;nh thức v&agrave;o 23/3 tới, Oppo sẽ tiến h&agrave;nh
                                            chương tr&igrave;nh đặt h&agrave;ng trước F3 Plus từ ng&agrave;y 24/3 đến
                                            hết ng&agrave;y 31/3/2017, kh&aacute;ch h&agrave;ng đặt mua trước sản phẩm
                                            F3 Plus sẽ nhận được bộ qu&agrave; tặng d&agrave;nh hấp dẫn.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
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
                if (file_exists("controller/backend/$controller"))
                    include "controller/backend/$controller";
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
                            alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"></div>
                <div class="info">
                    <h3>Giao hàng miễn phí</h3>
                    <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"><img
                            src="../../public/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361"
                            class="img-responsive" alt="Khuyến mại" title="Khuyến mại"></div>
                <div class="info">
                    <h3>Khuyến mại</h3>
                    <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"><img
                            src="../../public/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361"
                            class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"></div>
                <div class="info">
                    <h3>Hoàn trả lại tiền</h3>
                    <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
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
                    <h3>Về chúng tôi</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="gioi-thieu">Giới thiệu</a></li>
                        <li><a href="tin-tuc">Tin tức</a></li>
                        <li><a href="gioi-thieu">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Hướng dẫn</h3>
                    <ul class="list-unstyled">
                        <li><a href="huo-ng-da-n-mua-ha-ng">Hướng dẫn mua hàng</a></li>
                        <li><a href="huong-dan">Giao nhận và thanh toán</a></li>
                        <li><a href="do-i-tra-va-ba-o-ha-nh">Đổi trả và bảo hành</a></li>
                        <li><a href="account/register">Đăng ký thành viên</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Chính sách</h3>
                    <ul class="list-unstyled">
                        <li><a href="chinh-sach">Chính sách thanh toán</a></li>
                        <li><a href="chi-nh-sa-ch-va-n-chuye-n">Chính sách vận chuyển</a></li>
                        <li><a href="chi-nh-sa-ch-do-i-tra">Chính sách đổi trả</a></li>
                        <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Chính sách bảo hành</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Điều khoản</h3>
                    <ul class="list-unstyled">
                        <li><a href="dieu-khoan">Điều khoản sử dụng</a></li>
                        <li><a href="die-u-khoa-n-giao-di-ch">Điều khoản giao dịch</a></li>
                        <li><a href="di-ch-vu-tie-n-i-ch">Dịch vụ tiện ích</a></li>
                        <li><a href="quye-n-so-hu-u-tri-tue">Quyền sở hữu trí tuệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="payments-method"><img
                        src="../../public/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361"
                        alt="Phương thức thanh toán" title="Phương thức thanh toán"></div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5"> © Bản quyền thuộc về Avent Team</div>
                <div class="col-xs-12 col-sm-7">
                    <ul class="list-unstyled">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="gioi-thieu">Giới thiệu</a></li>
                        <li><a href="tin-tuc">Tin tức</a></li>
                        <li><a href="lien-he">Liên hệ</a></li>
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
        <div class="ajax-error-title">Lỗi</div>
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
            <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> Đã được thêm vào giỏ
                hàng.</p>
            <div class="actions">
                <!--                <button class="button" onclick="window.location='cart'">Đi tới giỏ hàng</button>-->
                <!--                <button class="button" onclick="window.location='checkout'">Thanh toán</button>-->
            </div>
        </div>
        <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a></div>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
