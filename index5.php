<?php
class ArrayMethod 
{
    public function arraySum($arr)
    {
        $result = 0;

        foreach ($arr as $int) {
            $result += $int;
        }

        return $result;
    }
}

$arr = [1, 10, 4, 3, 2, 10];

$obj = new ArrayMethod;

echo "<pre>";
var_dump($obj->arraySum($arr));


