<?php
    class controller_product_detail extends  controller {
        public function __construct()
        {
            parent::__construct();

            include "view/backend/view_product_detail.php";
        }
    }
    new controller_product_detail();
?>