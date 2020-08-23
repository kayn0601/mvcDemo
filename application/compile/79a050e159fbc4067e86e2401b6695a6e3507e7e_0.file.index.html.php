<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 03:24:01
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f41e151300ed6_81584776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a050e159fbc4067e86e2401b6695a6e3507e7e' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\index.html',
      1 => 1598153039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f41e151300ed6_81584776 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台首页</title>
    <style>
        html,body{
            width: 100%;height: 100%;
        }
        body{
            padding: 0;
            margin: 0;
        }
        .header{
            width: 100%;
            min-height: 20%;
            background: #3882bb;
        }
        .header h1{
            text-align: center;
            padding-top: 30px;
            margin: 0;
        }
        .logininfo{
            float: right;
            margin-right: 30px;
        }
        .main{
            width: 100%;
            height: 70%;
            border: 1px solid red;
        }
        .bottom{
            width: 100%;
            min-height: 10%;
            position: relative;
        }
        .bottom div{
            position: absolute;
            left: 0;right: 0;top: 0;bottom: 0;
            margin: auto;
            text-align: center;
            line-height: 40px;
        }
        .left{
            width: 25%;height: 100%;border-right: 5px solid #000;
            float: left;box-sizing: border-box;
        }
        .right{
            width: 75%;height: 100%;
            float: left;box-sizing: border-box;
        }
        iframe{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>欢迎来到后台管理系统</h1>
        <div class="logininfo">
            <span>用户：<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
，</span>
            <span>
                <a href="/project/mvcDemo/index.php/admin/index/logout">退出登录</a>
            </span>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <ul>
                <li>
                    用户管理
                    <ul>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/index/adduser" target="main">添加用户</a>
                        </li>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/index/edituser" target="main">修改用户</a>
                        </li>
                    </ul>
                </li>
                <li>
                    栏目管理
                    <ul>
                        <li>
                            添加栏目
                        </li>
                        <li>
                            修改栏目
                        </li>
                    </ul>
                </li>
                <li>
                    内容管理
                    <ul>
                        <li>
                            添加内容
                        </li>
                        <li>
                            修改内容
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="main"></iframe>
        </div>
    </div>
    <div class="bottom">
        <div>xxxx版权信息，xxx制作，联系方式</div>
    </div>
</body>
</html><?php }
}
