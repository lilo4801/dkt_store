<!--<div class="col-md-10 col-xs-offset-1">	-->
<!--	<div class="panel panel-primary">-->
<!--		<div class="panel-heading">User</div>-->
<!--		<div class="panel-body">-->
<!--			<table class="table table-bordered table-hover">-->
<!--				<tr style="background-color: black; color:white">-->
<!--					<th>Tên khách hàng</th>-->
<!--					<th>Ngày mua</th>-->
<!--					<th>Đơn giá</th>-->
<!--					<th style="width: 150px;">Trạng thái</th>-->
<!--					<th style="width: 200px">Quản lý</th>-->
<!--				</tr>-->
<!--				--><?php //
//					foreach($arr as $rows)
//					{
//				 ?>
<!--				<tr>-->
<!--					<td>--><?php //echo $rows["hovaten"]; ?><!--</td>-->
<!--					<td style="text-align: center;">-->
<!--					--><?php //
//						$date = date_create($rows["ngaymua"]);
//						echo date_format($date,"d/m/Y");
//					?><!--</td>-->
<!--					<td style="text-align: center;">--><?php //echo $rows["gia"]; ?><!--</td>-->
<!--					<td style="text-align: center;">-->
<!--						--><?php //echo $rows["trangthai"]==1?"Đã giao hàng":"<span style='color:red;'>Chưa giao hàng</span>" ?>
<!--					</td>-->
<!--					<td style="text-align: center;">-->
<!--					<a href="admin.php?controller=order_detail&order_id=--><?php //echo $rows["order_id"]; ?><!--">Chi tiết</a>-->
<!--					&nbsp;&nbsp;-->
<!--						<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=order&act=delete&id=--><?php //echo $rows["order_id"]; ?><!--">Delete</a>-->
<!--						-->
<!--					</td>-->
<!--				</tr>-->
<!--				--><?php //} ?>
<!--			</table>-->
<!--			<style type="text/css">-->
<!--				.pagination{padding: 0px; margin:0px;}-->
<!--			</style>-->
<!--			<ul class="pagination pull-right">-->
<!--				<li><a href="#">Trang</a></li>-->
<!--				--><?php //
//					for($i = 1; $i<=$num_page; $i++)
//					{
//				 ?>
<!--				<li --><?php //echo isset($_GET["p"])&&$_GET["p"]==$i ? "class='active'":""; ?><!-- ><a href="admin.php?controller=order&p=--><?php //echo $i; ?><!--">--><?php //echo $i; ?><!--</a></li>-->
<!--				--><?php //} ?>
<!--			</ul>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

<div class="template-cart">
    <form action="index.php?controller=cart&act=update" method="post">
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
                <tr>
                    <td><img src="public/upload/product/1494416685000000000010021355-may-tinh-xach-tay-lenovo-ideapad-flex-2-14e284.jpg" class="img-responsive" /></td>
                    <td><a href="index.php?controller=product_detail&id=5">Sản phẩm 2</a></td>
                    <td> 2,000,000₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="1" name="product_5" required="Không thể để trống"></td>
                    <td><p><b>2,000,000₫</b></p></td>
                    <td><a href="index.php?controller=cart&act=delete&id=5" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td><img src="public/upload/product/1494416707canon-mp237-017de3.jpg" class="img-responsive" /></td>
                    <td><a href="index.php?controller=product_detail&id=9">Sản phẩm 5</a></td>
                    <td> 2,000,000₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="1" name="product_9" required="Không thể để trống"></td>
                    <td><p><b>2,000,000₫</b></p></td>
                    <td><a href="index.php?controller=cart&act=delete&id=9" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6"><a href="index.php?controller=cart&act=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                        <input type="submit" class="button pull-right" value="Cập nhật"></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </form>
    <div class="total-cart"> Tổng tiền thanh toán:
        4,000,000₫ <br>
        <a href="index.php?controller=checkout" class="button black">Thanh toán</a> </div>
</div>