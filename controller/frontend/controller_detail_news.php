<?php

class controller_detail_news extends controller
{
    public function __construct()
    {
        parent::__construct();
        parent::__construct();

        $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;

        $new = $this->model->fetch_one("select * from tbl_news where pk_news_id=$id");

        include "view/frontend/view_new_detail.php";
    }
}

new controller_detail_news();