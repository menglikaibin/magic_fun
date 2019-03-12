<?php

/**
 * 文件autoload.php
 */
function __autoload($className)
{
    $filePath = "project/class/{$className}.php";
    if (is_readable($filePath)) {
        require($filePath);
    }
}

if (1) {
    $a = new A();
    $b = new B();
    $c = new C();
    //业务逻辑
} else if (2) {
    $a = new A();
    $b = new B();
    //_业务逻辑
}

//当php引擎第一次使用类A,但是找不到时,会自动调用__autoload()方法,并将类名"A"作为参数传入.
//所以,我们在__autoload()中需要做的就是根据类名,找到相应的文件,并包含进来,如果我们的方法也找不到,那么php引擎就会报错了.

