<div class="template-cart">
    <form action="index.php?controller=delete_edit_order&act=update" method="post">
        <div class="table-responsive">
            <table class="table table-cart">
                <thead>
                <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php
                   $total_price  = 0;
                    foreach ($rows as $row) {
                        $total_price += $row->c_price*$row->c_number;
                ?>
                <tr>
                    <td><img src="public/upload/product/<?php echo $row->c_img; ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=product_detail&id=<?php echo "1" ?>">Sản phẩm 2</a></td>
                    <td> <?php echo $row->c_price ?></td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $row->c_number ?>" name="product_<?php echo $row->order_detail_id ?>" required="Không thể để trống"></td>
                    <td><p><b><?php echo $row->c_price*$row->c_number ?></b></p></td>
                    <td><a href="index.php?controller=delete_edit_order&act=delete&id=<?php echo $row->order_detail_id ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6"><a href="index.php?controller=delete_edit_order&act=destroy&id=<?php echo $order_id; ?>" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                        <input type="submit" class="button pull-right" value="Cập nhật"></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </form>
    <div class="total-cart"> Tổng tiền thanh toán:
        <?php echo $total_price ?>₫ <br>
        <a href="index.php?controller=checkout&total=<?php echo $total_price ?>" class="button black">Thanh toán</a> </div>
</div>