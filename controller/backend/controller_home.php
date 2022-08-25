<?php
    class controller_home extends controller {
        public function __construct()
        {
            parent::__construct();


            include "view/backend/view_index.php";

        }

    }
    new controller_home();
?>