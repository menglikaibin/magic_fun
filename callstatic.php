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
        echo "Hello, world!\n";
    }

    /**
     * 声明此方法用来处理调用对象中不存在的方法
     */
    public static function __callStatic($name, $arguments)
    {
        echo "你所调用的静态方法: " . $name . "(参数: \n";
        print_r($arguments); // 输出调用不存在的方法时的参数列表
        echo ")不存在!\n"; //结束换行
    }
}

$person = new Person();
$person::run("teacher"); //调用对象中不存在的方法,则自动调用了对象中的__call()方法
$person::eat("guapi", "liangliang");
$person->say();

//返回
/*
    你所调用的静态方法: run(参数:
    Array
    (
        [0] => teacher
    )
    )不存在!
    你所调用的静态方法: eat(参数:
    Array
    (
        [0] => guapi
        [1] => liangliang
    )
    )不存在!
    Hello, world!
/*

