<?php

class Person
{
    public $sex;
    public $name;
    public $age;

    public function __construct($name="", $age=25, $sex="男")
    {
        $this->name =  $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        echo "当在类外部使用serialize()时会调用这里的__sleep()方法\n";
        $this->name = base64_encode($this->name);
        return array('name', 'age');
    }

    /**
     *__wakeup()
     */
    public function __wakeup()
    {
        echo "当在类外部使用unserialize()时会调用这里的__wakeup()方法\n";
        $this->name = 2;
        $this->sex = "男";
        // 这里不需要返回数组
    }
}

$person = new Person("小明"); //初始赋值
echo $ss = serialize($person) . "\n";
print_r(unserialize($ss));

//返回(注释__wakeup()方法):
//当在类外部使用serialize()时会调用这里的__sleep()方法
//O:6:"Person":2:{s:4:"name";s:8:"5bCP5piO";s:3:"age";i:25;}Person Object
//(
//    [sex] =>
//    [name] => 5bCP5piO
//    [age] => 25
//)

//返回:
//当在类外部使用serialize()时会调用这里的__sleep()方法
//O:6:"Person":2:{s:4:"name";s:8:"5bCP5piO";s:3:"age";i:25;}
//当在类外部使用unserialize()时会调用这里的__wakeup()方法
//Person Object
//(
//    [sex] => 男
//    [name] => 2
//    [age] => 25
//)
