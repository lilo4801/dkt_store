<?php
    class controller_register extends  controller {
         public function __construct()
         {
             parent::__construct();
             if($_SERVER["REQUEST_METHOD"] == "POST") {
                 $hovaten = $_POST["hovaten"];
                 $email = $_POST["email"];
                 $diachi = $_POST["diachi"];
                 $dienthoai = $_POST["dienthoai"];
                 $password = $_POST["password"];
                 $confirmPassword = $_POST["confirmPassword"];
                 $check = $this->model->fetch_one("select email from tbl_customer where email='$email'");
                 if(!isset($check->email)){
                     //kiem tra password
                     if($password == $confirmPassword){
                         //dang nhap thanh cong

                         $c_password_mod = md5($password);
                         $this->model->execute("insert into tbl_customer (hovaten,email,password,diachi,dienthoai) values ('$hovaten','$email','$c_password_mod','$diachi','$dienthoai')");
                         //di chuyen den trang can chi dinh
                         header("location:index.php?controller=login");
                     }else{
                         header("location:index.php?controller=register&err=invalid");
                     }
                 }else{
                     header("location:index.php?controller=register&err=invalid");
                 }
             }
             $form_action = "index.php?controller=register";
             include "view/frontend/view_register.php";

         }
    }
    new controller_register();
?>