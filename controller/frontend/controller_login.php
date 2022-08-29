<?php
// hanlde customer login
class controller_login extends controller
{
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
                    $_SESSION["customer_id"] = $check->customer_id;
                    // check order existis
                    $order_id = $this->model->fetch_one("SELECT order_id FROM `tbl_order` where customer_id = '$check->customer_id' and trangthai = 0 ORDER BY ngaymua desc limit 1;");
                    if(!$order_id) {
                        $order_id = $this->model->execute("insert into tbl_order (customer_id,ngaymua,gia,trangthai) values 
                                                                ('$check->customer_id',CURDATE(),0,0)");
                    }else{
                        $order_id = $order_id->order_id;
                    }
                    $_SESSION["order_id"] = $order_id;

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

        include "view/frontend/view_login.php";


    }
}
new controller_login();
?>