<?php
class ArrayMethod 
{
    function inArray($val, $arr)
    {
        foreach ($arr as $key) {
            if ($key == $val) {
                return true;
            }
        }

        return false;
    }
}

$arr = [1, 77, 10, 4, 3, 2,];
$val = 77;

$obj = new ArrayMethod;

echo "<pre>";
var_dump($obj->inArray($val, $arr));