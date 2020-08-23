<?php
if(!defined("MVC")) {
    die("非法侵入");
}
class index{
    function int(){
        echo "前台页面";
    }
}



//class index{
//    function int(){
////        $en=new engine();
////        $en->setTemplaterDir(TPL_PATH);
////        $en->setCompileDir(COMPILE_PATH);
//
//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//
//        //数据
////        $arr=array(
////            array(
////                "name"=>"zhangsan",
////                "age"=>"12",
////                "sex"=>"man",
////            ),
////            array(
////                "name"=>"lisi",
////                "age"=>"11",
////                "sex"=>"woman",
////            ),
////            array(
////                "name"=>"wangwu",
////                "age"=>"13",
////                "sex"=>"man",
////            ),
////            array(
////                "name"=>"zhaoliu",
////                "age"=>"10",
////                "sex"=>"woman",
////            ),
////        );
//
//        //连接MySQL
//        $db=@new mysqli("localhost","root","980601","first","3306");
//        if(mysqli_connect_error()){
//            die("数据库连接错误");
//        }
//        //数据库查询
//        $db->query("set names utf8");
//        $result=$db->query("select * from demo");
//        //取出数据
//        $data=array();
//        while ($row=$result->fetch_assoc()){
//            $data[]=($row);
//        }
//
////        $en->assign("data",$arr);
////        $en->display("index.html");
//
//        $smarty->assign("data",$data);
//        $smarty->display("index.html");
//    }
//}