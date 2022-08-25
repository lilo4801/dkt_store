<?php //class controller_login ket thuc class controller de co the tac dong duoc vao cac ham cua class model thong qua thuoc tinh model cua class controller
class controller_login extends controller
{
    //goi ham tao cua class controller de khoi tao bien model la object cua class model
    public function __construct()
    {
        parent::__construct();
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

new controller_login();
?>