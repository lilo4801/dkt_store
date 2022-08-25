<div class="template-customer">
    <h1>Đăng ký tài khoản</h1>
    <p>Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-6">
            <div class="wrapper-form">
                <form method='post' action="">
                    <p class="title"><span>Đăng ký tài khoản</span></p>
                    <div class="form-group">
                        <label>Họ và tên:</label>
                        <input type="text" name="hovaten" class="input-control">
                    </div>
                    <div class="form-group">
                        <label>Email:<b id="req">*</b></label>
                        <input type="text" name="email" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ:</label>
                        <input type="text" name="diachi" class="input-control">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại:</label>
                        <input type="text" name="dienthoai" class="input-control">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu:<b id="req">*</b></label>
                        <input type="password" name="password" class="input-control" required="">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="button" value="Đăng ký">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="wrapper-form">
                <p class="title"><span>Đăng nhập</span></p>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển
                    và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=login" class="button">Đăng nhập</a></div>
        </div>
    </div>
</div>
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Login</title>-->
<!--    <meta charset="utf-8">-->
<!--    <link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">-->
<!--</head>-->
<!--<body>-->
<!--<div class="container" style="margin-top: 30px;">-->
<!--    <div class="col-md-6 col-md-offset-3">-->
<!--        --><?php
//        if(isset($_GET["err"])&&$_GET["err"]=="invalid")
//        {
//            ?>
<!--            <div class="alert alert-danger">Sai username hoặc password</div>-->
<!--        --><?php //} ?>
<!--        <div class="panel panel-primary">-->
<!--            <div class="panel-heading">Login</div>-->
<!--            <form method="post" action="">-->
<!--                <div class="panel-body">-->
<!--                    <!-- row -->-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3">Full name</div>-->
<!--                        <div class="col-md-9"><input type="text" name="c_fullname" required class="form-control"></div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-3">Username</div>-->
<!--                        <div class="col-md-9"><input type="text" name="c_username" required class="form-control"></div>-->
<!--                    </div>-->
<!--                    <!-- end row -->-->
<!--                    <!-- row -->-->
<!--                    <div class="row" style="margin-top:5px;">-->
<!--                        <div class="col-md-3">Password</div>-->
<!--                        <div class="col-md-9"><input type="password" name="c_password" required class="form-control"></div>-->
<!--                    </div>-->
<!--                    <div class="row" style="margin-top:5px;">-->
<!--                        <div class="col-md-3">Confirm Password</div>-->
<!--                        <div class="col-md-9"><input type="password" name="c_confirm_password" required class="form-control"></div>-->
<!--                    </div>-->
<!--                    <!-- end row -->-->
<!--                    <!-- row -->-->
<!--                    <div class="row" style="margin-top:5px;">-->
<!--                        <div class="col-md-3"></div>-->
<!--                        <div class="col-md-9">-->
<!--                            <input type="submit" value="Register" class="btn btn-primary">-->
<!--                            <input type="reset" value="Reset" class="btn btn-danger">-->
<!--                            <a href="admin.php">Cancel</a>-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                    <!-- end row -->-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->