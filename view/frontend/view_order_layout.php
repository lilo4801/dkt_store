<div class="wrapper-mini-cart"><span class="icon"><i class="fa fa-shopping-cart"></i></span> <a
        href="index.php?controller=order"> <span class="mini-cart-count"> <?php echo count($rows) ?> </span> sản phẩm <i
            class="fa fa-caret-down"></i></a>
    <div class="content-mini-cart">
        <div class="has-items">
            <ul class="list-unstyled">
                <?php
                    foreach ($rows as $row) {
                ?>
                <li class="clearfix" id="item-1853038">
                    <div class="image"><a href="index.php?controller=product_detail&id=<?php echo $row->pk_product_id ?>"> <img
                                alt="Sản phẩm 2"
                                src="public/upload/product/<?php echo $row->c_img;?>"
                                title="Sản phẩm 2" class="img-responsive"> </a></div>
                    <div class="info">
                        <h3><a href="index.php?controller=product_detail&id=<?php echo $row->pk_product_id ?>">Sản phẩm 2</a></h3>
                        <p><?php  echo $row->c_number; ?> x <?php echo $row->c_price; ?>₫</p>
                    </div>
                    <div><a href="index.php?controller=cart&act=delete&id=5"> <i
                                class="fa fa-times"></i></a></div>
                </li>
                <?php } ?>
            </ul>
            <a href="index.php?controller=checkout" class="button">Thanh toán</a></div>
    </div>
</div>