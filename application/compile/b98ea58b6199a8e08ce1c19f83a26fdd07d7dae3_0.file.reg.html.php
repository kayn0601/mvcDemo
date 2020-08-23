<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 03:30:45
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3f3fe53ef284_55328660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98ea58b6199a8e08ce1c19f83a26fdd07d7dae3' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\reg.html',
      1 => 1597980638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f3fe53ef284_55328660 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/reg.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jquery3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/reg.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jquery.validate.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal" role="form" action="/project/mvcDemo/index.php/admin/reg/addUser" method="post">
    <div class="form-group">
        <h1>注册</h1>
        <label for="firstname" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" placeholder="请输入用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="lastname" placeholder="请输入密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname1" class="col-sm-2 control-label">再次输入密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="lastname1" placeholder="请再次输入密码" name="pass1">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
            <a href="/project/mvcDemo/index.php/admin" class="btn btn-default">返回登录界面</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
