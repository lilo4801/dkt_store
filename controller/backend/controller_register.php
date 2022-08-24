<?php
    class controller_register extends  controller {
         public function __construct()
         {
             parent::__construct();
             if($_SERVER["REQUEST_METHOD"] == "POST") {
                 $c_fullname = $_POST["c_fullname"];
                 $c_username = $_POST["c_username"];
                 $c_password = $_POST["c_password"];
                 $c_confirm_password = $_POST["c_confirm_password"];
                 $check = $this->model->fetch_one("select c_username from tbl_user where c_username='$c_username'");
                 if(!isset($check->c_username)){
                     //kiem tra password
                     if($c_password == $c_confirm_password){
                         //dang nhap thanh cong
                         $_SESSION["c_username"] = $c_username;
                         $c_password_mod = md5($c_password);
                         $this->model->execute("insert into tbl_user (c_username,c_password,c_fullname) values ('$c_username','$c_password_mod','$c_fullname')");
                         //di chuyen den trang can chi dinh
                         header("location:admin.php");
                     }else{
                         header("location:admin.php?controller=register&err=invalid");
                     }
                 }else{
                     header("location:admin.php?controller=register&err=invalid");
                 }
             }
             include "view/backend/view_register.php";

         }
    }
    new controller_register();
?>