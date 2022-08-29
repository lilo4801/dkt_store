<?php


class controller_delete_edit_order extends controller
{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET["act"]) ? $_GET["act"] : "";
        $id= isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        switch ($act) {
            case "delete":
                $this->model->execute("delete from tbl_order_detail where order_detail_id = '$id'");
                break;
            case "destroy":
                $this->model->execute("delete from tbl_order_detail where order_id= '$id'");
                break;
            case "update":
                if(isset($_SERVER["REQUEST_METHOD"]) == "POST") {
                    foreach($_POST as $key => $value)
                    {
                        $arr = explode("_",$key);
                        if(isset($arr[1])) {
                            $this->model->execute("update tbl_order_detail set c_number = '$value' where order_detail_id = '$arr[1]'");
                        }
                    }
                }
                break;

        }
        header("location: index.php?controller=order");

    }
}

new controller_delete_edit_order();