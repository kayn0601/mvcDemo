<?php
use \libs\smarty;
use \libs\db;
class reg{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/reg.html");

//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        $smarty->display("admin/reg.html");
    }

    function addUser(){
        $user=$_POST["uname"];
        $pass=$_POST["pass"];
        $pass1=$_POST["pass1"];
        if ($pass!==$pass1){
            echo "两次密码输入不一致";
            return;
        }

        //连接数据库

//        $db=new mysqli("localhost","root","980601","mvcdemo");
//        if (mysqli_connect_error()){
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");

        $database=new db();
        $db=$database->db;

        $result=$db->query("select username from admin where username='${user}'");
        if($result->num_rows>0){
            echo "用户名已存在";
            return;
        }

        $pass=md5(md5($pass));
        $db->query("insert into admin (username,pass) VALUES ('$user','$pass')");
        if ($db->affected_rows>0){
            echo "注册成功";
        }
    }

    function checkName(){
        $uname=$_POST["uname"];

//        $db=new mysqli("localhost","root","980601","mvcdemo");
//        $db->query("set names utf8");

        $database=new db();
        $db=$database->db;

        $result=$db->query("select username from admin where username='${uname}'");

        if($result->num_rows==0){
            echo "true";
        }else{
            echo "false";
        }
    }
}