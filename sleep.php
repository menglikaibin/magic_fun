<?php

/**
 * Class Person
 * serialize()函数会检查类中是否存在一个魔术方法__sleep(),如果存在则该方法会优先被调用,
 * 然后才执行序列化操作.此功能可以用于清理对象,并返回一个包含对象中所有应被序列化的变量名称的数组.
 * 如果该方法未返回任何内容,则null被序列化,并产生一个e_notice级别的错误
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

    public function __sleep()
    {
        echo "当在类外部使用serialize()时会调用这里的__sleep()方法\n";
        $this->name = base64_encode($this->name);
        return array('name', 'age');
    }
}

$person = new Person("小明"); //初始赋值
echo $ss = serialize($person);
echo "\n";
print_r(unserialize($ss));

//返回:
/*
    当在类外部使用serialize()时会调用这里的__sleep()方法
    O:6:"Person":2:{s:4:"name";s:8:"5bCP5piO";s:3:"age";i:25;}
    Person Object
    (
        [sex] =>
        [name] => 5bCP5piO
        [age] => 25
    )
*/
