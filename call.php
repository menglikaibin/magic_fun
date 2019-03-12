<?php

class Person
{
    function say()
    {
        echo "hello, world!\n";
    }

    /**
     *声明此方法用来处理调用对象中不存在的方法
     */
    function __call($funName, $arguments)
    {
        echo "你所调用的函数: " . $funName . "(参数: \n"; //输出调用不存在的方法名
        print_r($arguments); //参数
        echo ")不存在!\n"; //结束
    }
}

$person = new Person();
$person->run("teacher"); //方法不存在,自动调用__call()方法
$person->eat("11","22");
$person->say();

//返回:
/*
    你所调用的函数: run(参数:
    Array
    (
        [0] => teacher
    )
    )不存在!
    你所调用的函数: eat(参数:
    Array
    (
        [0] => 11
        [1] => 22
    )
    )不存在!
    hello, world!
*/
