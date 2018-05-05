<?php
//引入文件
include_once "demo/one.php";
require_once "demo/two.php";

//空间命名别名 (类 函数 常量)
use number\gather\One;
use number\two as replaceTwo;     //防止重名
use function number\acount;
use const number\A;

//$oneObj = new number\One();     //空间命名下的类实例化
//$oneObj = new One();            //use取别名后的实例化
//echo $oneObj->index();
//$twoObj = new replaceTwo();     //use取别名后的实例化
//echo $twoObj->index();
//var_dump(number\acount());      //空间命名下的方法
//var_dump(acount());             //空间命名use方法
//var_dump(number\A);             //空间命名下的常量
//var_dump(A);                    //空间命名use常量

//TODO 无namespace 是存在全局命名空间
//调用全局 class function const 前面加\
//class会报错，方法 常量会自动去全局寻找