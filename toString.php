<?php

/**
 * Class Person
 * __toString()方法用于一个类被当做字符串时应该怎样回应.
 * 此方法必须返回一个字符串,否则将发出一条`E_RECOVERABLE_ERROR`级别的致命错误.
 * 不能在__toString()方法中抛出一场.这么做会导致致命错误.
 */
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

//    public function __toString()
//    {
//        return "go go go";
//    }
}

$person = new Person("小明");
echo $person;

//返回:go go go

//返回(注释__toString()方法):
//Recoverable fatal error: Object of class Person could not be converted to string in F:\phpstudy\
//PHPTutorial\WWW\magic\toString.php on line 29
