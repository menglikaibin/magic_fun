<?php

/**
 * Class Person
 * __set()的作用:__set($property, $value)方法用来设置私有属性,给一个未定义的属性赋值时,
 * 此方法会被触发,传递的参数是被设置的属性名和值.
 */
class Person
{
    private $name;
    private $age;

    public function __construct($name="", $age=25)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @param $property
     * @param $value
     */
    public function __set($property, $value)
    {
        if ($property == "age") {
            if ($value > 150 || $value < 0) {
                return;
            }
        }
        $this->$property = $value;
    }

    public function say()
    {
        echo "我叫:" . $this->name . ", 今年" . $this->age . "岁";
    }

    public function sy()
    {
        $this->say();
    }
}


$person = new Person("小明", 25);//注意,初始值将被下面所改变
//自动调用了__set()函数,将属性名name传个第一个参数,将属性值"李四"传给第二个参数
$person->name = "小红"; //赋值成功,如果没有__set(),则出错.
//自动调用了__set()函数,讲属性名age传个第一个参数,将属性值26传个第二个参数.
$person->age = 16; //赋值成功.
$person->age = 160; //非法值,赋值失败
$person->sy();

//返回:我叫:小红, 今年16岁

