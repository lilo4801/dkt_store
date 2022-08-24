<?php
    class controller_register extends  controller {
         public function __construct()
         {
             parrent::__construct();
             if($_SERVER["REQUEST_METHOD"] == "POST") {

             }
             include "view/backend/view_register.php";

         }
    }

?>