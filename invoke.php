<?php

class Person
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name = "", $age = 25, $sex = "男")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __invoke()
    {
        echo "这可是一个对象哦";
    }
}

$person = new Person("小明"); //初始赋值
$person();

//返回:这可是一个对象哦

//返回(注释__invoke()方法):
//Fatal error: Uncaught Error: Function name must be a string in F:\phpstudy\PHPTutorial\WWW\magic\invoke.php:23