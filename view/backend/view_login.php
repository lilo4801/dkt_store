<div class="template-customer">
    <h1>Đăng nhập tài khoản</h1>
    <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-6">
            <div class="wrapper-form">
                <form method='post' action="">
                    <p class="title"><span>Đăng nhập tài khoản</span></p>
                    <div class="form-group">
                        <label>Email:<b id="req">*</b></label>
                        <input type="email" class="input-control" name="email" required="">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu:<b id="req">*</b></label>
                        <input type="password" class="input-control" name="password" required="">
                    </div>
                    <input type="submit" class="button" value="Đăng nhập">
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="wrapper-form">
                <p class="title"><span>Tạo tài khoản mới</span></p>
                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                <a href="index.php?controller=register" class="button">Đăng ký</a> </div>
        </div>
    </div>
</div>


<!--<div class="container" style="margin-top: 30px;">-->
<!--	<div class="col-md-6 col-md-offset-3">-->
<!--		--><?php //
//			if(isset($_GET["err"])&&$_GET["err"]=="invalid")
//			{
//		 ?>
<!--		 <div class="alert alert-danger">Sai username hoặc password</div>-->
<!--		 --><?php //} ?>
<!--		<div class="panel panel-primary">-->
<!--			<div class="panel-heading">Login</div>-->
<!--			<form method="post" action="">-->
<!--			<div class="panel-body">				-->
<!--					<!-- row -->-->
<!--					<div class="row">-->
<!--						<div class="col-md-2">Username</div>-->
<!--						<div class="col-md-10"><input type="text" name="c_username" required class="form-control"></div>-->
<!--					</div>-->
<!--					<!-- end row -->-->
<!--					<!-- row -->-->
<!--					<div class="row" style="margin-top:5px;">-->
<!--						<div class="col-md-2">Password</div>-->
<!--						<div class="col-md-10"><input type="password" name="c_password" required class="form-control"></div>-->
<!--					</div>-->
<!--					<!-- end row -->-->
<!--					<!-- row -->-->
<!--					<div class="row" style="margin-top:5px;">-->
<!--						<div class="col-md-2"></div>-->
<!--						<div class="col-md-10">-->
<!--                            <input type="submit" value="Login" class="btn btn-primary">-->
<!--                            <input type="reset" value="Reset" class="btn btn-danger">-->
<!--                            <a href="admin.php?controller=register"  class="btn btn-warningr"> Register </a>-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--					<!-- end row -->				-->
<!--			</div>-->
<!--			</form>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
