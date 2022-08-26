<?php


class controller_order_layout extends controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION["customer_id"])) {
            if(isset($_SESSION["order_id"])) {
                $order_id = isset($_SESSION["order_id"]) && is_numeric($_SESSION["order_id"]) ? $_SESSION["order_id"] :0 ;

                $rows = $this->model->fetch("SELECT  tbl_product.pk_product_id, tbl_order.order_id,tbl_product.c_img,tbl_product.c_name,tbl_product.c_price,
                                                    tbl_order_detail.c_number
                                                    FROM tbl_order
                                                    INNER JOIN tbl_order_detail on tbl_order_detail.order_id = tbl_order.order_id
                                                    INNER JOIN tbl_product on tbl_order_detail.fk_product_id = tbl_product.pk_product_id
                                                    where tbl_order.order_id = '$order_id'");
                include "view/frontend/view_order_layout.php";
            }else{
                $customer_id = $_SESSION["customer_id"];
                $order_id = $this->model->execute("INSERT into tbl_order (customer_id,ngaymua,gia,trangthai) 
                                                       VALUES ('$customer_id',CURDATE(),0,0)");
                //  header("location: index.php");
            }
        }



    }
}

new controller_order_layout();