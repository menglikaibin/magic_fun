<?php

class Person
{
    public $name;
    public $age;
    public $sex;

    public function __construct($name="", $sex="男", $age=22)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    /**
     * 声明一个析构方法
     */
    public function __destruct()
    {
        echo "我还要再抢救一下,我叫:" . $this->name;
    }
}

$person = new Person("小明");
unset($person);

//返回
/*
    我还要再抢救一下,我叫:小明
 */
