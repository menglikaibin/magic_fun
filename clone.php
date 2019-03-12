<?php

class Person
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name="", $age=25, $sex="男")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __clone()
    {
        echo __METHOD__ . "你正在克隆对象\n";
    }
}

$person = new Person("小明"); //初始赋值
$person2 = clone $person;

var_dump('person1:');
var_dump($person);
echo "\n";
var_dump('person2:');
var_dump($person2);

//返回:
//Person::__clone你正在克隆对象
//string(8) "person1:"
//object(Person)#1 (3) {
//  ["sex"]=>
//  string(3) "男"
//  ["name"]=>
//  string(6) "小明"
//  ["age"]=>
//  int(25)
//}
//
//string(8) "person2:"
//object(Person)#2 (3) {
//  ["sex"]=>
//  string(3) "男"
//  ["name"]=>
//  string(6) "小明"
//  ["age"]=>
//  int(25)
//}
