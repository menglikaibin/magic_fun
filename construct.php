<?php

class Person
{
    public $name;
    public $age;
    public $sex;

    /**
     * 显示一个构造方法且带参数
     */
    public function __construct($name="", $sex="男", $age=22)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    /**
     * say方法
     */
    public function say()
    {
        echo "我叫: " . $this->name . ", 性别: " . $this->sex . ", 年龄: " . $this->age . "岁";
    }
}

$person1 = new Person();
$person1->say();
echo "\n";

$person2 = new Person("小明");
$person2->say();
echo "\n";

$person3 = new Person("李四", "男", 25);
$person3->say();

//返回:
/*
    我叫: , 性别: 男, 年龄: 22岁
    我叫: 小明, 性别: 男, 年龄: 22岁
    我叫: 李四, 性别: 男, 年龄: 25岁
*/
