<?php


class controller_order extends controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION["customer_id"])) {
            header("location:index.php?controller=login");
        } else {


            $order_id = isset($_SESSION["order_id"]) && is_numeric($_SESSION["order_id"]) ? $_SESSION["order_id"] :0;

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $product_id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET["id"] : 0;
                $quanlity_product = isset($_POST['quantity']) && is_numeric($_POST['quantity']) ? $_POST["quantity"] : 0;


                $check_exit_product = $this->model->fetch_one("select * from tbl_order_detail where order_id = '$order_id' and fk_product_id = '$product_id'");

                if ($check_exit_product) {
                    $total = $check_exit_product->c_number + $quanlity_product;
                    $this->model->execute("
                        update tbl_order_detail 
                        set c_number = '$total'
                        where order_id = '$order_id' and fk_product_id = '$product_id'
                    ");
                }else{
                    $this->model->execute("insert into tbl_order_detail (order_id,fk_product_id,c_number)
                                        values ('$order_id','$product_id','$quanlity_product')");
                }
            }


                $rows = $this->model->fetch("SELECT tbl_order_detail.order_detail_id,tbl_order.order_id,tbl_product.c_img,tbl_product.c_name,tbl_product.c_price,
                                                    tbl_order_detail.c_number
                                                    FROM tbl_order
                                                    INNER JOIN tbl_order_detail on tbl_order_detail.order_id = tbl_order.order_id
                                                    INNER JOIN tbl_product on tbl_order_detail.fk_product_id = tbl_product.pk_product_id
                                                    where tbl_order.order_id = '$order_id'");
                include "view/frontend/view_order.php";



        }


    }
}

new controller_order();