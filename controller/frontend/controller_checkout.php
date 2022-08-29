<?php


class controller_checkout extends controller
{
    public function __construct()
    {
        parent::__construct();
        $total_price = isset($_GET["total"]) && is_numeric($_GET["total"]) ? $_GET["total"] : 0 ;
        if(isset($_SESSION["customer_id"]) && isset($_SESSION["order_id"]) ) {
            // checkout
            $order_id = $_SESSION["order_id"];
            $this->model->execute("update tbl_order set gia='$total_price',  trangthai = 1 where order_id = '$order_id'");
            unset($_SESSION["order_id"]);
            // after checkout create new order cart
            $customer_id = $_SESSION["customer_id"];
            $order_id = $this->model->execute("insert into tbl_order (customer_id,ngaymua,gia,trangthai) values 
                                                                ('$customer_id',CURDATE(),0,0)");
            $_SESSION["order_id"] = $order_id;
            header("location: index.php?msg=sucess_checkout");
        }
    }
}
new controller_checkout();