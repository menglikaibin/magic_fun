<?php

/**
 * Class Person
 * 在php面向对象编程中,类的成员属性被设定为private后,如果我们试图在外面调用它则会出现
 * "不能访问某个私有属性"的错误.为了解决这个问题我们可以使用魔术方法__get().
 */

/**
 * __get()作用:在程序运行过程中,通过它可以在对象的外部获取私有成员属性的值.
 */
class Person
{
    private $name;
    private $age;

    private static $sss=10;

    function __construct($name="", $age=1)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * 在类中添加__get()方法,在直接获取属性值时自动调用一次,以属性名作为参数传入并处理
     * @param $propertyName
     * @return int
     */
    public function __get($propertyName)
    {
        if ($propertyName == "age") {
            if ($this->age > 30) {
                return $this->age - 10;
            } else {
                return $this->$propertyName;
            }
        } else {
            return $this->$propertyName;
        }
    }

}

$person = new Person("小明", 60);
echo "姓名: " . $person->name . "\n";
echo "年龄: " . $person->age . "\n";

//返回:
//姓名: 小明
//年龄: 50