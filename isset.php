<?php

class Person
{
    public $sex;
    private $name;
    private $age;

    public function  __construct($name="", $age=25, $sex="男")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __isset($content)
    {
        echo "当在类外部使用isset()函数测定私有成员{$content}时,自动调用\n";
        var_dump((bool)(isset($this->$content)));
    }
}

$person = new Person("小明", 25);
echo var_dump(isset($person->sex)) . "\n";
echo isset($person->name) . "\n";
echo isset($person->ss) . "\n";

//返回:
//bool(true)
//
//当在类外部使用isset()函数测定私有成员name时,自动调用
//bool(true)
//
//当在类外部使用isset()函数测定私有成员ss时,自动调用
//bool(false)
