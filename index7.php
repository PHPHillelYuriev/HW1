<?php
class ArrayMethod
{
    public function myArrayDiff($arr, $arr1)
    {
        $finalArr = [];

        foreach ($arr as $key) {
            if (!in_array($key, $arr1)) {
                $finalArr[] = $key;
            }
        }

        return $finalArr;
    }
}

$arr = [1, 77, 10, 4, 3, 2, 99, 88];
$arr1 = [1, 77, 4, 3, 66];

$obj = new ArrayMethod;

echo "<pre>";
var_dump($obj->myArrayDiff($arr, $arr1));





