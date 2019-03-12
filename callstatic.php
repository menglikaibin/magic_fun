<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 2019/3/11
 * Time: 8:30
 */
class Person
{
    function say()
    {
        echo "Hello, world!<br>";
    }

    /**
     * 声明此方法用来处理调用对象中不存在的方法
     */
    public static function __callStatic($name, $arguments)
    {
        echo "你所调用的静态方法: " . $name . "(参数: \n";
        print_r($arguments); // 输出调用不存在的方法时的参数列表
        echo "\n" . ")不存在!<br>\n"; //结束换行
    }
}

$person = new Person();
$person::run("teacher"); //调用对象中不存在的方法,则自动调用了对象中的__call()方法
$person::eat("guapi", "liangliang");
$person->say();