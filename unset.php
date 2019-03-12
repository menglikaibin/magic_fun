<?php

class Person
{
    public $sex;
    private $name;
    private $age;

    public function __construct($name="", $age=25, $sex="男")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __unset($content)
    {
        echo "当在类外部使用unset()函数来删除私有成员时自动调用的\n";
        var_dump((bool)isset($this->$content));
    }
}

$person = new Person("小明", 25);
unset($person->sex);
unset($person->name);
unset($person->age);

//返回:
//当在类外部使用unset()函数来删除私有成员时自动调用的
//bool(true)
//当在类外部使用unset()函数来删除私有成员时自动调用的
//bool(true)



