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
echo "<br>";

$person2 = new Person("小明");
$person2->say();
echo "<br>";

$person3 = new Person("李四", "男", 25);
$person3->say();