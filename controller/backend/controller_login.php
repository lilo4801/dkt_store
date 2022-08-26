<?php //class controller_login ket thuc class controller de co the tac dong duoc vao cac ham cua class model thong qua thuoc tinh model cua class controller
class controller_login extends controller
{
    //goi ham tao cua class controller de khoi tao bien model la object cua class model
    public function __construct()
    {
        parent::__construct();
        $url = $_SERVER['REQUEST_URI'];
        if (str_contains($url, "admin")) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $c_username = $_POST["c_username"];
                $c_password = $_POST["c_password"];
                $check = $this->model->fetch_one("select * from tbl_user where c_username='$c_username'");
                if (isset($check->c_username)) {
                    //kiem tra password
                    if ($check->c_password == md5($c_password)) {
                        //dang nhap thanh cong
                        $_SESSION["c_username"] = $check->pk_user_id;
                        //di chuyen den trang can chi dinh
                        header("location:admin.php");
                    } else {

                        header("location:admin.php?controller=login&err=invalid");
                    }
                } else {
                    header("location:admin.php?controller=loginerr=invalid");
                }
            }
            $form_action = "admin.php?controller=login";

            include "view/backend/view_admin_login.php";
        } else {
            //-----------
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $c_email = $_POST["c_email"];
                $c_password = $_POST["c_password"];
                $check = $this->model->fetch_one("select customer_id,email,password from tbl_customer where email='$c_email'");
                if (isset($check->email)) {
                    //kiem tra password
                    if ($check->password == md5($c_password)) {
                        //dang nhap thanh cong
                        $_SESSION["c_username"] = $check->customer_id;
                        //di chuyen den trang can chi dinh
                        header("location:index.php");
                    } else {

                        header("location:index.php?controller=login&err=invalid");
                    }
                } else {
                    header("location:index.php??controller=loginerr=invalid");
                }
            }
            $form_action = "index.php?controller=login";
            //-----------
            //load view
            include "view/backend/view_login.php";
        }


    }
}

new controller_login();
?>