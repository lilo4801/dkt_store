<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 30px;">
    <div class="col-md-6 col-md-offset-3">
        <?php
        if(isset($_GET["err"])&&$_GET["err"]=="invalid")
        {
            ?>
            <div class="alert alert-danger">Sai username hoặc password</div>
        <?php } ?>
        <div class="panel panel-primary">
            <div class="panel-heading">Register</div>
            <form method="post" action="">
                <div class="panel-body">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3">Full name</div>
                        <div class="col-md-9"><input type="text" name="c_fullname" required class="form-control"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Username</div>
                        <div class="col-md-9"><input type="text" name="c_username" required class="form-control"></div>
                    </div>
                    <!-- end row -->
                    <!-- row -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-3">Password</div>
                        <div class="col-md-9"><input type="password" name="c_password" required class="form-control"></div>
                    </div>
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-3">Confirm Password</div>
                        <div class="col-md-9"><input type="password" name="c_confirm_password" required class="form-control"></div>
                    </div>
                    <!-- end row -->
                    <!-- row -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <input type="submit" value="Register" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-danger">
                            <a href="admin.php">Cancel</a>

                        </div>

                    </div>
                    <!-- end row -->
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>