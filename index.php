<?php
session_start();
header("content-type:text/html;charset=utf8");
define("MVC",true);
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);

require_once "libs/start.php";