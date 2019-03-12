<?php

/**
 * Class C
 * __debugInfo(),打印所需调试的信息
 */
class C
{
    private $prop;

    public function __construct($val)
    {
        $this->prop = $val;
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        return [
            'propSquared' => $this->prop ** 2
        ];
    }
}

var_dump(new C(42));

//返回:
/*
    object(C)#1 (1) {
      ["propSquared"]=>
      int(1764)
    }
*/
