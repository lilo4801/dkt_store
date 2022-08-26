<?php
class controller_product extends  controller {
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET["act"]) ? $_GET["act"] : "";
        $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;

        $record_per_page = 12;
        //tinh tong so ban ghi
        $total_record = $this->model->num_rows("select * from tbl_product");
        //tinh so trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url (de xac dinh la den trang thu may)
        $p = isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
        //xac dinh lay du lieu tu ban ghi nao
        $from = $p*$record_per_page;
        switch ($act) {
            case "category":

                $arr = $this->model->fetch("SELECT * FROM `tbl_product` where fk_category_product_id = $id order by pk_product_id desc limit $from,$record_per_page");
                break;

        }
        include "view/frontend/view_product.php";
    }
}
new controller_product();