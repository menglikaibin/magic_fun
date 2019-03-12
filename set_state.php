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

    public static function __set_state($an_array)
    {
        $a = new Person();
        $a->name = $an_array['name'];
        return $a;
    }
}

$person = new Person("小明");
$person->name = "小红";
var_export($person);

//返回:
//Person::__set_state(array(
//   'sex' => '男',
//   'name' => '小明',
//   'age' => 25,
//))

//返回(加上__set_state()方法):
//Person::__set_state(array(
//   'sex' => '男',
//   'name' => '小红',
//   'age' => 25,
//))
