<!--<div class="col-md-10 col-md-offset-1">-->
<!--	<div style="margin-bottom: 5px;"><a href="admin.php?controller=add_edit_news&act=add" class="btn btn-primary">Add</a></div>-->
<!--	<div class="panel panel-primary">-->
<!--		<div class="panel-heading">news</div>-->
<!--		<div class="panel-body">-->
<!--			<table class="table table-hover table-bordered">-->
<!--				<tr>-->
<!--					<th style="width: 100px;">Ảnh</th>-->
<!--					<th>Tiêu đề</th>-->
<!--					<th style="width: 100px;">Tin nổi bật</th>-->
<!--					<th style="width: 100px;"></th>-->
<!--				</tr>-->
<!--				--><?php //
//					foreach($arr as $rows)
//					{
//				 ?>
<!--				<tr>-->
<!--					<td style="text-align: center;">-->
<!--						--><?php //if($rows->c_img != "" && file_exists("public/upload/news/".$rows->c_img)){ ?>
<!--						<img src="public/upload/news/--><?php //echo $rows->c_img; ?><!--" style="max-width: 100px;">-->
<!--						--><?php //} ?>
<!--					</td>-->
<!--					<td>--><?php //echo $rows->c_name; ?><!--</td>-->
<!--					<td style="text-align: center;">-->
<!--						--><?php //if($rows->c_hotnews==1){ ?>
<!--						<span class="glyphicon glyphicon-check"></span>-->
<!--						--><?php //} ?>
<!--					</td>-->
<!--					<td style="text-align: center;">-->
<!--						<a href="admin.php?controller=add_edit_news&act=edit&id=--><?php //echo $rows->pk_news_id; ?><!--">Edit</a>&nbsp;&nbsp;-->
<!--						<a href="admin.php?controller=news&act=delete&id=--><?php //echo $rows->pk_news_id; ?><!--">Delete</a>-->
<!--					</td>-->
<!--				</tr>-->
<!--				--><?php //} ?>
<!--			</table>-->
<!--			<ul class="pagination" style="padding:0px; margin:0px;">-->
<!--				<li><a href="#">Trang</a></li>-->
<!--				--><?php //
//					for($i = 1; $i <= $num_page; $i++)
//					{
//				 ?>
<!--				<li><a href="admin.php?controller=news&p=--><?php //echo $i; ?><!--">--><?php //echo $i; ?><!--</a></li>-->
<!--				--><?php //} ?>
<!--			</ul>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->


<h1>Tin tức</h1>
<div class="wrapper-blog">
    <!-- list news -->
    <div class="row">
        <div class="col-md-6 article"> <a href="/mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau" class="image"> <img src="../../public/frontend/images/ip6s.png" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
            <h3><a href="/mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau">Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?</a></h3>
            <p class="date">11/01/2016</p>
            <p class="desc"></p>
        </div>
        <div class="col-md-6 article"> <a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016" class="image"> <img src="../../public/frontend/images/tvlg.jpg" alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" class="img-responsive"> </a>
            <h3><a href="/lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016</a></h3>
            <p class="date">08/01/2016</p>
            <p class="desc"></p>
        </div>
    </div>
    <!-- end list news -->
    <!-- list news -->
    <div class="row">
        <div class="col-md-6 article"> <a href="/msi-ra-mat-loat-may-tinh-khung-tai-ces-2016" class="image"> <img src="../../public/frontend/images/1lap.jpg" alt="MSI ra mắt loạt máy tính " khủng" tại CES 2016" title="MSI ra mắt loạt máy tính "khủng" tại CES 2016" class="img-responsive"> </a>
            <h3><a href="/msi-ra-mat-loat-may-tinh-khung-tai-ces-2016">MSI ra mắt loạt máy tính "khủng" tại CES 2016</a></h3>
            <p class="date">08/01/2016</p>
            <p class="desc"></p>
        </div>
        <div class="col-md-6 article"> <a href="/lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong" class="image"> <img src="../../public/frontend/images/llv.jpg" alt="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" title="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" class="img-responsive"> </a>
            <h3><a href="/lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong">Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng</a></h3>
            <p class="date">08/01/2016</p>
            <p class="desc"></p>
        </div>
    </div>
    <!-- end list news -->
    <!-- list news -->
    <div class="row">
        <div class="col-md-6 article"> <a href="/trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony" class="image"> <img src="../../public/frontend/images/tainghe.jpg" alt="Trải nghiệm dòng tai nghe H.ear mới của Sony" title="Trải nghiệm dòng tai nghe H.ear mới của Sony" class="img-responsive"> </a>
            <h3><a href="/trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony">Trải nghiệm dòng tai nghe H.ear mới của Sony</a></h3>
            <p class="date">08/01/2016</p>
            <p class="desc"></p>
        </div>
        <div class="col-md-6 article"> <a href="/bai-viet-mau" class="image"> <img src="../../public/frontend/images/reviews.jpg" alt="iPhone 7 sẽ lại là một bước " cải lùi" về thiết kế của Apple" title="iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của Apple" class="img-responsive"> </a>
            <h3><a href="/bai-viet-mau">iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của Apple</a></h3>
            <p class="date">29/05/2015</p>
            <p class="desc"></p>
        </div>
    </div>
    <!-- end list news -->
    <ul class="pagination pull-right" style="margin-top: 0px !important">
        <li><a href="#">Trang</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
    </ul>
</div>