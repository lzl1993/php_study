<?php
namespace index;
include_once "three.php";

function test2(){
    return "index/test2";
}

const Test3  = "index/test3";
//var_dump(new \test1);  //获取全局要\
//var_dump(test2());  //获取函数 todo 当前
//var_dump(\test2()); //获取函数 todo 全局
//var_dump(Test3);  //获取函数 todo 当前
//var_dump(\Test3);  //获取函数 todo 全局