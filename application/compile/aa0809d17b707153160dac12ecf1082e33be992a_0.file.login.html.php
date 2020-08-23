<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 11:41:08
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4104545922f1_75115065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0809d17b707153160dac12ecf1082e33be992a' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\login.html',
      1 => 1598096433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4104545922f1_75115065 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jquery3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jquery.validate.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <form class="form-horizontal" role="form" action="/project/mvcDemo//index.php/admin/index/login" method="post" style="height: 350px;">
        <div class="form-group">
            <h1>欢迎来到后台管理中心</h1>
            <label for="firstname" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" placeholder="请输入用户名" name="user">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="lastname" placeholder="请输入密码" name="pass">
            </div>
        </div>
        <div class="form-group">
            <label for="code" class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10 code-box">
                <input type="text" class="form-control" id="code" placeholder="请输入验证码" name="code" style="width: 30%;float: left">
                <img src="http://localhost/project/mvcDemo/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost/project/mvcDemo/index.php/admin/index/mycode?'+Math.random()" width="120" style="margin-left: 10px;cursor: pointer">
                <span style="font-size: 12px;cursor: default">看不清楚？点击更换</span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">登录</button>
                <a href="/project/mvcDemo/index.php/admin/reg/add" class="btn btn-default">注册</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}
