<div class="product-detail" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="//dktstore-theme.bizwebvietnam.net/microsoft-lumia-950-xl-mau-den">
    <meta itemprop="image" content="public/frontend/images/msc.jpg?v=1469340617533">
    <meta itemprop="shop-currency" content="VND">
    <div class="top">
        <div class="row">
            <div class="col-xs-12 col-md-6 product-image">
                <div class="featured-image"><img src="public/upload/news/<?php echo $new->c_img;  ?>"
                                                 class="img-responsive" id="large-image"
                                                 itemprop="image"
                                                 data-zoom-image="//bizweb.dktcdn.net/100/047/633/products/msc.jpg?v=1469340617533"

                                                 alt="MICROSOFT LUMIA 950 XL"
                    /></div>
            </div>
            <div class="col-xs-12 col-md-6 info">
                <h1 itemprop="name"><?php echo $new->c_name;  ?></h1>
                <p itemprop="price" class="price-box product-price-box"><span
                            class="special-price"> <span
                                class="price product-price"><?php if(isset($new->c_hotnews) && $new->c_hotnews) echo "HOT NEWS" ?></span> </span></p>
                <p class="desc rte"><?php echo $new->c_description;  ?></p>

            </div>
        </div>
    </div>
    <div class="middle">
        <ul class="list-unstyled navtabs">
            <li><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1">Chi tiết sản
                    phẩm</a></li>
        </ul>
        <div class="tab-container">
            <!-- chi tiet -->
            <div id="tab1" class="content-tabs">
                <div class="rte">
                    <?php echo $new->c_content ?>
                </div>
            </div>
            <!-- chi tiet -->
        </div>
    </div>
</div>
