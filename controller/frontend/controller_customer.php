<?php

// hanlde edit update information customer
class controller_customer extends controller
{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET["act"]) ? $_GET["act"] : "";
        $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;

        switch ($act) {
            case "edit":
                $form_action = "index.php?controller=customer&act=do_edit&id=$id";
                //lay ban ghi co id truyen vao
                $customer = $this->model->fetch_one("select * from tbl_customer where customer_id=$id");
                //load view

                include "view/frontend/view_edit_customer.php";
                break;
            case "do_edit":
                $hovaten = $_POST["hovaten"];
                $diachi = $_POST["diachi"];
                $dienthoai = $_POST["dienthoai"];
                $password = $_POST["password"];
                //update fullname

                //neu user thay doi password thi update password
                if ($password != "") {
                    $password = md5($password);
                    $this->model->execute("update tbl_customer set hovaten='$hovaten',diachi = '$diachi'
                                            ,dienthoai='$dienthoai',password = '$password' where customer_id=$id");
                }else{
                    $this->model->execute("update tbl_customer set hovaten='$hovaten',diachi = '$diachi'
                                            ,dienthoai='$dienthoai' where customer_id=$id");
                }
                header("location:index.php?controller=customer&act=edit&id=$id&msg=success");
                break;
        }

    }

}

new controller_customer();

?>