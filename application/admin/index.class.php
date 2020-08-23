<?php
if(!defined("MVC")) {
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\code;
class index{
    function int(){
        $smarty=new smarty();
        $smarty->display("admin/login.html");
//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        $smarty->display("admin/login.html");
    }

    function login(){
        $user=addslashes($_POST["user"]);
        $pass=md5(md5($_POST["pass"]));

    //后台验证
    if ($_POST["code"]!==$_SESSION["code"]){
        echo "验证码有误";
        return;
    }
    if(strlen($user)<5||empty($pass)){
        echo"用户名或密码不符合规范";
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

        $result=$db->query("select * from admin where username='$user' and pass='$pass'");
        if ($result->num_rows<1){
            echo "用户名或密码错误";
        }else{
            $_SESSION["login"]="yes";
            $_SESSION["user"]=$user;
            header("location:/project/mvcDemo/index.php/admin/index/first");
        }
        $db->close();
    }

    function mycode(){
        $code=new code();
        $code->out();
    }

    function first(){
        if (isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty=new smarty();
            $smarty->assign("user",$_SESSION["user"]);
            $smarty->display("admin/index.html");
        }else{
            header("location:/project/mvcDemo/index.php/admin");
        }

    }

    function logout(){
        session_destroy();
        header("location:/project/mvcDemo/index.php/admin");
    }

    function adduser(){
        $smarty=new smarty();
        $smarty->display("admin/adduser.html");
    }
    function edituser(){
        $smarty=new smarty();
        $smarty->display("admin/edituser.html");
    }
}