<?php
class controller_logout{
    public function __construct(){
        //huy session
        unset($_SESSION["customer_id"]);
        unset($_SESSION["order_id"]);
        header("location:index.php");
    }
}
new controller_logout();
?>