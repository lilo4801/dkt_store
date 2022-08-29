<?php


class controller_search extends controller
{
    public function __construct()
    {
        parent::__construct();

        $key = isset($_GET["key"]) ? $_GET["key"] : "";
        //-------------
        //so ban ghi tren trang
        $record_per_page = 20;
        //tinh tong so ban ghi
        $total_record = $this->model->num_rows("select * from tbl_news");
        //tinh so trang
        $num_page = ceil($total_record / $record_per_page);
        //lay bien p tu url (de xac dinh la den trang thu may)
        $p = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"] - 1) : 0;
        //xac dinh lay du lieu tu ban ghi nao
        $from = $p * $record_per_page;

        $arr = $this->model->fetch("SELECT * from tbl_product where c_name LIKE '%$key%' limit $from,$record_per_page");

        include  "view/frontend/view_product.php";


    }
}

new controller_search();